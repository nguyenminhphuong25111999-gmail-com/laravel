@extends('backend.master')

@section('head')
<title>Tài khoản admin</title>
@stop

@section('page_title')
Tài khoản admin
@stop
@section('page_item')
account admin
@stop

@section('content')
<div class="row pt-3">
	<div class="col-lg-12">
		@include('errors.note')
		<form class="row" method="post">
			<div class="col-lg-6 form-group">
				<input required class="form-control" value="" type="email" name="email" placeholder="email đăng nhập...">
			</div>
			<div class="col-lg-6 form-group">
				<input required class="form-control" value="" type="password" name="password" placeholder="mật khẩu...">
			</div>
			<div class="col-lg-6 form-group">
				<input required class="form-control" value="" type="text" name="name" placeholder="họ tên...">
			</div>
			<div class="col-lg-6 form-group">
				<!-- <button class="submit btn btn-info text-white form-control" type="submit" name="button_add_admin"><i class="mdi mdi-account-plus"> thêm</i></button> -->
				<input type="submit" class="submit btn btn-info text-white form-control" value="Thêm mới" name="submit">
			</div>
			{{csrf_field()}}
		</form>
	</div>
</div>

<!--  -->

<div class="row pt-3">
	<table class="table table-striped">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">name</th>
				<th scope="col">email login</th>
				<th scope="col">action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($adminlist as $lst_admin)
			<tr>
				<td style="min-width: 20px;">{{$lst_admin->id}}</td>
				<td>{{$lst_admin->ho_ten}}</td>
				<td>{{$lst_admin->email}}</td>
				<td>
					<a href="{{asset('admin/account_admin/edit/'.$lst_admin->id)}}"><i class="mdi mdi-account-edit"></i></a>
					<a href="{{asset('admin/account_admin/delete/'.$lst_admin->id)}}" onclick="return confirm('Bạn có chắc muốn xóa???')"><i class="mdi mdi-delete text-danger"></i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop

@section('script')

@stop