@extends('layouts.app')


<div id="loading">
    <div class="loader-box">
        <div class="spinner"></div>
        <p>Loading...</p>
    </div>
</div>

@section('section1')

<section id="body">
          <div class="container">
                <div class="column1">
                      <div class="h1">
                            <h1>Manage Employees</h1>
                      </div>
                      <div class="buttons">
                            <button id="all"><i class="ri-user-minus-fill"></i> Delete</button>
                            <button><a href="addUser"><i class="ri-user-add-fill"></i> Add New Employee</a></button>
                      </div>
                </div>
                <div class="column2" id="column2">
                      <div class="details">
                             <div class="checkbox">
                                   <input type="checkbox">
                             </div>
                             <div class="Name">
                                   <p>Name</p>
                             </div>
                             <div class="Name">
                                   <p>Email</p>
                             </div>
                             <div class="Name">
                                   <p>Address</p>
                             </div>
                             <div class="Name">
                                   <p>Phone</p>
                             </div>
                             <div class="Name">
                                   <p>Actions</p>
                             </div>
                      </div>
                      <div id="users">
                           
                      </div>
                      
                </div>

                <div class="p-l">
                <div class="pagination">
                      <button class="arrow  previous"><</button>
                      <div id="numbers">
                            
                      </div>
                      <button class="arrow next">></button>
                </div>
                <button class="logout">Logout</button>
                </div>
                
          </div>
</section>

@endsection




@section('js')

<script type="module" src="{{ asset('js/Students/index.js') }}"></script>
<script src="js/Authentication/Crud.js"></script>

@endsection