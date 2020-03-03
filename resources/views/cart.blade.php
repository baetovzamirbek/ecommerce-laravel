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
          @foreach ($data as $key => $product)
          <tr>
            <td>
              <span class="input-group-btn">
                <button type="button" class="btn btn-default btn-flat delete" data-id="{{ $product->id }}"><i class="fa fa-close red"></i></button>
              </span>
            </td>
            <td> <img src="{{URL::asset("/img/products/".$product->slug.".jpg")}}" width="40px" height="40px"></td>
            <td>{{ $product->name }}</td>
            <td>&#36 {{ $product->price }}</td>
            <td class="input-group">
              <span class="input-group-btn">
                <button type="button" id="minus" class="btn btn-default btn-flat minus" data-id="{{ $product->id }}"><i class="fa fa-minus"></i></button>
              </span>
              <input type="text" class="form-control" value="{{ $quantity[$key]["quantity"] }}" id="{{ $product->id }}" size="2">
              <span class="input-group-btn">
                <button type="button" id="add" class="btn btn-default btn-flat add" data-id="{{ $product->id }}"><i class="fa fa-plus"></i>
                </button>
              </span>
            </td>
            <td>{{ $quantity[$key]["quantity"] *  $product->price}}</td>
          </tr>
          @endforeach
          <td colspan="6" align="right">Total: &#36 {{ $total }}</td>
          @if(! $data )
          <td colspan="6" align="center">Shopping cart empty</td>
          @endif

        </tbody>
      </table>

    </div>
  </div>
</div>
@endsection