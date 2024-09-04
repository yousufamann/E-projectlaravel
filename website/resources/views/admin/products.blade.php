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
                    <div class="col-lg-6">

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
                                @foreach ($addproduct as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->TrackingId }}</td>
                                        <td>{{ $item->ProductName }}</td>
                                        <td>{{ $item->ProductDescription }}</td>
                                        <td><img src="productImage/{{ $item->ProductImage }}" alt=""></td>
                                        <td>
                                            <a href="edit/{{$item->id}}"><button class="btn btn-success">updated</button></a>
                                        </td>
                                        <td>
                                            <form action="{{ route('product.destroy',$item->id) }}" method="post">
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
@endsection
