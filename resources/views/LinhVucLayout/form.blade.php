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
				@if(isset($linhvuc))
				<form  action="{{ route('linh-vuc.xu-ly-cap-nhat',['id' => $linhvuc->id])}}" method="POST" class="form-horizontal form-material">
				@else
				<form  action="{{ route('linh-vuc.xu-ly-them-moi')}}" method="POST" class="form-horizontal form-material">
				@endif
					@csrf
					<div class="form-group">
						<label for="ten_linh_vuc" class="col-md-12">Tên Lĩnh vực</label>
						<div class="col-md-12">
							<input type="text" class="form-control form-control-line" id="ten_linh_vuc" name="ten_linh_vuc" @if(isset($linhvuc))value="{{ $linhvuc->ten_linh_vuc }}" @endif>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<button type="submit" class="btn btn-success">@if(isset($linhvuc))Cập nhật @else Thêm @endif</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection

@section('javascript')

@endsection