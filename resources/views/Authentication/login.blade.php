@extends('layouts.app')

@section('section1')

<div id="app"></div>

<div class="error">
    <p><span id="error-edit"></span></p>
</div>

<div class="success">
    <p id="register-success"></p>
</div>

@endsection

@section('js')

<script src="js/router.js"></script>
<script src="js/Authentication/login.js"></script>
<script src="js/helper.js"></script>

@endsection