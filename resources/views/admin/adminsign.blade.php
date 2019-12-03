@extends('layouts.frontview.master')
@section('content')

<!-- OFFSETTING -->

      <!-- 6 column div offset by 3 -->
      <div class="col-md-6">

         <h1 class="text-center">Admin Login</h1>
        <!-- TEXT FIELD GROUPS -->
        <div class="card bg-primary text-center card-form">
              <div class="card-body">

         <form class="form-vertical" role="form" method="POST" action="{{ url('admin') }}">{{ csrf_field() }}




            <div class="form-group text-white">
                <label for="email">{{ __('E-Mail Address') }}</label>



                <input type="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Enter email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
               @enderror


        </div>


            <div class="form-group text-white">
                <label for="email">{{ __('Password') }}</label>



                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="Enter password">

                @error('password')
                 <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror


        </div>


         <div class="form-group">
             <span class="pull-left"><input type="submit" class="btn btn-dark" value="Login" /></span>

        </div>


        <br>

        <br>
        <br>


          <div class="form-group">
               <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>



        </div>



                <small class="form-text text-white">Your email will not ever be shared</small>
            </div>

            <br>


        </form>
      </div>
    </div>

      </div>



@endsection
