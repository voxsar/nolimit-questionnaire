@extends('layouts.user')
@push('title')
	{{$quiz->name}}
@endpush
@push('breadcrumbs')
@endpush
@section('page')
	<div class="container">
		@if($quiz->exists() && $quiz->questions()->exists())
			@forelse($quiz->questions as $question)
				@if($quiz->answers()->exists())
					@forelse($quiz->answers as $answer)
						@if($answer->sections()->exists())
							@forelse($answer->sections as $section)
								{{$section}}
							@empty
							@endforelse
						@endif
					@empty
					@endforelse
				@endif
			@empty
			@endforelse
		@endif
	</div>
@endsection