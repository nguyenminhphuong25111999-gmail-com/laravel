@extends('Layout.master')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-block">
                <h6 class="card-subtitle"><a href="{{route('cau-hoi.them-moi')}}" class="btn btn-success">Thêm mới</a></h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nội dung</th>
                                <th>Lĩnh vực</th>
                                <th>Phương án A</th>
                                <th>Phương án B</th>
                                <th>Phương án C</th>
                                <th>Phương án D</th>
                                <th>Đáp án</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ListCauHoi as $CauHoi)
                            <tr>
                                <td>{{ $CauHoi->id }}</td>
                                <td>{{ $CauHoi->noi_dung }}</td>
                                <td>{{ $CauHoi->linh_vuc_id }}</td>                                   
                                <td>{{ $CauHoi->phuong_an_a }}</td>
                                <td>{{ $CauHoi->phuong_an_b }}</td>
                                <td>{{ $CauHoi->phuong_an_c }}</td>
                                <td>{{ $CauHoi->phuong_an_d }}</td>
                                <td>{{ $CauHoi->dap_an }}</td>
                                <td>
                                    <a href="{{ route('cau-hoi.xoa',['id' => $CauHoi->id]) }}" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down" style="margin-left:5px;"><i class="mdi mdi-delete" onclick="return confirm('Bạn có chắc muốn xoá?')"></i></a>
                                    <a href="{{ route('cau-hoi.cap-nhat',['id' => $CauHoi->id]) }}" class="btn waves-effect waves-light btn-success pull-right hidden-sm-down"><i class="mdi mdi-grease-pencil"></i></a>
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