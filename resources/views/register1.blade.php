@extends('src.main')
@section('content')
    
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="/savedregister" method="POST">>
          @csrf

          <!-- Email input -->
          <label class="form-label" for="form3Example3">First Name</label>
          <div class="form-outline mb-4">
            <input type="email" name="name" class="form-control form-control-lg"
              placeholder="Enter Your First Name" required/>
          </div>
          <!-- Email input -->
          <label class="form-label" for="form3Example3">Last Name</label>
          <div class="form-outline mb-4">
            <input type="email" name="email" class="form-control form-control-lg"
              placeholder="Enter a valid email address" required/>
          </div>
          <!-- Email input -->
          <label class="form-label" for="form3Example3">Phone Number</label>
          <div class="form-outline mb-4">
            <input type="email" name="phone" class="form-control form-control-lg"
              placeholder="Enter Your Phone Number" required/>
          </div>
          <!-- Email input -->
          <label class="form-label" for="form3Example3">Email address</label>
          <div class="form-outline mb-4">
            <input type="email" name="email" class="form-control form-control-lg"
              placeholder="Enter a valid email address"required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/>
          </div>

          <!-- Password input -->
          <label class="form-label" for="form3Example4">Password</label>
          <div class="form-outline mb-3">
            <input type="password" name="password" class="form-control form-control-lg"
              placeholder="Enter password" required/>
          </div>
          
          <div class="text-center text-lg-start mt-4 pt-2">
            <button class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;" type="submit">Register</button>
          </div>

        </form>
      </div>
    </div>
  </div>    <!-- Right -->
  </div>
</section>  @endsection
