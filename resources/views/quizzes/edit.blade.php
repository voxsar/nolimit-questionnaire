@extends('layouts.client')
@push('title')
	Edit Appraisal
@endpush
@push('breadcrumbs')
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('quizzes.index')}}">Appraisals</a></li>
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('quizzes.show', $quiz)}}">{{$quiz->name}}</a></li>
	<li class="breadcrumb-item active" aria-current="page"><a href="{{route('quizzes.edit', $quiz)}}">Edit</a></li>
@endpush
@section('page')
<form action="{{route('quizzes.update', $quiz)}}" method="post">
	@csrf
	@method('PATCH')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<x-input name="name" help="Name of the quiz" label="Appraisal Name" value="{{$quiz->name}}" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<x-textarea name="purpose" help="Purpose of Appraisal" label="Purpose" value="{{$quiz->purpose}}" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<x-textarea name="instructions" help="Instructions for the Appraisal" label="Instructions" value="{{$quiz->instructions}}" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<input type="submit" value="Update Appraisal" class="btn btn-success">
			</div>
		</div>
	</div>
</form>
@endsection