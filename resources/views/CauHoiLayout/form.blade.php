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
				@if(isset($CauHoi))
				<form  action="{{ route('cau-hoi.xu-ly-cap-nhat',['id' => $CauHoi->id])}}" method="POST" class="form-horizontal form-material">
				@else
				<form  action="{{ route('cau-hoi.xu-ly-them-moi')}}" method="POST" class="form-horizontal form-material">
				@endif
					@csrf
					<div class="form-group">
						<label for="noi_dung" class="col-md-12">Nội dung</label>
						<div class="col-md-12">
							<input type="text" class="form-control form-control-line" id="noi_dung" name="noi_dung" @if(isset($CauHoi))value="{{ $CauHoi->noi_dung }}" @endif>
						</div>
						<label for="linh_vuc" class="col-md-12">Lĩnh vực</label>
						<div class="col-md-12">
							<input class="form-control form-control-line" id="linh_vuc" name="linh_vuc" >
								{{-- @foreach($ListLinhVuc as $LinhVuc)
									<option @if( $LinhVuc->id == $CauHoi->linh_vuc_id) selected @endif value="{{ $LinhVuc->id }}">
										{{ $LinhVuc->ten_linh_vuc}}
									</option>
								@endforeach
							</select> --}}
						</div>
						<label for="phuong_an_a" class="col-md-12">Phương án A</label>
						<div class="col-md-12">
							<input type="text" class="form-control form-control-line" id="phuong_an_a" name="phuong_an_a" @if(isset($CauHoi)) value="{{ $CauHoi->phuong_an_a }}" @endif>
						</div>
						<label for="phuong_an_a" class="col-md-12">Phương án B</label>
						<div class="col-md-12">
							<input type="text" class="form-control form-control-line" id="phuong_an_b" name="phuong_an_b" @if(isset($CauHoi)) value="{{ $CauHoi->phuong_an_b }}" @endif>
						</div>
						<label for="phuong_an_c" class="col-md-12">Phương án C</label>
						<div class="col-md-12">
							<input type="text" class="form-control form-control-line" id="phuong_an_c" name="phuong_an_c" @if(isset($CauHoi)) value="{{ $CauHoi->phuong_an_c }}" @endif>
						</div>
						<label for="phuong_an_a" class="col-md-12">Phương án D</label>
						<div class="col-md-12">
							<input type="text" class="form-control form-control-line" id="phuong_an_d" name="phuong_an_d" @if(isset($CauHoi)) value="{{ $CauHoi->phuong_an_d }}" @endif>
						</div>
						<label for="dap_an" class="col-md-12">Đáp án</label>
						<div class="col-md-12">
							<input type="text" class="form-control form-control-line" id="dap_an" name="dap_an" @if(isset($CauHoi)) value="{{ $CauHoi->dap_an }}" @endif>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<button type="submit" class="btn btn-success">@if(isset($CauHoi))Cập nhật @else Thêm @endif</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection

@section('javascript')

@endsection