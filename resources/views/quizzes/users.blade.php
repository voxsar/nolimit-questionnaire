@extends('layouts.client')
@push('title')
	{{$quiz->name}}
@endpush
@push('breadcrumbs')
@endpush
@section('page')
<form action="{{route('quizzes.selectuser', $quiz)}}" method="post">
	@csrf
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-3">
				<x-input name="emp_no" help="Employee ID of the Employee" label="Employee ID" />
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-4"></div>
			<div class="col-md-3">
				<input type="hidden" name="quiz_id" value="{{$quiz->id}}">
				<button type="submit" class="btn btn-primary btn-block">Login</button>
			</div>
		</div>
	</div>
</form>
@endsection