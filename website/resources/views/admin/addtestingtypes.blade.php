@extends('adminlayouts.adminTemplate')
@section('admincontent')
<div class="container">
    <center>
      <h1 class="mt-5" style="font-size: 40px; font-weight:bolder; font-family:sans-serif">Add Testing</h1>
  </center>
  <form action="{{ route('testing.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 mt-5">
              <label class="form-label">TestingTypes</label>
              <input type="text" placeholder="Testing Types"  class="form-control p-2" style="border-radius: 7px" required name="TestingTypes">
              <div class="invalid-feedback">
                  Please Enter TestingTypes
                </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 mt-5">
              <label  class="form-label">TestingDescription</label>
              <input type="text" placeholder="Testing Description" class="form-control p-2" style="border-radius: 7px" required name="TestingDescription">
              <div class="invalid-feedback">
                  Testing Description is Required
                </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 mt-5">
            <label  class="form-label">TestingTypes Image</label><br>
            <input type="file" class="form-control" style="border-radius: 7px" required name="TestingTypesImage">
            <div class="invalid-feedback">
              Upload Image
              </div>
        </div>
      </div>
      <button type="submit" name="addtestingtypes" class="btn btn-info mt-5 form-control">Add</button>
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
