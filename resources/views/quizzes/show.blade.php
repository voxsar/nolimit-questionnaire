@extends('layouts.client')
@push('title')
	New Appraisal
@endpush
@push('breadcrumbs')
	<li class="breadcrumb-item" aria-current="page"><a href="{{route('quizzes.index')}}">Appraisal</a></li>
	<li class="breadcrumb-item active" aria-current="page"><a href="{{route('quizzes.create')}}">Create</a></li>
@endpush
@section('page')
<form action="{{route('quizzes.store')}}" method="post">
	@csrf
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<x-input name="name" help="Name of the quiz" label="Appraisal Name" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<input type="submit" value="Create Appraisal" class="btn btn-success">
			</div>
		</div>
	</div>
</form>
@endsection