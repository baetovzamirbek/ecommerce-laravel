@extends ('layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-9">
      <h1 class="m-4">Корзина</h1>
      <table class="table table-bordered">
        <thead>
          <th></th>
          <th>Название</th>
          <th>Цена</th>
          <th>Количество</th>
          <th>Сумма</th>
        </thead>
        <tbody id="tbody">
          @foreach ($data as $key => $product)
          <tr>
            <td>
              <span class="input-group-btn">
                <button type="button" class="btn btn-default btn-flat delete" data-id="{{ $product->id }}"><i class="fa fa-close red"></i></button>
              </span>
            </td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }} сом</td>
            <td class="input-group">
              <span class="input-group-btn">
                <button type="button" class="btn btn-default btn-flat minus" data-id="{{ $product->id }}"><i class="fa fa-minus"></i></button>
              </span>
              <input type="text" class="form-control" value="{{ $quantity[$key]["quantity"] }}" id="{{ $product->id }}" size="2">
              <span class="input-group-btn">
                <button type="button" class="btn btn-default btn-flat add" data-id="{{ $product->id }}"><i class="fa fa-plus"></i>
                </button>
              </span>
            </td>
            <td>{{ $quantity[$key]["quantity"] *  $product->price}} сом</td>
          </tr>
          @endforeach
          @if(! $data )
          <td colspan="6" align="center">Корзина пуста</td>
          @else
          <td colspan="6" align="right">Итого: {{ $total }} сом</td>
          @endif
        </tbody>
      </table>

    </div>
  </div>
</div>
@endsection