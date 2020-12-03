@extends('layouts.client')
@push('title')
	{{$quiz->name}}</h1>
	<h3>{{$section}}</h3><h1>
@endpush
@push('css')
	<style type="text/css">

	</style>
@endpush
@push('breadcrumbs')
@endpush
@section('page')
<form action="{{route('quizzes.store')}}" method="post">
	@csrf
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="container-fluid">

					<div class="row">
						<div class="m-1 p-2 col-1"></div>
						<div class="m-1 p-2 col-6"></div>
						<div class="p-0 m-0 col">
							<div class="container-fluid">
								<div class="p-0 m-0 row bg-dark text-light">
									@forelse($choicetitles as $title)
										<div class="p-1 m-0 col" style="line-height: 1;"><small>{{$title->choice}}</small></div>
									@empty
									@endforelse
								</div>
							</div>
						</div>
					</div>
					<?php $count = 1; ?>
					@forelse($sections as $key => $questions)
						@unless($key == 'N/A')
							<div class="row bg-dark text-light">
								<div class="m-1 p-2 col-1">{{$count}}</div>
								<div class="m-1 p-2 col-6">{{$key}}</div>
								<div class="p-0 m-0 col">
								</div>
							</div>
						@endunless
						@forelse($questions as $index => $question)
							<div class="row border-bottom border-success">
								<div class="m-1 p-1 col-1"><x-roman value="{{$index}}" /></div>
								<div class="m-1 p-1 col-6">{{$question->question}}</div>
								<div class="m-1 p-1 col" >
									<div class="p-0 m-0 container-fluid">
										<div class="row">
											@forelse($choicetitles as $index => $choice)
												<div class="col d-flex justify-content-center ">
													<input class="form-control" type="radio" name="{{$question->id}}">
												</div>
											@empty
											@endforelse
										</div>
									</div>
								</div>
							</div>
						@empty
						@endforelse

						<?php $count++; ?>
					@empty
					@endforelse
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<a href="{{route('quizzes.section', [$quiz, $back])}}" class="btn btn-primary">Previous Section</a>
				<a href="{{route('quizzes.section', [$quiz, $next])}}" class="btn btn-primary">Next Section</a>
			</div>
		</div>
	</div>
</form>
@endsection