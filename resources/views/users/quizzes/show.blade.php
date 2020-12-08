@extends('layouts.user')
@push('title')
	{{$quiz->name}}
@endpush
@push('breadcrumbs')
@endpush
@section('page')
<form action="{{route('users.quizzes.update', [$user, $quiz])}}" method="post">
	@csrf
	@method('PATCH')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<x-input disabled="disabled" name="name" value="{{$user->name}}" help="Name of the employee" label="Name" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<x-input disabled="disabled" name="emp_no" value="{{$user->emp_no}}" help="Employee no" label="Employee No" />
			</div>
			<div class="col-md-6">
				<x-input name="date_appraisal" value="{{$date}}" help="Appraisal Date" label="Date" type="date" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<x-input disabled="disabled" name="designation" value="{{$user->designation}}" help="Designation of the Employee" label="Designation" />
			</div>
			<div class="col-md-6">
				<x-input name="evaluator" help="Evaluator of the employee" label="Evaluator" list="evaluatorlist" />
				<datalist id="evaluatorlist">
					@forelse($designations as $designation)
						<option value="{{$designation->listname}}" />
					@empty
					@endforelse
				</datalist>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<x-input disabled="disabled" name="department" value="{{$user->department}}" help="Name of the department" label="Department Name" />
			</div>
			<div class="col-md-6">
				<x-input name="direct_supervisor" value="" help="Direct Supervisor of the employee" label="Direct Supervisor" list="evaluatorlist" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<x-input disabled="disabled" name="service_period" help="Service period of the Employee" label="Service Period" type="date" />
			</div>
			<div class="col-md-6">
				<x-input name="department_head" value="" help="Department Head of the employee" label="Department Head" list="evaluatorlist" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				{!! $quiz->purpose !!}
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-12">
				{!! $quiz->instructions !!}
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h4>Performance Rating Definitions:</h4>
			</div>
		</div>
		<?php $choices = $quiz->choices->groupBy('section')->first(); ?>
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<tr>
						<th>Score</th>
						<th>Rating Scale</th>
						<th>Definition</th>
					</tr>
					@forelse($choices as $choice)
						<tr>
							<td>{{$choice->rating_value}}</td>
							<td>{{$choice->choice}}</td>
							<td>{!!$choice->definition!!}</td>
						</tr>
					@empty
					@endforelse
				</table>
			</div>
		</div>
		<div class="row mt-2">
			<div class="col-md-12">
				<h4>Section Scores:</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<table class="table">
					<tr>
						<th>Sections</th>
						<th>Score</th>
						<th>Total</th>
					</tr>
					@forelse($table->unique('score') as $row)
						<tr>
							<td>{{$row['score']}}</td>
							<td>{{$row['answer']}}</td>
							<td>{{$row['total']}}</td>
						</tr>
					@empty
					@endforelse
					<tr>
						<th>Total Score</th>
						<th>{{$table->unique('score')->sum('answer')}}</th>
						<th>{{$table->unique('score')->sum('total')}}</th>
					</tr>
					<tr>
						<th>Total in %</th>
						<th>{{$table->unique('score')->sum('answer')}}</th>
						<th>{{$table->unique('score')->sum('total')}}</th>
					</tr>

				</table>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-12">
				<input type="hidden" name="quiz" value="{{$quiz->id}}">
				<input type="hidden" name="next" value="{{$next}}">
				<button class="btn btn-primary" type="submit">Next Section</button>
			</div>
		</div>
	</div>
</form>
@endsection