@extends('outer')

@section('body')
<div class="col-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body ">
                  <h4 class="card-title">Login</h4>

                  <form class="form-inline" method="POST" action="{{route('processLogin')}}">
                    <label class="sr-only" for="email">Email/Username</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="email" name="email" placeholder="jane@doe.com" required value="{{old('email')}}">
                    <label class="sr-only" for="password">Password</label>
                    <div class="input-group mb-2 mr-sm-2">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                      @if ($errors->has('email'))
                      <span class="alert alert-danger err">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                      <label class="form-check-label already">
                        Do not have an account with us? <a href="{{route('register')}}">Register</a>
                      </label><br/>
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
@stop