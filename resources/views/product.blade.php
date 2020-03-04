 @extends('layout')

 @section('content')
 <div class="container">
   <div class="row mx-auto m-5" style="width: 80%;">
     <div class="col">
       <h4 class="pb-3">{{ $product->name }}</h4>
       <h4 class="pb-3">{{ $product->price }} сом</h4>
       <h5>Description:</h5>
       <span class="pb-3">{{ $product->description }}</span>
     </div>
   </div>
   <div class="row">
     <div class="text-center col">
       @if( $check )
       <button type="button" class="btn btn-secondary" style="display:show" id="incart">Уже в корзине</button>
       @else
       <button type="button" class="btn btn-primary" data-id="{{ $product->id }}" id="addtocart">Добавить в корзину</button>
       <button type="button" class="btn btn-secondary" style="display:none" id="incart">Уже в корзине</button>
       @endif
     </div>
   </div>
 </div>
 @endsection