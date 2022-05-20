@extends('inner')

@section('body')
<div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Reservation details</h4>

                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="ExampleRadio1" id="ExampleRadio1" checked="true" disabled>
                              Travelling  date
                            <i class="input-helper"></i></label>
                            <input type="text" class="form-control" readonly value="{{date('Y-m-d',strtotime($departure->arrival))}}">
                          </div>
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="ExampleRadio1" id="ExampleRadio1" checked="true" disabled>
                              Departure time
                            <i class="input-helper"></i></label>
                            <input type="text" class="form-control" readonly value="{{date('H:i:s',strtotime($departure->arrival))}}">
                          </div>
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="ExampleRadio1" id="ExampleRadio1" checked="true" disabled>
                              Arrival time
                            <i class="input-helper"></i></label>
                            <input type="text" class="form-control" readonly value="{{date('H:i:s',strtotime($arrival->arrival))}}">
                          </div>
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="ExampleRadio1" id="ExampleRadio1" checked="true" disabled>
                              Date of reservation
                            <i class="input-helper"></i></label>
                            <input type="text" class="form-control" readonly value="{{date('Y-m-d',strtotime($reservation->created_at))}}">
                          </div>
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="ExampleRadio1" id="ExampleRadio1" checked="true" disabled>
                              Passenger Name
                            <i class="input-helper"></i></label>
                            <input type="text" class="form-control" readonly value="{{$reservation->passenger->name}}">
                          </div>
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="ExampleRadio1" id="ExampleRadio1" checked="true" disabled>
                              Passenger NIC
                            <i class="input-helper"></i></label>
                            <input type="text" class="form-control" readonly value="{{$reservation->passenger->nic}}">
                          </div>
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="ExampleRadio1" id="ExampleRadio1" checked="true" disabled>
                              Vehicle details
                            <i class="input-helper"></i></label>
                            <input type="text" class="form-control" readonly value="{{$bus->vehicle_number.' '.$bus->vehicle_name}}">
                          </div>
                          
                        </div>
                        <button onclick="window.print()" class="btn btn-primary">Print this page</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
                
@stop