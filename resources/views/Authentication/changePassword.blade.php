@extends('layouts.app')



@section('section1')

@section('title', "Change Password")

@section('btn', 'Submit')

<section>
          <div class="container addUser-container LoginUser-container">
                <div class="column1">
                      <div class="h1">
                            <h1>@yield('title')</h1>
                      </div>
                </div>
                <form id="login">
                <div class="column2">
                        <div class="input">
                              <label>New Password <span style="color:red;">*</span></label>
                              <input type="password" id="Password">
                        </div>
                       <div class="input">
                              <label>Confirm Password <span style="color:red;">*</span></label>
                              <input type="password" id="ConfirmPassword">
                        </div>
                        
                        <div class="button">
                              <button type="submit">@yield('btn')</button>
                        </div>
                           
                </div>
                </form>
          </div>
          <div class="error">
                <p><i class="ri-error-warning-fill"></i> Form submission failed, <span id="error-edit"></span></p>
          </div>
          <div class="success">
                 <p id="register-success"><span id="Employee-Name"></span></p>
          </div>
</section>

@endsection

@section('js')




<script src="{{ asset('js/Authentication/changePassword.js') }}"></script>
<script src="{{ asset('js/helper.js')}}"></script>
<script src="{{ asset('js/Authentication/Auth.js') }}"></script>



@endsection