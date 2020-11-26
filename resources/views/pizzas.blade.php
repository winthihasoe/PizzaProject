@extends("layout.layout")
@section("content")
<div class="container">
    @if(Session('delete'))
        <div class="alert alert-danger mt-3 mb-3">
            {{Session('delete')}}
        </div>
    @endif
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Username</th>
            <th scope="col">Pizza Name</th>
            <th scope="col">Topping</th>
            <th scope="col">Sauce</th>
            <th scope="col">Price</th>
            <th scope="col">Edit Order</th>
            <th scope="col">Order Complete</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($pizzas as $pizza)
            
          <tr>
            <th scope="row">{{$pizza['id']}}</th>
            <th scope="row">{{$pizza['username']}}</th>
            <th scope="row">{{$pizza['pizza_name']}}</th>
            <th scope="row">{{$pizza['topping']}}</th>
            <th scope="row">{{$pizza['sauce']}}</th>
            <th scope="row">$ {{$pizza['price']}}</th>
        
            <td><a class="btn btn-sm btn-warning mt-0" href="{{route("edit",$pizza->id)}}">Edit Order</a></td>
            <td><a class="btn btn-sm btn-success mt-0" href="{{route("delete",$pizza->id)}}">Order Success</a></td>
          </tr>
          
        @endforeach
          
        </tbody>
      </table>

      
@endsection
