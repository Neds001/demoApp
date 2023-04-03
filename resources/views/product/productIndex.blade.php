@include('partials.header')
<x-navigation/>
<h3>Product Data</h3>
    <table class="table table-dark table-hover">
    <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">ProductName</th>
      <th scope="col">SerialNumber</th>
    </tr>
  </thead>
  <tbody>
  @if(Session::has('success'))
    {{Session::get('success')}}
    @endif
    @foreach($products as $product)
    <tr>
      <th scope="row">{{ $product->id}}</th>
      <td>{{ $product->productName }}</td>
      <td>{{ $product->productSerialNumber }}</td>
      <td><a href="edit/{{$product->id}}">Edit</a>
      </td>
      <td>
      <a href="delete/{{$product->id}}">Delete</a>
    </td>
    </tr>
       @endforeach
  </tbody>
</table>
@include('partials.footer')
