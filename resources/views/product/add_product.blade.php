@include('partials.header')
<center> <img src="logo.png" alt=""> </center>


<h5>FILL THE FORMS TO ADD A NEW PRODUCT</h5>
<form action="/saveProduct" method="GET">
    @csrf


<div class="mb-3">
      <label for="productName" class="form-label">Product Name</label>
      <input
      type="text"
      class="form-control"
      aria-describedby="emailHelp"
      name="productName">

</div>

<div class="mb-3">
      <label for="productSerialNumber" class="form-label">Serial Number</label>
      <input
      type="text"
      class="form-control"
      aria-describedby="emailHelp"
      name="productSerialNumber">

</div>

<button type="submit" class="btn btn-dark mb-3">Submit</button>
  </form>
