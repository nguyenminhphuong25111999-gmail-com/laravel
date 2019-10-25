@extends('backend.master')

@section('head')
<title>Dashboard</title>
@stop

@section('page_title')
Thống kê
@stop
@section('page_item')
dashboard
@stop

@section('content')
<!-- Div  -->
<div class="row">
	<div class="col-lg-3">
		<div class="row">
			<div class="col-lg-4 bg-info text-center" style="vertical-align: middle;">
				<h2 class="display-4"><i class="mdi mdi-face"></i></h2>
			</div>
			<div class="col-lg-8 text-center">
				<div><span><h3>10</h3></span></div>
				<div><span>Người dùng</span></div>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="row">
			<div class="col-lg-4 bg-danger text-center" style="vertical-align: middle;">
				<h2 class="display-4"><i class="mdi mdi-comment-question-outline"></i></h2>
			</div>
			<div class="col-lg-8 text-center">
				<div><span><h3>100</h3></span></div>
				<div><span>Câu hỏi</span></div>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="row">
			<div class="col-lg-4 bg-success text-center" style="vertical-align: middle;">
				<h2 class="display-4"><i class="mdi mdi-crop-landscape"></i></h2>
			</div>
			<div class="col-lg-8 text-center">
				<div><span><h3>5</h3></span></div>
				<div><span>Lĩnh vực</span></div>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="row">
			<div class="col-lg-4 bg-warning text-center" style="vertical-align: middle;">
				<h2 class="display-4"><i class="mdi mdi-diamond"></i></h2>
			</div>
			<div class="col-lg-8 text-center">
				<div><span><h3>100$</h3></span></div>
				<div><span>Doanh thu</span></div>
			</div>
		</div>
	</div>
</div>
<!-- div chart -->
<div class="row">
	
</div>
@stop

@section('script')

@stop