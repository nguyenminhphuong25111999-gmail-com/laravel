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
				@if(isset($NguoiChoi))
				<form  action="{{ route('nguoi-choi.xu-ly-cap-nhat',['id' => $NguoiChoi->id])}}" method="POST" class="form-horizontal form-material">
				@else
				<form  action="{{ route('nguoi-choi.xu-ly-them-moi')}}" method="POST" class="form-horizontal form-material">
				@endif
					@csrf
					<div class="form-group">
						<label for="ten_dang_nhap" class="col-md-12">Tên đăng nhập</label>
						<div class="col-md-12">
							<input type="text" class="form-control form-control-line" id="ten_dang_nhap" name="ten_dang_nhap" @if(isset($NguoiChoi))value="{{ $NguoiChoi->ten_dang_nhap }}" @endif>
						</div>
						<label for="password" class="col-md-12">Password</label>
						<div class="col-md-12">
							<input type="text" class="form-control form-control-line" id="password" name="password" @if(isset($NguoiChoi))value="{{ $NguoiChoi->password }}" @endif>
						</div>
						<label for="email" class="col-md-12">Email</label>
						<div class="col-md-12">
							<input type="text" class="form-control form-control-line" id="email" name="email" @if(isset($NguoiChoi))value="{{ $NguoiChoi->email }}" @endif>
						</div>
						<label for="hinh_dai_dien" class="col-md-12">Hình đại diện</label>
						<div class="col-md-12">
							<input type="text" class="form-control form-control-line" id="hinh_dai_dien" name="hinh_dai_dien" @if(isset($NguoiChoi))value="{{ $NguoiChoi->hinh_dai_dien }}" @endif>
						</div>
						<label for="diem_cao_nhat" class="col-md-12">Điểm cao nhất</label>
						<div class="col-md-12">
							<input type="text" class="form-control form-control-line" id="diem_cao_nhat" name="diem_cao_nhat" @if(isset($NguoiChoi))value="{{ $NguoiChoi->diem_cao_nhat }}" @endif>
						</div>
						<label for="credit" class="col-md-12">Credit</label>
						<div class="col-md-12">
							<input type="text" class="form-control form-control-line" id="credit" name="credit" @if(isset($NguoiChoi))value="{{ $NguoiChoi->credit }}" @endif>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<button type="submit" class="btn btn-success">@if(isset($NguoiChoi))Cập nhật @else Thêm @endif</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection

@section('javascript')

@endsection