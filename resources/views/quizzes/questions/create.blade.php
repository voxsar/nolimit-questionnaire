@extends('layouts.client')
@push('title')
	Add Question to "{{$quiz->name}}"
@endpush
@push('breadcrumbs')
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('quizzes.index')}}">Quizes</a></li>
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('quizzes.show', $quiz)}}">{{$quiz->name}}</a></li>
	<li class="breadcrumb-item active" aria-current="page"><a href="{{route('quizzes.questions.index', $quiz)}}">Questions</a></li>
	<li class="breadcrumb-item active" aria-current="page"><a href="{{route('quizzes.questions.create', $quiz)}}">Create</a></li>
@endpush
@section('page')
<form action="{{route('quizzes.questions.store', $quiz)}}" method="post">
	@csrf
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<x-input name="name" help="Question details e.g. Displays in-depth understanding of job" label="Question" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<x-input name="category" help="Category of question e.g. 'Job Knowledge'" label="Category" />
				<datalist id="categorylist">
					<option value="Job Knowledge" />
				</datalist>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<x-input name="section" help="Section under which the question falls under e.g. 'Section 01: Managerial Aspects'" label="Section" />
				<datalist id="sectionlist">
					<option value="Job Knowledge" />
				</datalist>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label >Question Type</label>
					<select name="type" class="form-control">
						<option value="1">MCQ</option>
						<option value="2">Comment</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<input type="submit" value="Add Question" class="btn btn-success">
			</div>
		</div>
	</div>
</form>
@endsection