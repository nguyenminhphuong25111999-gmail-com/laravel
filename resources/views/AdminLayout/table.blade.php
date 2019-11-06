@extends('Layout.master')


@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-block">
                <h6 class="card-subtitle"><a href="{{route('admin.them-moi')}}" class="btn btn-success">Thêm mới</a></h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên đăng nhập</th>
                                <th>Email</th>
                                <th>Mật khẩu</th>
                                <th>Họ tên</th>
                                <th>Địa chỉ</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ListAdmin as $Admin)
                            <tr>
                                <td>{{ $Admin->id }}</td>
                                <td>{{ $Admin->tai_khoan }}</td>
                                <td>{{ $Admin->email }}</td>
                                <td>{{ $Admin->password }}</td>
                                <td>{{ $Admin->ho_ten }}</td>
                                <td>{{ $Admin->dia_chi }}</td>
                                <td>
                                    <a href="{{ route('admin.xoa',['id' => $Admin->id]) }}" class="btn waves-effect waves-light btn-danger   pull-right hidden-sm-down" style="margin-left:5px;"><i class="mdi mdi-delete" onclick="return confirm('Bạn có chắc muốn xoá?')" ></i></a>
                                    <a href="{{ route('admin.cap-nhat',['id' => $Admin->id]) }}" class="btn waves-effect waves-light btn-success pull-right hidden-sm-down"><i class="mdi mdi-grease-pencil"></i></a>
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