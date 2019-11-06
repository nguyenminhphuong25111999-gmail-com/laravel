@extends('Layout.master')

@section('header')
<title>Thêm Lĩnh Vực</title>
@stop

@section('page_title')
Lĩnh Vực
@stop

@section('page_item')
Thêm lĩnh vực
@stop

@section('content')
	<div class="col-lg-12">
		<div class="card">
			<div class="card-block">
				@if(isset($Admin))
				<form  action="{{ route('admin.xu-ly-cap-nhat',['id' => $Admin->id])}}" method="POST" class="form-horizontal form-material">
				@else
				<form  action="{{ route('admin.xu-ly-them-moi')}}" method="POST" class="form-horizontal form-material">
				@endif
					@csrf
					<div class="form-group">
						<label for="tai_khoan" class="col-md-12">Tên đăng nhập</label>
						<div class="col-md-12">
							<input type="text" class="form-control form-control-line" id="tai_khoan" name="tai_khoan" @if(isset($Admin))value="{{ $Admin->tai_khoan }}" @endif>
						</div>
						<label for="email" class="col-md-12">Email</label>
						<div class="col-md-12">
							<input type="text" class="form-control form-control-line" id="email" name="email" @if(isset($Admin))value="{{ $Admin->email }}" @endif>
						</div>
						<label for="email" class="col-md-12">Password</label>
						<div class="col-md-12">
							<input type="text" class="form-control form-control-line" id="password" name="password" @if(isset($Admin))value="{{ $Admin->password }}" @endif>
						</div>
						<label for="ho_ten" class="col-md-12">Họ & Tên</label>
						<div class="col-md-12">
							<input type="text" class="form-control form-control-line" id="ho_ten" name="ho_ten" @if(isset($Admin))value="{{ $Admin->ho_ten }}" @endif>
						</div>
						<label for="dia_chi" class="col-md-12">Địa chỉ</label>
						<div class="col-md-12">
							<input type="text" class="form-control form-control-line" id="dia_chi" name="dia_chi" @if(isset($Admin))value="{{ $Admin->dia_chi }}" @endif>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<button type="submit" class="btn btn-success">@if(isset($Admin))Cập nhật @else Thêm @endif</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection

@section('javascript')

@endsection