@extends('backend.master')

@section('head')
<title>Cập nhật tài khoản</title>
@stop

@section('page_title')
Cập nhật tài khoản admin
@stop
@section('page_item')
Edit Account
@stop

@section('content')

<div class="row pt-3">
	<div class="col-lg-12">
		@include('errors.note')
		<form class="row" method="post">
			<div class="form-group col-lg-12">
				<label>Tên tài khoản</label>
				<input required type="text" name="name" class="form-control" placeholder="Tên tài khoản..." value="{{$admin->ho_ten}}">
			</div>
			<div class="form-group col-lg-12">
				<label>Email đăng nhập</label>
				<input required type="text" name="email" class="form-control" placeholder="Email đăng nhập..." value="{{$admin->email}}">
			</div>
			<div class="form-group col-lg-12">
				<input type="submit" name="submit" class="form-control btn btn-info text-white" placeholder="Tên danh mục..." value="Sửa">

			</div>
			<div class="form-group col-lg-12">
				<a href="{{asset('admin/account_admin')}}" class="btn btn-danger form-control text-white">Hủy bỏ</a>
			</div>
			{{csrf_field()}}
		</form>
	</div>
</div>
@stop

@section('script')

@stop