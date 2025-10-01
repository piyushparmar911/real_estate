@extends('layouts.header-only')

@section('title', 'Login - FindHouse')

@section('content')
<div class="text-center mb-4">
  <h3>Login to Your Account</h3>
  <p class="text-muted">Welcome back! Please enter your details.</p>
</div>

<form action="#" method="POST">
  <div class="row">
    <div class="col-12">
      <button type="button" class="btn btn-fb btn-block mb-3">
        <i class="fa fa-facebook float-left mt5"></i> 
        Continue with Facebook
      </button>
    </div>
    <div class="col-12">
      <button type="button" class="btn btn-googl btn-block mb-3">
        <i class="fa fa-google float-left mt5"></i> 
        Continue with Google
      </button>
    </div>
  </div>
  
  <div class="text-center my-4">
    <span class="text-muted">or</span>
  </div>
  
  <div class="form-group">
    <label for="email">Email Address</label>
    <div class="input-group">
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
      <div class="input-group-append">
        <div class="input-group-text"><i class="flaticon-user"></i></div>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label for="password">Password</label>
    <div class="input-group">
      <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
      <div class="input-group-append">
        <div class="input-group-text"><i class="flaticon-password"></i></div>
      </div>
    </div>
  </div>
  
  <div class="form-group d-flex justify-content-between align-items-center">
    <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="remember">
      <label class="custom-control-label" for="remember">Remember me</label>
    </div>
    <a href="#" class="text-thm">Forgot Password?</a>
  </div>
  
  <button type="submit" class="btn btn-log btn-block btn-thm">Sign In</button>
  
  <div class="text-center mt-4">
    <p>Don't have an account? <a href="{{ url('/register') }}" class="text-thm">Create Account</a></p>
  </div>
</form>
@endsection

@push('styles')
<style>
.btn-fb {
  background: #3b5998;
  color: white;
  border: none;
  padding: 12px 20px;
  border-radius: 5px;
  transition: all 0.3s ease;
}

.btn-fb:hover {
  background: #2d4373;
  color: white;
}

.btn-googl {
  background: #dd4b39;
  color: white;
  border: none;
  padding: 12px 20px;
  border-radius: 5px;
  transition: all 0.3s ease;
}

.btn-googl:hover {
  background: #c23321;
  color: white;
}

.form-group label {
  font-weight: 600;
  color: #2c3e50;
  margin-bottom: 8px;
}

.form-control {
  padding: 12px 15px;
  border: 1px solid #ddd;
  border-radius: 5px;
  font-size: 14px;
}

.form-control:focus {
  border-color: #ff5a5f;
  box-shadow: 0 0 0 0.2rem rgba(255, 90, 95, 0.25);
}

.input-group-text {
  background: #f8f9fa;
  border: 1px solid #ddd;
  color: #666;
}

.btn-log {
  background: #ff5a5f;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  font-weight: 600;
  transition: all 0.3s ease;
}

.btn-log:hover {
  background: #e74c3c;
  color: white;
  transform: translateY(-2px);
}

.text-thm {
  color: #ff5a5f !important;
  text-decoration: none;
}

.text-thm:hover {
  color: #e74c3c !important;
  text-decoration: underline;
}
</style>
@endpush
