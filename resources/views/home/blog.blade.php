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
					<div class="col-md-12">
						<div class="blog-item">
							<div class="img-wrap"><a href="blog-post.html"><img class="img-responsive" src="/images/news/{{$news->id}}.{{$news->imageExtension}}" alt=""></a></div>
							<div class="info">
								<a href="blog-post.html" class="name">
									<h4>
										{{ $news->title }}
									</h4>
								</a>
								<p class="text">{!! $news->content !!}</p>
							</div>
							<div class="item-info">
								<div class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>{{ $news->created_at }}</div>
								<!-- <div class="like"><i class="fa fa-heart" aria-hidden="true"></i>12</div>
								<div class="comm"><i class="fa fa-commenting" aria-hidden="true"></i>3</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- BLOG LIST END -->

	<!-- SUBSCRIBE FORM -->

	<section class="subscribe">
		<div class="container ">
			<div class="row">
				<div class="col-md-12">
					<div class="inner">
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<div class="top-title">Want to know about new types of coffee?</div>
								<div class="bottom-title">Get our weekly email</div>
							</div>
							<div class="col-lg-5 col-md-6">
								<form class="subs-form">
									<input type="text" placeholder="Enter Your Email">
									<input type="submit" value="SUBMIT">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- SUBSCRIBE FORM END -->

	<!-- FOOTER -->
	<footer class="footer">
		<div class="top-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-6">
						<a href="#" class="footer-logo"><img src="images/footer-logo.png" alt=""></a>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="footer-about">
							<div class="title">About Mekarwangi Coffee</div>
							<p>Sed sagittis sodales lobortis. Curabitur in eleifend<br> turpis, id vehicula odio. Donec pulvinar tellus<br> eget magna aliquet ultricies. </p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<ul class="footer-contacts">
							<li><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</li>
							<li><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</li>
							<li><i class="fa fa-skype" aria-hidden="true"></i>mrcoffee</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="footer-social">
							<div class="title">Follow Us</div>
							<ul class="social">
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="copyrights"><a href="#">kmspreanger</a> 2023 &copy; All Rights reserved <a href="#">Terms of Use</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- FOOTER END -->
</x-coffee>