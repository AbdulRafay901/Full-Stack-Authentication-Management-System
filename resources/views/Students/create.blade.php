
@extends('layouts.app')

@section('section1')

@section('title', "Add Employee")

@section('btn', 'Add')

<section>
          <div class="container addUser-container">
                <div class="column1">
                      <div class="h1">
                            <h1>@yield('title')</h1>
                      </div>
                </div>
                <form id="addUser">
                <div class="column2">
                        <div class="input">
                              <label>Name <span style="color:red;">*</span></label>
                              <input type="text" id="Name">
                        </div>
                        <div class="input">
                              <label>Email <span style="color:red;">*</span></label>
                              <input type="email" id="Email">
                        </div>
                        <div class="input">
                              <label>Address <span style="color:red;">*</span></label>
                              <input type="text" id="Address">
                        </div>
                        <div class="input">
                              <label>Phone <span style="color:red;">*</span></label>
                              <input type="number" id="Phone">
                        </div>
                        <div class="button">
                              <button type="submit">@yield('btn')</button>
                        </div>
                </div>
                </form>
          </div>
          <div class="error">
                <p><i class="ri-error-warning-fill"></i> Form submission failed, Ensure all fields are correctly filled</p>
          </div>
          <div class="success">
                 <p><span id="Employee-Name"></span> Employee Added</p>
          </div>
</section>

@endsection


@section('js')

<script type="module" src="{{ asset('js/Students/create.js') }}"></script>


@endsection