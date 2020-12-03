@extends('layouts.client')
@push('title')
	New Quiz
@endpush
@push('breadcrumbs')
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('quizzes.index')}}">Quizes</a></li>
	<li class="breadcrumb-item active" aria-current="page"><a href="{{route('quizzes.create')}}">Create</a></li>
@endpush
@section('page')
<form action="{{route('quizzes.store')}}" method="post">
	@csrf
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<x-input name="name" help="Name of the quiz" label="Quiz Name" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<x-textarea name="purpose" help="Purpose of Quiz" label="Purpose" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<x-textarea name="instructions" help="Instructions for the Quiz" label="Instructions" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<input type="submit" value="Create Quiz" class="btn btn-success">
			</div>
		</div>
	</div>
</form>
@endsection