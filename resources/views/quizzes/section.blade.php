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
<form action="{{route('users.quizzes.answers.update', [$user, $quiz, $answer])}}" method="post">
	@csrf
	@method('PATCH')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="container-fluid questionr">

					<div class="row">
						<div class="m-1 p-2 col-1"></div>
						<div class="m-1 p-2 col-6"></div>
						<div class="p-0 m-0 col">
							<div class="container-fluid p-0 m-0">
								<div class="p-0 m-0 row bg-dark text-light text-center">
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
								<div class="p-1 m-1 col">
									<p class="text-right group_val_{{$count}}">0</p>
								</div>
							</div>
						@endunless
						@forelse($questions as $index => $question)
							<div class="row border-bottom border-success">
								<div class="m-1 p-1 col-1">
									<x-roman value="{{$index}}" />
								</div>
								<div class="m-1 p-1 col-6">{{$question->question}}</div>
								<div class="m-1 p-1 col" >
									<div class="p-0 m-0 container-fluid">
										<div class="row ">
											@forelse($choicetitles as $index => $choice)
												<div class="col d-flex justify-content-center ">
													<input class="form-control question group_{{$count}}" data-groupval="group_val_{{$count}}" data-group="group_{{$count}}" data-value="{{$choice->rating_value}}" type="radio" value="{{$choice->rating_value}}" name="questions[{{$question->id}}][answer]">

													<input type="hidden" name="questions[{{$question->id}}][category]" value="{{$question->category}}">

													<input type="hidden" name="questions[{{$question->id}}][section]" value="{{$question->section}}">

													<input type="hidden" name="questions[{{$question->id}}][question]" value="{{$question->id}}">

													<input type="hidden" name="questions[{{$question->id}}][type]" value="1">
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

					<div class="row bg-dark text-light">
						<div class="m-1 p-2 col-1"></div>
						<div class="m-1 p-2 col-6 text-right">
							<p>Score</p>
						</div>
						<div class="p-1 m-1 col">
							<p class="text-right total_val">0</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<a href="{{route('users.quizzes.answers.section', [$user, $quiz, $answer, $back])}}" class="btn btn-primary">Previous Section</a>
				<input type="hidden" name="user" value="{{$user->id}}">
				<input type="hidden" name="answer" value="{{$answer->id}}">
				<input type="hidden" name="next" value="{{$next}}">
				<input type="hidden" name="current" value="{{$question->section}}">
				<input type="hidden" name="quiz" value="{{$quiz->id}}">
				<button type="submit" class="btn btn-primary">Next Section</button>
			</div>
		</div>
	</div>
</form>
@endsection
@push('scripts')
	<script type="text/javascript">
		$(document).ready(function(e) {
			$(".questionr").on('click', '.question:checked', function() {
				var group = 0;
				$("."+$(this).data('group')+":checked").each(function() {
					group += $(this).data('value')
					$("."+$(this).data('groupval')).html(group)
				})
				var count = 0
				$(".question:checked").each(function() {
					count += $(this).data('value')
					$(".total_val").html(count)
				})
				
			})
		});
	</script>
@endpush