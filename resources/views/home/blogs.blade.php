<x-coffee>
	<!-- PAGE HEAD -->
	<section class="page-head">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="/home">Home</a></li>
						<li>Blog</li>
					</ul>
					<h1>Blog</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- PAGE HEAD END -->

	<!-- BLOG LIST -->
	<section class="blog-list">
		<div class="blog-content">
			<div class="container">
				<div class="row">
					@foreach ($news as $item)
					<div class="col-md-12">
						<div class="blog-item">
							<div class="img-wrap"><a href="/blog/{{ $item->id }}"><img class="img-responsive" src="/images/news/{{$item->id}}.{{$item->imageExtension}}" alt=""></a></div>
							<div class="info">
								<a href="/blog/{{ $item->id }}" class="name">
									<h4>
										{{ $item->title }}
									</h4>
								</a>
								<p class="text">{{ $item->preview }}</p>
							</div>
							<div class="item-info">
								<div class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>{{ $item->created_at }}</div>
								<!-- <div class="like"><i class="fa fa-heart" aria-hidden="true"></i>12</div>
								<div class="comm"><i class="fa fa-commenting" aria-hidden="true"></i>3</div> -->
							</div>
						</div>
						@endforeach
						<div class="paging-navigation">
							<hr>
							<div class="pagination">
								{{ $news->links() }}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- BLOG LIST END -->
</x-coffee>