 @extends('layout')

 @section('content')
 <div class="container">
   <div class="text-center">
     <h1 class="m-5">Магазин</h1>
     <div class="row">
       @foreach ($data as $key => $product)
       <div class="col-4">
         <div class="card mb-5"><a href="product/{{ $product->id }}">
             <div class="card-body text-center">
               <h3 class='card-text'> {{ $product->name }} </h3>
               <p class='card-text'>{{ $product->price }} сом</p>
           </a>
         </div>
       </div>
     </div>
     @if(($key+1) % 3 === 0 )
   </div>
   <div class="row">
     @endif
     @endforeach
   </div>
 </div>
 @endsection