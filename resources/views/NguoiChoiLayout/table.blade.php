@extends('Layout.master')


@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-block">
                <h6 class="card-subtitle"><a href="{{route('nguoi-choi.them-moi')}}" class="btn btn-success">Thêm mới</a></h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên đăng nhập</th>
                                <th>Password</th>
                                <th>Email</th>
                                <th>Hình đại diện</th>
                                <th>Điểm cao nhất</th>
                                <th>Credit</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ListNguoiChoi as $NguoiChoi)
                            <tr>
                                <td>{{ $NguoiChoi->id }}</td>
                                <td>{{ $NguoiChoi->ten_dang_nhap }}</td>
                                <td>{{ $NguoiChoi->password }}</td>
                                <td>{{ $NguoiChoi->email }}</td>
                                <td>{{ $NguoiChoi->hinh_dai_dien }}</td>
                                <td>{{ $NguoiChoi->diem_cao_nhat }}</td>
                                <td>{{ $NguoiChoi->credit }}</td>
                                <td>
                                    <a href="{{ route('nguoi-choi.xoa',['id' => $NguoiChoi->id]) }}" class="btn waves-effect waves-light btn-danger   pull-right hidden-sm-down" style="margin-left:5px;"><i class="mdi mdi-delete" onclick="return confirm('Bạn có chắc muốn xoá?')"></i></a>
                                    <a href="{{ route('nguoi-choi.cap-nhat',['id' => $NguoiChoi->id]) }}" class="btn waves-effect waves-light btn-success pull-right hidden-sm-down"><i class="mdi mdi-grease-pencil"></i></a>
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