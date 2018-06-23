@extends('layouts.log')

@section('content')


<div class="container">
  <div class="info">
    <h1>Aplikasi Badan Konseling</h1>
  </div>
</div>
<div class="form">

  <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>

  <form class="login-form form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
  {{ csrf_field() }}
    <input type="text" id="name" class="form-control" name="name" placeholder="name"/>
    <input type="text" id="username" class="form-control" name="username" placeholder="username"/>
    <input type="password" id="password" class="form-control" name="password" placeholder="password"/>
    <input type="password" id="password-confirm" class="form-control" name="password_confirmation" placeholder="password"/>
    <button>Create</button>
    <p class="message">Already registered? <a href="/login">Sign In</a></p>
  </form>



  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>

@endsection