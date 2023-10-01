<x-coffee>
	<!-- PAGE HEAD -->
	<section class="page-head">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="/">Home</a></li>
						<li>Coffee Products</li>
					</ul>
					<h1>Coffee Products</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- PAGE HEAD END -->

	<!-- PRODUCT -->
	<section class="about-products">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Our <span>Products</span></h2>
				</div>
				@foreach ($products as $product)
				<div class="col-md-4">
					<div class="item">
						<div class="img-wrap"><img src="/images/product/{{$product->id}}_preview.png" alt=""></div>
						<div class="name"><span><a href="/product/{{$product->id}}">{{ $product->name }}</a></div>
						<div class=" price">Rp. @money($product->price) </div>
						<p class="text">{{ $product->description }}</p>
						<a href="{{ $product->link }}" class="btn btn-default">BUY</a>
					</div>
				</div>
				@endforeach
			</div>

			<div class="paging-navigation">
				<hr>
				<div class="pagination">
					{{ $products->links() }}
				</div>
			</div>
		</div>
	</section>
	<!-- PRODUCT END -->
</x-coffee>