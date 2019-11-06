@extends('Layout.master')
@section('header')
<title>Thêm Credit</title>
@stop

@section('page_title')
Credit
@stop

@section('page_item')
Credit
@stop

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-block">
                <h6 class="card-subtitle"><a href="{{route('credit.them-moi')}}" class="btn btn-success">Thêm mới</a></h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên gói</th>
                                <th>Credit</th>
                                <th>Số tiền</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ListCredit as $Credit)
                            <tr>
                                <td>{{ $Credit->id }}</td>
                                <td>{{ $Credit->ten_goi }}</td>
                                <td>{{ $Credit->credit }}</td>
                                <td>{{ $Credit->so_tien }}</td>
                                <td>
                                    <a href="{{ route('credit.xoa',['id' => $Credit->id]) }}" class="btn waves-effect waves-light btn-danger   pull-right hidden-sm-down" style="margin-left:5px;"><i class="mdi mdi-delete"></i></a>
                                    <a href="{{ route('credit.cap-nhat',['id' => $Credit->id]) }}" class="btn waves-effect waves-light btn-success pull-right hidden-sm-down"><i class="mdi mdi-grease-pencil"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop