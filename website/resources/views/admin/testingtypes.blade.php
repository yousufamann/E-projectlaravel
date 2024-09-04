@extends('adminlayouts.adminTemplate')
@section('admincontent')
<div class="main-panel">
    <div class="content-wrapper">
        <center>
            <h2 class="card-title" style="color: rgba(14, 14, 148, 0.945);"><b>Testing Table</b></h2>
        </center>
        <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col-lg-6">
                    <table class="table table-hover text-center" style="color: rgba(14, 14, 148, 0.945)">
                        <thead>
                            <tr>
                                <th>S.NO</th>
                                <th>TestingTypes</th>
                                <th>TestingTypesImage</th>
                                <th>Description</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testing as $item)
                            <tr>
                               <td>{{$item->id}}</td>
                               <td>{{$item->TestingTypes}}</td>
                               <td><img src="TestingTypesImage/{{$item->TestingTypesImage}}" alt=""></td>
                               <td>{{$item->TestingDescription}}</td>
                               <td><a href="{{url('testingedit',$item->id)}}"><button class="btn btn-primary">update</button></a></td>
               <td><a href="{{url('testingdestory', $item->id)}}"><button class="btn btn-danger">Delete</button></a></td>
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
