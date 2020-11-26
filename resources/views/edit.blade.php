@extends("layout.layout")
@section("content")
   <!-- Material form register -->
<div class="container mt-4">
    
    @if(Session('success'))
        <div class="alert alert-success">
            {{Session('success')}}
        </div>
    @endif
    <div class="card">
        <h5 class="card-header brown lighten-3  white-text text-center py-4">
            <strong>Eidt Form</strong>
        </h5>
    
        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">
    
            <!-- Eidt Form -->
            <form class="text-center"  action="{{route('update',$pizza->id)}}" method="post">
            @csrf
                <!-- User Name -->
                <div class="md-form mt-4">
                    <div class="md-form mt-4">
                        <input type="text" id="materialRegisterFormEmail" class="form-control" name="username" value="{{$pizza->username}}">
                        <label for="materialRegisterFormEmail">User Name</label>
                    @error('username')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <!-- Pizza Name -->
                <div class="md-form mt-4">
                    <input type="text" id="materialRegisterFormEmail" class="form-control" name="pizza_name" value="{{$pizza->pizza_name}}">
                    <label for="materialRegisterFormEmail">Pizza Name</label>
                    @error('pizza_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="md-form mt-4">
                    <input type="text" id="materialRegisterFormEmail" class="form-control" name="topping" value="{{$pizza->topping}}">
                    <label for="materialRegisterFormEmail">Toppings</label>
                    @error('topping')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="md-form mt-4">
                    <input type="text" id="materialRegisterFormEmail" class="form-control" name="sauce" value="{{$pizza->sauce}}">
                    <label for="materialRegisterFormEmail">Sauce</label>
                    @error('sauce')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="md-form mt-4">
                    <input type="text" id="materialRegisterFormEmail" class="form-control" name="price" value="{{$pizza->price}}">
                    <label for="materialRegisterFormEmail">Price</label>
                    @error('price')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
    
                
    
                <!-- Order button -->
                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Update</button>
    
                
    
            </form>
            <!-- Form -->
    
        </div>
    
    </div>
</div>
<!-- Material form register -->
@endsection