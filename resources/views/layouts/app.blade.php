<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" integrity="sha512-kJlvECunwXftkPwyvHbclArO8wszgBGisiLeuDFwNM8ws+wKIw0sv1os3ClWZOcrEB2eRXULYUsm8OVRGJKwGA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('css/Students/student.css') }}">



<title>My SPA</title>
</head>
<body>

<div id="app"></div>



<div class="error">
      <p><i class="ri-error-warning-fill"></i> Form submission failed, <span id="error-edit"></span></p>
</div>
<div class="success">
      <p id="register-success"><span id="Employee-Name"></span></p>
</div>


<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/3.2.7/purify.min.js" integrity="sha512-78KH17QLT5e55GJqP76vutp1D2iAoy06WcYBXB6iBCsmO6wWzx0Qdg8EDpm8mKXv68BcvHOyeeP4wxAL0twJGQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="/js/router.js"></script>
<script src="/js/Authentication/registration.js"></script>
<script src="/js/Authentication/login.js"></script>
<script src="/js/Authentication/codePage.js"></script>
<script src="/js/Authentication/forgetPassword.js"></script>
<script src="/js/Authentication/changePassword.js"></script>
<script src="/js/Students/index.js"></script>
<script src="/js/Students/List.js"></script>
<script src="/js/Students/create.js"></script>
<script src="/js/Students/edit.js"></script>
<script src="/js/helper.js"></script>
<script src="/js/Authentication/api.js"></script>
<script src="/js/Authentication/Auth.js"></script>
<script src="/js/app.js"></script>

</body>
</html>

