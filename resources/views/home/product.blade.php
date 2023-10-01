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
	<section class="product-single">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="product-image"><img src="/images/product/{{$product->id}}_content.{{$product->imageExtension}}" alt=""></div>
				</div>
				<div class="col-md-7">
					<h3 class="name">{{$product->name}}</h3>
					<div class="top-price">Rp. @money($product->price) </div>
					<div class="description">{{$product->description}}</div>
					<br>
					<a href="{{ $product->link }}" class="btn btn-default">BUY</a>
					<div class="woocommerce-tabs wc-tabs-wrapper">
						<ul class="tabs wc-tabs">
							<li class="description_tab active">
								<a href="#tab-description">Description</a>
							</li>
						</ul>
						<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description">
							{{$product->description}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- PRODUCT END -->
</x-coffee>