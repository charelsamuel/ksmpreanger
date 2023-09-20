<x-coffee>
  <!-- MAIN SLIDER -->
  <section id="demo-1" class="main-slider" data-zs-src='["images/main-slider-img.jpg"]'>
    <div class="main-slider-caption">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="top-title"><span>Java</span> Preanger</div>
            <div class="big-title">Mekarwangi Coffee</div>
            <p>Mekarwangi Coffee adalah manifestasi keunggulan dalam dunia kopi. Dipilih dengan cermat dari biji kopi terbaik, setiap cangkir Mekarwangi Coffee menghadirkan pengalaman kopi yang tak tertandingi. Biji kopi ini tumbuh dengan penuh dedikasi di dataran tinggi yang cocok, menciptakan rasa yang begitu istimewa.</p>
            <!-- <a href="#" class="btn btn-default">READ MORE</a> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- MAIN SLIDER END -->

  <!-- MAIN TOP PRODUCT -->
  <section class="top-prod-wrap">
    <div class="top-prod-types">
      <div class="container">
        <div class="row no-gutter">
          <div class="col-md-4">
            <div class="item first">
              <img src="images/main_icon1.png" width="150" height="150" alt="">
              <div class="name dark"><span>Arabica</span> Coffee</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item second">
              <img src="images/main_icon2.png" width="150" height="150" alt="">
              <div class="name"><span>Natural</span> Proccess</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item third">
              <img src="images/main_icon3.png" width="150" height="150" alt="">
              <div class="name"><span>Honey</span> Proccess</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- MAIN TOP PRODUCT END -->

  <!-- MAIN ABOUT -->
  <section class="about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="about-text">
            <h2>About <span>Our Product</span></h2>
            <p>Dengan Mekarwangi Coffee, kami berkomitmen untuk menjaga kualitas dan kesempurnaan dalam setiap cangkir.</p>
            <ul class="about-slogan">
              <li>
                <div class="icon"><i class="fa fa-leaf" aria-hidden="true"></i></div>
                <div class="text">
                  <div class="title">100% Natural Coffee</div>
                  <p>kopi yang diproduksi sepenuhnya dengan mengutamakan bahan-bahan alami dan tanpa bahan tambahan kimia. Dalam setiap cangkirnya, Anda akan menikmati keaslian cita rasa kopi yang murni dan kualitas biji kopi yang terbaik, tanpa campuran atau pengawet buatan. </p>
                </div>
              </li>
              <li>
                <div class="icon"><i class="fa fa-coffee" aria-hidden="true"></i></div>
                <div class="text">
                  <div class="title">Pure Arabica</div>
                  <p>Pure Arabica Coffee adalah kopi murni yang berasal dari varietas kopi Arabika, yang dikenal dengan kualitasnya yang tinggi dan rasa yang istimewa. Biji kopi Arabika ditanam dengan cermat di dataran tinggi yang tepat, yang menciptakan karakteristik rasa yang unik. </p>
                </div>
              </li>
              <li>
                <div class="icon"><i class="fa fa-check-circle" aria-hidden="true"></i></div>
                <div class="text">
                  <div class="title">High Quality Product</div>
                  <p>Produk ini dibuat dengan standar yang ketat dan menggunakan bahan-bahan terbaik, menjadikannya pilihan utama bagi mereka yang menginginkan yang terbaik. Keunggulan high-quality product terletak dalam rasa, kinerja, daya tahan, dan kualitas keseluruhan yang tidak dapat disaingi.</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="about-img"><img src="images/about-img.png" alt=""></div>
        </div>
      </div>
    </div>
  </section>
  <!-- MAIN ABOUT END -->

  <!-- MAIN REASONS -->
  <section class="reasons parallax" style="background-image: url(images/parallax.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2><span>Why people</span> choose Mekarwangi Coffee</h2>
        </div>
        <div class="col-md-4">
          <div class="item">
            <div class="count">20</div>
            <div class="title">Local and International Markets</div>
            <p class="text">Mekarwangi Coffee telah berhasil mengukir jejaknya di pasar lokal dengan menawarkan kopi berkualitas tinggi yang sangat disukai oleh masyarakat setempat.<br> dan kini semakin mengukuhkan kehadiran mereka di pasar internasional dengan mengeksport kualitas unggulan ini ke berbagai penjuru dunia.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="item">
            <div class="count">3</div>
            <div class="title">Varieties of Coffee</div>
            <p class="text">Arabica, Green Bean, Mixed </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="item">
            <div class="count">3</div>
            <div class="title">Varieties of Proccess</div>
            <p class="text">Washed, Honey, Natural</p>
          </div>
        </div>
        <!-- <div class="col-md-3">
          <div class="item">
            <div class="count">83</div>
            <div class="title">Types of sweets</div>
            <p class="text">Sagittis sodales lobortis. Curabitur in eleifend turpis, id vehicula odio. </p>
          </div>
        </div> -->
      </div>
    </div>
  </section>
  <!-- MAIN REASONS END -->

  <!-- MAIN SHOP -->
  <section class="popular-item">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Popular items</h2>
        </div>
        <div class="col-md-12">
          <div class="row owl-carousel shop-slider">

            @foreach ($products as $product)
            <div class="item">
              <div class="img-wrap"><a href="/product/{{$product->id}}"><img src="/images/product/{{$product->id}}_preview.{{$product->imageExtension}}" alt=""></a></div>
              <a href="/product/{{$product->id}}" class="name">{{ $product->name }}</a>
              <div class="text">{{ $product->description }}</div>
              <div class="price">Rp. @money($product->price)</div>
              <a href="{{ $product->link }}" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Buy</a>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- MAIN SHOP END -->

  <!-- WHERE TO BUY -->
  <section class="where-buy">
    <div class="container">
      <div class="col-md-12">
        <h2>Our market</h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <!-- <div class="buy-item">
                <div class="info">
                  <div class="phone"><i class="fa fa-map-marker" aria-hidden="true"></i>481 Goodisson str. 60544 New York City - MisterCoffee</div>
                  <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                  <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                </div>
              </div> -->
        </div>
        <div class="col-sm-6">
          <div class="buy-item">
            <div class="info">
              <div class="phone"><i class="fa fa-map-marker" aria-hidden="true"></i><strong>Desa Mekarwangi, Kecamatan Sindang Kerta, Kabupaten Bandung Barat</strong></div>
              <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+62 821 1526 5767</div>
              <a href="mailto:mekarwangi.coffee@gmail.com" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>mekarwangi.coffee@gmail.com</a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <!-- <div class="buy-item">
                <div class="info">
                  <div class="phone"><i class="fa fa-map-marker" aria-hidden="true"></i>481 Goodisson str. 60544 New York City - MisterCoffee</div>
                  <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</div>
                  <a href="mailto:orders@mistercoffee.us" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</a>
                </div>
              </div> -->
        </div>
      </div>
    </div>
  </section>
  <!-- WHERE TO BUY END -->

  <!-- MAIN REVIEWS -->
  <section class="main-reviews">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2><span>What our</span> clients say</h2>
        </div>
        <div class="col-md-12">
          <div class="owl-carousel review-slider owl-theme">
            @foreach ($testimonials as $testimonial)
            <div class="item">
              <div class="review-item">
                <p class="text">{{ $testimonial->testi }}</p>
                <div class="img-wrap"></div>
                <div class="name">{{ $testimonial->name }}</div>
                <div class="date">{{ $testimonial->created_at }}</div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- MAIN REVIEWS END -->

  <!-- MAIN BLOG -->
  <section class="main-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Read our news</h2>
        </div>
        @foreach ($news as $item)
        <div class="col-md-3">
          <div class="main-blog-item">
            <div class="img-wrap"><a href="/blog/{{$item->id}}"><img class="img-responsive" src="/images/news/{{$item->id}}.{{$item->imageExtension}}" alt=""></a></div>
            <div class="info">
              <a href="/blog/{{$item->id}}" class="name">{{ $item->title }}</a>
              <p class="text">{{ $item->preview }}</p>
            </div>
            <div class="item-info">
              <div class="left">
                <div class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>{{ $item->created_at }}</div>
              </div>
              <!-- <div class="right">
                <div class="like"><i class="fa fa-heart" aria-hidden="true"></i>12</div>
                <div class="comm"><i class="fa fa-commenting" aria-hidden="true"></i>3</div>
              </div> -->
            </div>
          </div>
        </div>
        @endforeach
        <div class="col-md-12 text-center"><a href="/blogs" class="btn btn-default all-blog">all news</a></div>
      </div>
    </div>
  </section>
  <!-- MAIN BLOG END -->
</x-coffee>