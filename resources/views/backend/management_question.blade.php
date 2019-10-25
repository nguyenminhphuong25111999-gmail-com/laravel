@extends('backend.master')

@section('head')
<title>Quản lý câu hỏi</title>
@stop

@section('page_title')
Quản lý câu hỏi
@stop
@section('page_item')
Management question
@stop

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h2>Thêm câu hỏi</h2>
		@include('errors.note')
		<form class="row" method="post">
			<fieldset class="col-lg-12 form-group">
				<label>Nội dung câu hỏi</label>
				<textarea required rows="5" type="text" name="content" class="form-control"></textarea>
			</fieldset>
			<fieldset class="col-lg-4 form-group">
				<label>Lĩnh vực</label>
				<!-- <select class="form-control" name="topic">
					<option value="0" disabled>--Chọn lĩnh vực--</option>
					<option value="1">Lịch sử</option>
				</select> -->
				<input required class="form-control" type="number" name="topic">
			</fieldset>
			<fieldset class="col-lg-4 form-group">
				<label>Phương án A</label>
				<input required type="text" name="result_a" class="form-control">
			</fieldset>
			<fieldset class="col-lg-4 form-group">
				<label>Phương án B</label>
				<input required type="text" name="result_b" class="form-control">
			</fieldset>
			<fieldset class="col-lg-4 form-group">
				<label>Phương án C</label>
				<input required type="text" name="result_c" class="form-control">
			</fieldset>
			<fieldset class="col-lg-4 form-group">
				<label>Phương án D</label>
				<input required type="text" name="result_d" class="form-control">
			</fieldset>
			<fieldset class="col-lg-4 form-group">
				<label>Đáp án</label>
				<input required type="text" name="result" class="form-control">
			</fieldset>
			<fieldset class="col-lg-12 form-group">
				<input type="submit" class="submit btn btn-info text-white form-control" value="Thêm câu hỏi" name="submit">
			</fieldset>
			{{csrf_field()}}
		</form>
	</div>
</div>
<div class="row">
	<table class="table table-striped">
		<thead>
			<tr>
				<th scope="col">
					#
				</th>
				<th scope="col">
					Nội dung
				</th>
				<th style="min-width: 91px;" scope="col">
					Lĩnh vực
				</th>
				<th style="min-width: 100px;" scope="col">
					Đáp án A
				</th>
				<th style="min-width: 100px;" scope="col">
					Đáp án B
				</th>
				<th style="min-width: 100px;" scope="col">
					Đáp án C
				</th>
				<th style="min-width: 100px;" scope="col">
					Đáp án D
				</th>
				<th style="min-width: 95px;" scope="col">
					Đáp án
				</th>
				<th style="min-width: 114px;" scope="col">
					Chức năng
				</th>
			</tr>
		</thead>
		<tbody>
			@foreach($lstquestion as $question)
			<tr>
				<td>{{$question->cauhoi_id}}</td>
				<td>{{$question->noidung}}</td>
				<td>{{$question->linh_vuc_id}}</td>
				<td>{{$question->phuong_an_a}}</td>
				<td>{{$question->phuong_an_b}}</td>
				<td>{{$question->phuong_an_c}}</td>
				<td>{{$question->phuong_an_d}}</td>
				<td>{{$question->dap_an}}</td>
				<td>
					<a href="{{asset('admin/management_question/edit/'.$question->cauhoi_id)}}"><i class="mdi mdi-account-edit"></i></a>
					<a href="{{asset('admin/management_question/delete/'.$question->cauhoi_id)}}" onclick="return confirm('Bạn có chắc muốn xóa???')"><i class="mdi mdi-delete text-danger"></i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop

@section('script')

@stop