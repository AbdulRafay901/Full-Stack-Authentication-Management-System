@extends('layouts.app')

<div id="loading">
    <div class="loader-box">
        <div class="spinner"></div>
        <p>Loading...</p>
    </div>
</div>

@section('section1')

<form id="otp-form">
<div class="otp">
      <h1>Enter OTP</h1>
      <p>We have sent a verification code to <br> your Email</p>

      <div class="inputs">
            <input type="text" maxlength="1" class="opt-code">
            <input type="text" maxlength="1" class="opt-code">
            <input type="text" maxlength="1" class="opt-code">
            <input type="text" maxlength="1" class="opt-code">
            <input type="text" maxlength="1" class="opt-code">
            <input type="text" maxlength="1" class="opt-code">
      </div>

      <button type="submit" >Verify</button>

      <p>Didn't receive the code?</p>
      <button type="button" class="resendCode">Resend Code</button>
</div>
</form>

<div class="error">
                <p><i class="ri-error-warning-fill"></i> Form submission failed, <span id="error-edit"></span></p>
</div>

@endsection('section1')



@section('js')

<script src="js/Authentication/codePage.js"></script>
<!-- <script src="js/Authentication/Auth.js"></script> -->
@endsection

