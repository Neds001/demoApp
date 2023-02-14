<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Customers</title>
</head>
<body>
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
    @foreach($customers as $customer)
    <tr>
      <th scope="row">{{ $customer->id}}</th>
      <td>{{ $customer->firstname }}</td>
      <td>{{ $customer->lastname }}</td>
      <td>{{ $customer->email }}</td>
      <td>{{ $customer->contactNumber }}</td>
      <td>{{ $customer->address }}</td>
      <td><button type="button" class="btn btn-primary">Edit</button></td>
      <td><button type="button" class="btn btn-primary">Delete</button></td>
    </tr>
       @endforeach
  </tbody>
</table>
<style>
  body{
    background: rgb(122,117,118);
background: radial-gradient(circle, rgba(122,117,118,1) 0%, rgba(28,32,52,1) 100%);
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
</body>

</html>
   
 
      

