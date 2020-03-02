 @extends('layout')

 @section('content')
 <div class="container">
      <div class="row mx-auto m-5" style="width: 80%;">
        <div class="col">
          <img class="resize" src="{{URL::asset('/img/products/'.$product->slug.'.jpg')}}" alt="">
        </div>
        <div class="col">
          <form id="productForm">
            <h4 class="pb-3">{{ $product->name }}</h4>
            <h4 class="pb-3">&#36;{{ $product->price }}</h4>
            <h5>Description:</h5>
            <span class="pb-3">{{ $product->description }}</span>
            @if( $check )
            <button type="button" class="btn btn-secondary" style="display:block" id="incart">Already in Cart</button>
            @else
            <button type="button" class="btn btn-primary" data-id="{{ $product->id }}" id="addtocart">Add to Cart</button>
            <button type="button" class="btn btn-secondary" style="display:none" id="incart">Already in Cart</button>
            @endif  
            <p id="demo"></p>
          </form>
        </div>
      </div>
    </div>
 @endsection