@extends('inner')

@section('body')
<div class="col-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body ">
                <h4 class="card-title">Create Reservation</h4>
                  <form class="form-inline" method="POST" action="{{route('reserve')}}">
                    <label class="sr-only" for="name">Passenger name</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="name" name="name" placeholder="jane doe" required value="{{ old('name') }}">
                    @if ($errors->reserve->has('name'))
                    <span class="alert alert-danger err">{{ $errors->reserve->first('name') }}</span>
                    @endif
                    <label class="sr-only" for="nic">Passenger NIC</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="nic" name="nic" placeholder="783444556V" required value="{{ old('nic') }}">
                    @if ($errors->reserve->has('nic'))
                    <span class="alert alert-danger err">{{ $errors->reserve->first('nic') }}</span>
                    @endif
                    <label class="sr-only" for="tour_id">Tour</label>
                    <select class="form-control" id="select_tour" name="tour_id" required>
                              <option value="">Select Tour</option>
                              @foreach($tours as $tour)
                              <option value="{{$tour->id}}">{{$tour->tour_name." - from : ".$tour->startStation->name." : ".$tour->startStation->stationTourXref->arrival}}</option>
                              @endforeach
                            </select>
                    @if ($errors->reserve->has('tour_id'))
                    <span class="alert alert-danger err">{{ $errors->reserve->first('tour_id') }}</span>
                    @endif
                    <label class="sr-only" for="password">Bus selected</label>
                    <div class="input-group mb-2 mr-sm-2">
                      <input type="text" class="form-control" placeholder="Bus you selected" id="selected_bus" readonly>
                    </div>
                    <label class="sr-only" for="departure">Depart from</label>
                    <select class="form-control" id="departure" name="departure" required>
                              <option value="">Select Station</option>
                            </select>
                    @if ($errors->reserve->has('departure'))
                    <span class="alert alert-danger err">{{ $errors->reserve->first('departure') }}</span>
                    @endif
                            <label class="sr-only" for="arrival">Destination</label>
                    <select class="form-control" id="arrival" name="arrival" required>
                              <option value="">Select Station</option>
                            </select>
                    @if ($errors->reserve->has('arrival'))
                    <span class="alert alert-danger err">{{ $errors->reserve->first('arrival') }}</span>
                    @endif
                    <br/>
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>

@stop
@section('scripts')
<script>
  $("#select_tour").change(function(){
    let tour_id =  $("#select_tour option:selected").val();
    if(tour_id!=""){
      $.ajax({
        url: '/api/get-bus-details/'+tour_id,
        success: function(result){
        $("#selected_bus").val(result);
        }
      });
      $.ajax({
        url: '/api/get-stations/'+tour_id,
        success: function(result){
        let data = JSON.parse(result)
        content = data.join();
        $("#departure").empty();
        
        $("#departure").append(content);
        $("#departure").change(function(){
          let departure =  $("#departure option:selected").val();
          $.ajax({
          url: '/api/get-remaining-stations/'+tour_id+"/"+departure,
          success: function(result){
          let data = JSON.parse(result)
          content = data.join();
          $("#arrival").empty();
          $("#arrival").append(content);
          }
        });
        });
        
      }
    });
    }
  });  
</script>
@stop