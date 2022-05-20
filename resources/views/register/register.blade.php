@extends('outer')

@section('body')
<div class="col-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body ">
                <h4 class="card-title">Register</h4>
                  <form class="form-inline" id="registrationForm" method="POST" action="{{route('processRegistration')}}">
                    <label class="sr-only" for="firstName">First name</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="firstName" name="firstName" placeholder="jane" required value="{{ old('firstName') }}">
                    @if ($errors->register->has('firstName'))
                    <span class="alert alert-danger err">{{ $errors->register->first('firstName') }}</span>
                    @endif
                    <label class="sr-only" for="lastName">Last name</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="lastName" name="lastName" placeholder="doe" required value="{{ old('lastName') }}">
                    @if ($errors->register->has('lastName'))
                    <span class="alert alert-danger err">{{ $errors->register->first('lastName') }}</span>
                    @endif
                    <label class="sr-only" for="email">Email</label>
                    <input type="email" class="form-control mb-2 mr-sm-2" id="email" name="email" placeholder="jane@doe.com" required value="{{ old('email') }}">
                    @if ($errors->register->has('email'))
                    <span class="alert alert-danger err">{{ $errors->register->first('email') }}</span>
                    @endif
                    <label class="sr-only" for="password">Password</label>
                    <div class="input-group mb-2 mr-sm-2">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                      @if ($errors->register->has('password'))
                      <span class="alert alert-danger err">{{ $errors->register->first('password') }}</span>
                      @endif
                      <span class="alert alert-danger err" id="paaword_err" style="display:none;">Paswords do not match</span>
                    </div>
                    <label class="sr-only" for="cpassword">Confirm Password</label>
                    <div class="input-group mb-2 mr-sm-2">
                      <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Password" required>
                    </div>
                    <label class="form-check-label already">
                        Already registered with us? <a href="{{route('login')}}">Login</a>
                      </label><br/>
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
@stop
@section('scripts')
<script>
$("#registrationForm").submit(function(e){
  if($("#password").val()!=$("#cpassword").val()){
    e.preventDefault();
    $("#paaword_err").show();
  } else {
    $("#paaword_err").hide();
  }
});
</script>
@stop