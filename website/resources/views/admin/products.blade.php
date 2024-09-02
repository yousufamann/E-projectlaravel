@extends('adminlayouts.adminTemplate')
@section('admincontent')
<div class="main-panel">
    <div class="content-wrapper">
        <center>
            <h2 class="card-title" style="color: rgba(14, 14, 148, 0.945);"><b> Product Table</b></h2>
        </center>
        <div class="container mt-3">
            <br>
            <br>
            <div class="row">
                <div class="col-6">
                    <table class="table table-hover text-center" style="color: rgba(14, 14, 148, 0.945);">
                        <thead>
                            <tr>
                                <th>
                                    S.NO.
                                </th>
                                <th>
                                    TrackingId
                                </th>
                                <th>
                                    ProductName
                                </th>
                                <th>
                                    ProductDescription
                                </th>
                                <th>
                                    ProductImage
                                </th>
                                <th>
                                    Action
                                </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->TrackingId }}</td>
                                <td>{{ $item->ProductName }}</td>
                                <td>{{ $item->ProductDescription }}</td>
                                <td><img src="productImage/{{ $item->ProductImage }}" alt=""></td>
                                <td>
                                    <button type="button" value=""
                                        class="btn btn-primary editbtn" data-toggle="modal"
                                        data-target="#exampleModal">
                                        Updated
                                    </button></td>
                                      <td> <form action="{{ route('product.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Deleted</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Modal -->
    <form action="{{ route('Update') }}" method="POST">
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Product Record</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- <input type="hidden" name="id" value="{{ $item->id }}">
                        <br>
                        <br>
                        <input type="text" name="productname" value="{{ $item->ProductName }}"> --}}
                        <br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.editbtn'function() {
                var product = $(this).val();
                alert(product);

            });

        });
    </script>
@endsection
