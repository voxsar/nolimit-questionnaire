@extends('layouts.client')
@push('title')
	Add Question to "{{$quiz->name}}"
@endpush
@push('breadcrumbs')
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('quizzes.index')}}">Appraisals</a></li>
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('quizzes.show', $quiz)}}">{{$quiz->name}}</a></li>
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('quizzes.questions.index', $quiz)}}">Questions</a></li>
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('quizzes.questions.show', [$quiz, $question])}}">{{$question->question}}</a></li>
	<li class="breadcrumb-item active" aria-current="page"><a href="{{route('quizzes.questions.edit', [$quiz, $question])}}">Edit</a></li>
@endpush
@section('page')
<form action="{{route('quizzes.questions.update', [$quiz, $question])}}" method="post">
	@csrf
	@method('PATCH')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<x-input name="name" value="{{$question->question}}" help="Question details e.g. Displays in-depth understanding of job" label="Question" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<x-input name="category" value="{{$question->category}}" help="Category of question e.g. 'Job Knowledge'" label="Category" />
				<datalist id="categorylist">
					<option value="Job Knowledge" />
				</datalist>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<x-input name="section" value="{{$question->section}}" help="Section under which the question falls under e.g. 'Section 01: Managerial Aspects'" label="Section" />
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
						@if($question->type == '1')
							<option value="1">MCQ</option>
							<option value="2">Comment</option>
						@else
							<option value="2">Comment</option>
							<option value="1">MCQ</option>
						@endif
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<input type="submit" value="Update Question" name="submit" class="btn btn-success">
				<input type="submit" value="Update Section Name" name="submit" class="btn btn-success">
			</div>
		</div>
	</div>
</form>
@endsection