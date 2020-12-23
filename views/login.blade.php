<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Vinothkumar">
  <link href="{{asset('assets/plugins/bootstrap5.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/login.css')}}">
</head>
<body>

  <div class="login-page">
  <div class="form">
      <div class="social">
          <a href="{{route('google.login')}}">
            <button class="btn btn-danger btn-block">Google Login</button>
          </a>
          <br>
          <a href="{{route('facebook.login')}}">
            <button class="btn btn-primary btn-block">Facebook Login</button>
          </a>
          <br>
          <a href="{{route('github.login')}}">
            <button class="btn btn-dark btn-block">Github Login</button>
          </a>
      </div>
      <form class="login-form mt-4">
          <input type="text" placeholder="username"/>
          <input type="password" placeholder="password"/>
          <button class="login-btn">login</button>
          <br>
      </form>
    </div>
  </div>

</body>
  <script src="{{asset('assets/jquery.min.js')}}"></script>
  <script src="{{asset('assets/plugins/bootstrap5.min.js')}}"></script>
  <script src="{{asset('assets/plugins/p5.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/login.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/particles.js')}}"></script>
</html>
<style type="text/css">
  

main{
  position: absolute;
  top: 0;
  left: 0;
}
main .p5Canvas{
  
}
</style>