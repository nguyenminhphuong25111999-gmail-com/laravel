@extends('Layout.master')


@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-block">
                <h6 class="card-subtitle"><a href="{{route('linh-vuc.them-moi')}}" class="btn btn-success">Thêm mới</a></h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên Lĩnh Vực</th>
                                <th>Ngày tạo</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ListLinhVuc as $LinhVuc)
                            <tr>
                                <td>{{ $LinhVuc->id }}</td>
                                <td>{{ $LinhVuc->ten_linh_vuc }}</td>
                                <td>{{ $LinhVuc->created_at }}</td>
                                <td>
                                    <a href="{{ route('linh-vuc.xoa',['id' => $LinhVuc->id]) }}" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down" style="margin-left:5px;"><i class="mdi mdi-delete" onclick="return confirm('Bạn có chắc muốn xoá?')"></i></a>
                                    <a href="{{ route('linh-vuc.cap-nhat',['id' => $LinhVuc->id]) }}" class="btn waves-effect waves-light btn-success pull-right hidden-sm-down"><i class="mdi mdi-grease-pencil"></i></a>
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