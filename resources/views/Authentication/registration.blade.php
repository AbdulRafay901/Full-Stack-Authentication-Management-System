@extends('layouts.app')



@section('section1')

@section('title', "Registration")

@section('btn', 'Submit')

<section>
          <div class="container addUser-container">
                <div class="column1">
                      <div class="h1">
                            <h1>@yield('title')</h1>
                      </div>
                </div>
                <form id="Registration">
                <div class="column2">
                        <div class="input">
                              <label>First Name <span style="color:red;">*</span></label>
                              <input type="text" id="Name">
                        </div>
                        <div class="input">
                              <label>Your Email <span style="color:red;">*</span></label>
                              <input type="email" id="Email">
                        </div>
                       <div class="input">
                              <label>Enter Password <span style="color:red;">*</span></label>
                              <input type="password" id="Password">
                        </div>
                        <div class="input">
                              <label>Confirm Password <span style="color:red;">*</span></label>
                              <input type="password" id="Confirm">
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

<script src="js/Authentication/registration.js"></script>
<script src="js/helper.js"></script>


@endsection