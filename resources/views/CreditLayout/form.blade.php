@extends('Layout.master')
@section('header')
<title>Thêm Credit</title>
@stop

@section('page_title')
Credit
@stop

@section('page_item')
Credit
@stop
@section('content')
	<div class="col-lg-12">
		<div class="card">
			<div class="card-block">
				@if(isset($Credit))
				<form  action="{{ route('credit.xu-ly-cap-nhat',['id' => $Credit->id])}}" method="POST" class="form-horizontal form-material">
				@else
				<form  action="{{ route('credit.xu-ly-them-moi')}}" method="POST" class="form-horizontal form-material">
				@endif
					@csrf
					<div class="form-group">
						<label for="ten_goi" class="col-md-12">Tên gói </label>
						<div class="col-md-12">
							<input type="text" class="form-control form-control-line" id="ten_goi" name="ten_goi" @if(isset($Credit))value="{{ $Credit->ten_goi }}" @endif>
						</div>
						<label for="credit" class="col-md-12">Credit </label>
						<div class="col-md-12">
							<input type="text" class="form-control form-control-line" id="credit" name="credit" @if(isset($Credit))value="{{ $Credit->credit }}" @endif>
						</div>
						<label for="so_tien" class="col-md-12">Số tiền </label>
						<div class="col-md-12">
							<input type="text" class="form-control form-control-line" id="so_tien" name="so_tien" @if(isset($Credit))value="{{ $Credit->so_tien }}" @endif>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<button type="submit" class="btn btn-success">@if(isset($Credit))Cập nhật @else Thêm @endif</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection

@section('javascript')

@endsection