@extends('layouts.app')

@section('section1')

@section('title', "Forget Password")

@section('btn', 'Submit')



<section id="body">
          <div class="container addUser-container LoginUser-container">
                <div class="column1">
                      <div class="h1">
                            <h1>@yield('title')</h1>
                      </div>
                </div>
                <form id="login">
                <div class="column2">
                        <div class="input">
                              <label>Enter Your Email <span style="color:red;">*</span></label>
                              <input type="email" id="Email" required>
                        </div>
                      
                        <div class="button">
                              <button type="submit">@yield('btn')</button>
                        </div>
                         
                </div>
                </form>
          </div>
          
</section>

@endsection


@section('js')

<script src="js/Authentication/forgetPassword.js"></script>
<script src="js/Authentication/Auth.js"></script>

@endsection