@extends ('layout')

@section('content')
<div class="container">
      <div class="row">
        <div class="col-9">
          <h1 class="m-4">YOUR CART</h1>
          <table class="table table-bordered">
            <thead>
              <th></th>
              <th>Photo</th>
              <th>Name</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Subtotal</th>
            </thead>
            <tbody id="tbody">
            </tbody>
          </table>
          <div class="cartout" id="cartout" style="display:none"><span class="cartmessage"></span></div>
C:/Users/Zamir/site/commerce
        </div>
      </div>
    </div>
@endsection