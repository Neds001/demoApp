@include('partials.header')
<x-navigation/>
    <h3>Customer Data</h3>
    <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">email</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
  @if(Session::has('success'))
    {{Session::get('success')}}
    @endif
    @foreach($customers as $customer)
    <tr>
      <th scope="row">{{ $customer->id}}</th>
      <td>{{ $customer->firstname }}</td>
      <td>{{ $customer->lastname }}</td>
      <td>{{ $customer->email }}</td>
      <td>{{ $customer->contactNumber }}</td>
      <td>{{ $customer->address }}</td>
      <td
      ><a href="edit/{{$customer->id}}">Edit</a>
      </td>
      <td>
      <a href="delete/{{$customer->id}}">Delete</a>
    </td>
    </tr>
       @endforeach
  </tbody>
</table>
@include('partials.footer')
<style>
  body{
    background: rgb(122,117,118);
    background: radial-gradient(circle, rgba(122,117,118,1) 0%, rgba(28,32,52,1) 100%);
    color: white;
  }
  h3{
    background: rgb(28,32,52);
background: radial-gradient(circle, rgba(28,32,52,1) 0%, rgba(122,117,118,1) 100%);
    text-align: center;
    padding: 10px;
    border: 2px solid black;
    border-radius: 5px;
    margin-right: 40%;
    margin-left: 40%;
    color:white;
  }
</style>





