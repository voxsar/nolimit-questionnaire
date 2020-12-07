@extends('layouts.user')
@push('title')
	{{$quiz->group}}
@endpush
@push('breadcrumbs')
@endpush
@section('page')
<form action="{{route('quizzes.groupselectuser', $group)}}" method="post">
	@csrf
	<div class="container mt-5">
		<div class="row mt-5">
			<div class="col-md-12 mt-5">
				<img class="rounded mx-auto d-block" width="200" src="{{asset('img/logo.png')}}">
			</div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<x-input name="emp_no" help="Employee ID of the Employee" label="Employee ID" />
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<input type="hidden" name="quiz_id" value="{{$quiz->id}}">
				<input type="hidden" name="group" value="{{$group}}">
				<button type="submit" class="btn btn-primary btn-block">Fill Appraisal</button>
			</div>
		</div>
	</div>
</form>
@endsection