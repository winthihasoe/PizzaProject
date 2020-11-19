@extends("layout.layout")
@section("content")
<div class="container">
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
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>$9.99</td>
            <td><button class="btn btn-sm btn-warning mt-0" data-toggle="modal" data-target="#elegantModalForm">Edit Order</button></td>
            <td><button class="btn btn-sm btn-success mt-0">Order Success</button></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@mdo</td>
            <td>$9.99</td>
            <td><button class="btn btn-sm btn-warning mt-0" data-toggle="modal" data-target="#elegantModalForm">Edit Order</button></td>
            <td><button class="btn btn-sm btn-success mt-0">Order Success</button></td>
          </tr>
          
        </tbody>
      </table>

      <!-- Modal -->
            <div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <!--Content-->
                    <div class="modal-content form-elegant">
                        <!--Header-->
                        <div class="modal-header text-center">
                            <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Edit order Table</strong></h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                                <!--Body-->
                                <div class="modal-body mx-4">
                                <!--Body-->

                                <!-- Edit order table -->
                                <div class="md-form mt-4">
                                    <input type="text" id="materialRegisterFormEmail" class="form-control">
                                    <label for="materialRegisterFormEmail">User Name</label>
                                </div>
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

                                <div class="text-center mb-3">
                                    <button type="button" class="btn brown lighten-3 btn-block btn-rounded z-depth-1a">Edit Order</button>
                            </div>
                        
                        </div>
                    </div>
                    <!--/.Content-->
                </div>
            </div>
        <!-- Modal -->
@endsection
