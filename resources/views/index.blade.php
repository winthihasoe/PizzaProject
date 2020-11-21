@extends("layout.layout")
@section("content")
   <!-- Material form register -->
<div class="container mt-4">
    <h1 class="grey-text d-inline ml-4">Welcome to pizza place.</h1>
    <img src="{{asset('img/shop logo.png')}}" width="200px">
    <div class="card">
        <h5 class="card-header brown lighten-3  white-text text-center py-4">
            <strong>Order Form</strong>
        </h5>
    
        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">
    
            <!-- Form -->
            <form class="text-center"  action="#!">
    
                <!-- User Name -->
                <div class="md-form mt-4">
                    <input type="text" id="materialRegisterFormEmail" class="form-control">
                    <label for="materialRegisterFormEmail">User Name</label>
                </div>
                <!-- Pizza Name -->
                <div class="md-form mt-4">
                    <input type="text" id="materialRegisterFormEmail" class="form-control">
                    <label for="materialRegisterFormEmail">Pizza Name</label>
                </div>
                <div class="md-form mt-4">
                    <input type="text" id="materialRegisterFormEmail" class="form-control">
                    <label for="materialRegisterFormEmail">Toppings</label>
                </div>
                <div class="md-form mt-4">
                    <input type="text" id="materialRegisterFormEmail" class="form-control">
                    <label for="materialRegisterFormEmail">Sauce</label>
                </div>
                <div class="md-form mt-4">
                    <input type="text" id="materialRegisterFormEmail" class="form-control">
                    <label for="materialRegisterFormEmail">Price</label>
                </div>
    
                
    
                <!-- Order button -->
                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Order Now</button>
    
                <!-- Social register -->
                <p>or sign up with:</p>
    
                <a type="button" class="btn-floating btn-fb btn-sm">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a type="button" class="btn-floating btn-tw btn-sm">
                    <i class="fab fa-twitter"></i>
                </a>
                <a type="button" class="btn-floating btn-li btn-sm">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a type="button" class="btn-floating btn-git btn-sm">
                    <i class="fab fa-github"></i>
                </a>
    
                <hr>
    
                <!-- Terms of service -->
                <p>By clicking
                    <em>Sign up</em> you agree to our
                    <a href="" target="_blank">terms of service</a>
    
            </form>
            <!-- Form -->
    
        </div>
    
    </div>
</div>
<!-- Material form register -->
@endsection