@extends("ennbody")


@section("content")

<section class="w3l-main-slider" id="home">
    <div class="companies20-content">
      <div class="owl-one owl-carousel owl-theme">
        <div class="item">
          <li>
            <div class="slider-info banner-view bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="txt">
                  <h5 class="txt">
                    We enable you to transfer, measure, mix, control, dispense and spray
                    </h5>
                    <a class="btn btn-style btn-white mt-sm-5 mt-4 mr-2" href="/en">
                    Get to know Shaheen
                     </a>
                    
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
        <div class="item">
          <li>
            <div class="slider-info  banner-view banner-top1 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="txt ">
                  <h5 class="txt">
                  Request your service and contact us
                  </h5>
                    
                    <a class="btn btn-style border-btn mt-sm-5 mt-4" href="/contact">
                    call me
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>

        </div>
        
      </div>
    </div>
  </section>
   <!-- /main-slider -->
  <!--/grids-->
  <section   class="w3l-grids-3 py-5" id="about">
    <div  class="container py-md-5 py-3">
      <div  class="row bottom-ab-grids align-items-center">

        <div  class="col-lg-6 bottom-ab-left">
          
          <h3   class="hny-title">
          {{$blockk->address}}

          </h3>
          <div class="separatorhny"></div>
          <p class="my-3">{{$blockk->text}} </p>
          
        </div>
        <div class="col-lg-6 bottom-ab-right mt-lg-0 mt-5 pl-lg-4">
          <img src="assets/uploads/one/{{$blockk->img }}" alt="" class="img-fluid">
        </div>

      </div>
    </div>
  </section>
  <!--//grids-->
  <!--/features-->
  <section id="services"  class="w3l-ab-features py-5">
  <div class="title-content text-center mb-lg-5 mb-4">
          <h6 class="sub-titlehny">
          Our services
          </h6>
          <h3 class="hny-title">
          Shaheen Services
            </h3>
          <div class="separatorhny"></div>
        </div>
    <div  class="container py-md-5 py-3">
      <div class="row features-w3pvt-main" id="features">
      @foreach ($posts as $post)
        <div class="col-lg-4 col-md-6 feature-gird">
          <div class="row features-hny-inner-gd">
            <div class="col-md-2 col-2 featured_grid_left">
              <div class="icon-hnynumber">
                              </div>
            </div>
            <div   class="col-md-10 col-10 featured_grid_right_info">
              
              <p>
              <a class="link-hny" href="/gid{{$post->id}}">
              <img src="assets/uploads/one/{{$post->img }}"  width="300px" height="300px" alt="...">
              </a>
</p>
<br />
<h5  >
<a class="link-hny" href="/gid{{$post->id}}">
{{ $post->address }}
</a>
</h5>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!--/w3l-cwp4-->
  <div  class="w3l-cwp4-sec py-5">
    <div    class="container py-md-5 py-3">
      <div    class="cwp4-two row align-items-center">
        <div    class="cwp4-image col-lg-6 pr-lg-5">
          <img  src="assets/uploads/one/{{$block->img}}" class="img-fluid" alt="">
        </div>
        <div    class="cwp4-text col-lg-6 mt-lg-0 mt-5">
          <h6    class="sub-titlehny">
          {{$block->adresread}}

          </h6>
          <h3 class="hny-title">
          {{$block->address}}</h3>
          <div class="separatorhny"></div>
          <p>{{$block->text}}
          </p>
        </div>

      </div>
    </div>

  </div>
  <!--//w3l-grids-->
  <!-- stats -->
  <!-- //stats -->

  <!-- /blog-posts-->
  <!-- //blog-Section -->
  <!--//news-grids-->
  <section class="w3l-news-sec">
    <div class="news-mainhny py-5">
      <div class="container text-center py-lg-3">
      <div class="title-content text-center mb-lg-5 mb-4">
          <h6 class="sub-titlehny"></h6>
          <h3 class="hny-title">
          Shaheen News
            </h3>
          <div class="separatorhny"></div>
        </div>
      </div>
      <div class="owl-news owl-carousel owl-theme">
        
      @foreach ($products as $product)

        <div class="item">
          <div class="news-img position-relative">
          <a href="/ennews{{$product->id}}">
            <img src="assets/uploads/one/{{$product->img }}" class="img-fluid" width="640px" height="427px" alt="news image"></a>
            <div class="title-wrap">
            <a href="/ennews{{$product->id}}">
                <h4 class="title">{{ $product->address }}</h4>
              </a>
              <a href="#" class="text-right"><span class="fa fa-arrow-right"></span></a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!--//news-grids-->
  <!--/w3l-subscribe-->
 <!--//features-->
  <!-- middle -->
  <div  class="w3l-middle py-5">
    <div class="container py-xl-5 py-lg-3">
      <div class="welcome-left py-3">
        <h6 class="sub-titlehny">
        call us
        </h6>
        <h4>
        We are here to help you
        </h4>
        <div class="separatorhny"></div>
        <p class="pr-lg-5">
        Simply make a phone call or send an email to get excellent customer service for any of our products
Shaheen
 </p>
        <div class="buttons mt-5">
          <a href="/contact" class="btn btn-white btn-primary mr-2">
          call us
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- //middle -->
   <!-- footer -->
@endsection

