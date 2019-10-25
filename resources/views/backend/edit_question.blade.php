@extends('backend.master')

@section('head')
<title>Sửa câu hỏi</title>
@stop

@section('page_title')
Sửa câu hỏi
@stop
@section('page_item')
Edit question
@stop

@section('content')
<div class="row">
	<div class="col-lg-12">
		@include('errors.note')
		<form class="row" method="post">
			<fieldset class="col-lg-12 form-group">
				<label>Nội dung câu hỏi</label>
				<input value="{{$question->noidung}}" required rows="5" type="text" name="content" class="form-control">
			</fieldset>
			<fieldset class="col-lg-4 form-group">
				<label>Lĩnh vực</label>
				<!-- <select class="form-control" name="topic">
					<option value="0" disabled>--Chọn lĩnh vực--</option>
					<option value="1">Lịch sử</option>
				</select> -->
				<input value="{{$question->linh_vuc_id}}" required class="form-control" type="number" name="topic">
			</fieldset>
			<fieldset class="col-lg-4 form-group">
				<label>Phương án A</label>
				<input required value="{{$question->phuong_an_a}}" type="text" name="result_a" class="form-control">
			</fieldset>
			<fieldset class="col-lg-4 form-group">
				<label>Phương án B</label>
				<input required value="{{$question->phuong_an_b}}" type="text" name="result_b" class="form-control">
			</fieldset>
			<fieldset class="col-lg-4 form-group">
				<label>Phương án C</label>
				<input required value="{{$question->phuong_an_c}}" type="text" name="result_c" class="form-control">
			</fieldset>
			<fieldset class="col-lg-4 form-group">
				<label>Phương án D</label>
				<input required value="{{$question->phuong_an_d}}" type="text" name="result_d" class="form-control">
			</fieldset>
			<fieldset class="col-lg-4 form-group">
				<label>Đáp án</label>
				<input required value="{{$question->dap_an}}" type="text" name="result" class="form-control">
			</fieldset>
			<fieldset class="col-lg-12 form-group">
				<input type="submit" class="submit btn btn-info text-white form-control" value="Cập nhật câu hỏi" name="submit">
			</fieldset>
			<fieldset class="col-lg-12 form-group">
				<a href="{{asset('admin/management_question')}}" type="submit" class="btn btn-danger text-white form-control">Hủy bỏ</a>
			</fieldset>
			{{csrf_field()}}
		</form>
	</div>
</div>
@stop

@section('script')

@stop