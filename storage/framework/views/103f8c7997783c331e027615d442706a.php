<?php $__env->startSection('title', 'Register - FindHouse'); ?>

<?php $__env->startSection('content'); ?>
<div class="text-center mb-4">
  <h3>Create Your Account</h3>
  <p class="text-muted">Join us today! Please fill in your details.</p>
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
    <label for="name">Full Name</label>
    <div class="input-group">
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
      <div class="input-group-append">
        <div class="input-group-text"><i class="flaticon-user"></i></div>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label for="email">Email Address</label>
    <div class="input-group">
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
      <div class="input-group-append">
        <div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label for="phone">Phone Number</label>
    <div class="input-group">
      <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
      <div class="input-group-append">
        <div class="input-group-text"><i class="fa fa-phone"></i></div>
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
  
  <div class="form-group">
    <label for="password_confirmation">Confirm Password</label>
    <div class="input-group">
      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-enter your password" required>
      <div class="input-group-append">
        <div class="input-group-text"><i class="flaticon-password"></i></div>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="terms" required>
      <label class="custom-control-label" for="terms">
        I agree to the <a href="#" class="text-thm">Terms and Conditions</a> and <a href="#" class="text-thm">Privacy Policy</a>
      </label>
    </div>
  </div>
  
  <div class="form-group">
    <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="newsletter">
      <label class="custom-control-label" for="newsletter">
        Subscribe to our newsletter for updates and offers
      </label>
    </div>
  </div>
  
  <button type="submit" class="btn btn-log btn-block btn-thm">Create Account</button>
  
  <div class="text-center mt-4">
    <p>Already have an account? <a href="<?php echo e(url('/login')); ?>" class="text-thm">Sign In</a></p>
  </div>
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
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

.custom-control-label {
  font-size: 14px;
  color: #666;
}

select.form-control {
  height: auto;
  padding: 12px 15px;
}
</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.header-only', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\msc-it sem1\real estate project\real_estate\resources\views/page-register.blade.php ENDPATH**/ ?>