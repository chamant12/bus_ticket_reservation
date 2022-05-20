@extends('inner')

@section('body')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Rservations</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Passenger name</th>
                          <th>NIC.</th>
                          <th>Reserved On</th>
                          <th>View details</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($reservations as $reservation)
                        <tr>
                          <td>{{$reservation->passenger->name}}</td>
                          <td>{{$reservation->passenger->nic}}</td>
                          <td>{{$reservation->created_at}}</td>
                          <td><a class="nav-link" href="{{route('viewReservation', ['id'=> $reservation->id])}}">
                                <i class="mdi mdi-bus"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                    
                  </div>
                  <div class="d-flex justify-content-center">
                      {!! $reservations->links() !!}
                  </div>
                  
@stop