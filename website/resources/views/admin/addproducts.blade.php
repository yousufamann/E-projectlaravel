@extends('adminlayouts.adminTemplate')
@section('admincontent')
<div class="container">
    <center>
      <h1 class="mt-5" style="font-size: 40px; font-weight:bolder; font-family:sans-serif">Add Products</h1>
  </center>
  <form action="/product" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 mt-5">
              <label class="form-label">Product Name</label>
              <input type="text" placeholder="Product Name"  class="form-control p-2" style="border-radius: 7px" required name="pname">
              <div class="invalid-feedback">
                  Please Enter Product Name.
                </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 mt-5">
              <label  class="form-label">Product Description</label>
              <input type="text" placeholder="Product Description" class="form-control p-2" style="border-radius: 7px" required name="pdecription">
              <div class="invalid-feedback">
                  Product Description is Required
                </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 mt-5">
            <label  class="form-label">Product Image</label><br>
            <input type="file" class="form-control " style="border-radius: 7px" required name="pimage">
            <div class="invalid-feedback">
              Upload Image
              </div>
        </div>
      </div>
      <button type="submit" name="addproduct" class="btn btn-primary mt-5 form-control">Add</button>
  </form>
  </div>
  <script>
  (() => {
    'use strict'
    const forms = document.querySelectorAll('.needs-validation')
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
  })()
  </script>
@endsection
