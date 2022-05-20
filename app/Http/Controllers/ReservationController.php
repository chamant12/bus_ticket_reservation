<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\BusTourXref;
use App\Models\TourStationXref;
use App\Models\Passenger;
use App\Models\Reservation;
use App\Models\Station;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::with('passenger')->where('reserved_by',auth()->user()->id)->paginate(4);
        return view('reservations.index',compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $tours = Tour::with('startStation','startStation.stationTourXref')->get();
        return view('reservations.reservation', compact('tours'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'nic' => 'required',
            'tour_id' => 'required',
            'departure' => 'required',
            'arrival' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('reserve')->withErrors($validator, 'reserve')->withInput();
        } else {
            try{
                $passenger = Passenger::where('nic',request()->nic)->first();
                if(!$passenger){
                    $passenger = new Passenger();
                    $passenger = Passenger::create(request(['name','nic']));
                }
                
                $reservation = new Reservation();
                $reservation->passenger_id = $passenger->id;
                $reservation->tour_id = request()->tour_id;
                $reservation->depature_station_id = request()->departure;
                $reservation->arrival_station_id = request()->arrival;
                $reservation->reserved_by = auth()->user()->id;
                $reservation->created_at = date('Y-m-d H:i:s');
                $reservation->save();
        
                return redirect()->route('reservations');
            } catch(Exception $e){
                return back()->withErrors([
                    'firstName' => $e->getMessage(),
                ])->withInput();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation = Reservation::with('passenger','tour','tour.startStation.stationTourXref','departure','arrival')->where('id',$id)->first();
        $bus =  BusTourXref::with('bus')->where('tour_id',$reservation->tour->id)->first()->bus;
        $departure = TourStationXref::where(['station_id'=>$reservation->depature_station_id,'tour_id'=>$reservation->tour->id])->first();
        $arrival = TourStationXref::where(['station_id'=>$reservation->arrival_station_id,'tour_id'=>$reservation->tour->id])->first();

        return view('reservations.view',compact('reservation','bus','departure','arrival'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getBusByTourId($tour_id){
        $bus =  BusTourXref::with('bus')->where('tour_id',$tour_id)->first();
        return $bus->bus->vehicle_number."    ".$bus->bus->vehicle_name;
    }

    public function getStationsByTourId($tour_id){
        $stations_xrefs =  TourStationXref::where('tour_id',$tour_id)->get();
        $return_str = ["<option value=''>Select Station</option>"];
        foreach($stations_xrefs as $stations_xref){
            $return_str[$stations_xref->arrival] = "<option value='".$stations_xref->station->id."'>".$stations_xref->station->name." : ".$stations_xref->arrival."</option>";
        }
        ksort($return_str);
        array_pop($return_str);
        return json_encode(array_values($return_str));
    }

    public function getStationsRemainingByTourId($tour_id,$station_id){
        $stations_xrefs =  TourStationXref::where('tour_id',$tour_id)->get();
        $arrival = "";
        $return_str = ["<option value=''>Select Station</option>"];
        foreach($stations_xrefs as $stations_xref){
            $return_str[$stations_xref->arrival] = "<option value='".$stations_xref->station->id."'>".$stations_xref->station->name." : ".$stations_xref->arrival."</option>";
            if($stations_xref->station->id==$station_id){
                $arrival = $stations_xref->arrival;
            }
        }
        ksort($return_str);

        foreach($return_str as $k => $station){
            if($k<=$arrival&&$k!=0){
                unset($return_str[$k]);
            }
        }
        return json_encode(array_values($return_str));
    }
    
}
