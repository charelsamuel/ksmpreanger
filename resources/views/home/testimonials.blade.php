<x-coffee>
	<!-- PAGE HEAD -->
	<section class="page-head">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="/">Home</a></li>
						<li>Testimonials</li>
					</ul>
					<h1>Testimonials about our Coffee</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- PAGE HEAD END -->

	<!-- TESTIMONIALS -->
	<section class="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>What our clients say</h2>
				</div>
				<div class="col-md-8 col-md-offset-2 testimonials-list">
					@foreach ($testimonials as $testimonial)
					<div class="review-item">
						<div class="quote">
							<i class="fa fa-quote-left"></i>
						</div>
						<p class="text">{{ $testimonial->testi }}</p>
						<div class="img-wrap"></div>
						<div class="name">{{ $testimonial->name }}</div>
						<div class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $testimonial->created_at }}</div>
					</div>
					@endforeach
					<div class="col-md-12">
						<div class="paging-navigation">
							<hr>
							<div class="pagination">
								{{ $testimonials->links() }}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- TESTIMONIALS END -->
</x-coffee>