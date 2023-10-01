<x-coffee>
	<!-- PAGE HEAD -->
	<section class="page-head">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="/">Home</a></li>
						<li>Gallery</li>
					</ul>
					<h1>Coffee Processing Gallery</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- PAGE HEAD END -->

	<!-- GALLERY -->
	<section class="gallery-wrap">
		<div class="container">
			<div class="row">
				@foreach ($galleries as $gallery)
				<div class="col-md-6">
					<a href="/images/gallery/{{$gallery->id}}.{{$gallery->imageExtension}}" class="gallery-item swipebox"><img class="img-responsive" src="/images/gallery/{{$gallery->id}}.{{$gallery->imageExtension}}" alt="{{$gallery->title}}"></a>
				</div>
				@endforeach
				<div class="col-md-12">
					<div class="paging-navigation">
						<hr>
						<div class="pagination">
							{{ $galleries->links() }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- GALLERY END -->
</x-coffee>