@extends('layouts.user')
@push('title')
	Group Appraisals
@endpush
@push('breadcrumbs')

@endpush
@section('page')
<div class="container">
	<div class="row mt-5">
		<div class="col-md-12 mt-5">
			<table class="table">
				<tr>
					<th>Name</th>
					<th colspan="3">Actions</th>
				</tr>
				@forelse($quizzes as $quiz)
					<tr>
						<td>{{$quiz->name}}</td>
						
						<td>
							<a class="btn btn-success btn-block" href="{{route("users.quizzes.show", [$user, $quiz])}}">Fill Appraisal</a>
						</td>
					</tr>
				@empty
				@endforelse
			</table>
		</div>
	</div>
</div>
@endsection