@extends('layouts.client')
@push('title')
	Add Choice to "{{$quiz->name}}"
@endpush
@push('breadcrumbs')
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('quizzes.index')}}">Appraisals</a></li>
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('quizzes.show', $quiz)}}">{{$quiz->name}}</a></li>
	<li class="breadcrumb-item active" aria-current="page"><a href="{{route('quizzes.choices.index', [$quiz])}}">Choices</a></li>
	<li class="breadcrumb-item active" aria-current="page"><a href="{{route('quizzes.choices.show', [$quiz, $choice])}}">{{$choice->choice}}</a></li>
@endpush
@section('page')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<x-input name="choice" value="{{$choice->choice}}" help="Choice details e.g. Exceptional" label="Choice" />
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<x-input name="rating_value" value="{{$choice->rating_value}}" help="Choice value e.g. 1 or 5" label="Rating Value" />
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<x-textarea name="definition" value="{!!$choice->definition!!}" help="Definition of the Rating" label="Definition" />
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label >Quiz Section</label>
				<select name="section" class="form-control">
					@forelse($sections as $section)
						<option value="{{$section}}">{{$section}}</option>
					@empty
					@endforelse
				</select>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<a type="submit" href="{{route('quizzes.choices.edit', [$quiz, $choice])}}" class="btn btn-success">Edit This Choice</a>
		</div>
	</div>
</div>
@endsection