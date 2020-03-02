 @extends('layout')

 @section('content')
 <div class="container">
  <div class="text-center">
    <h4 class="mb-3">Tablets- Laptops- SmartPhones- PC</h4>
    <div class="row">
    @foreach ($data as $key => $product)
    <div class="col-4">
      <div class="card mb-5">
        <img class="card-img-top mx-auto" src="{{URL::asset('/img/products/'.$product->slug.'.jpg')}}"   alt="">
        <div class="card-body text-center">
          <h5 class='card-text'><a href="product/{{ $product->id }}"> {{ $product->name }}</a></h5>
          <h6 class='card-text'>&#36 {{ $product->price }}</h6>
		   	</div>
	   	</div>
	  </div>
    @if(($key+1) % 3 === 0 )
    </div><div class="row">
    @endif
    @endforeach
  </div>
 </div>
 @endsection