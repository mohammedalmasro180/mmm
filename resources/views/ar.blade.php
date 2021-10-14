@extends("body")


@section("content")


  <!-- main-slider -->
  <section class="w3l-main-slider" id="home">
    <div class="companies20-content">
      <div class="owl-one owl-carousel owl-theme">
        <div class="item">
          <li>
            <div class="slider-info banner-view bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="txt">
                    <h5 class="txt">نمكّنك من النقل والقياس والمزج والتحكم والتوزيع والرش</h5>
                    <a class="btn btn-style txt btn-white mt-sm-5 mt-4 mr-2" href="/ar"> بادر بالتعرف على شاهين</a>
                    
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
                  <div class="txt">
                  <h5 class="txt">اطلب خدمتك واتصل بنا</h5>
                    
                    <a class="btn txt btn-style border-btn mt-sm-5 mt-4" href="/arcon">اتصل بتا</a>
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
  <section dir="rtl"  class="w3l-grids-3 py-5" id="about">
    <div dir="rtl" class="container py-md-5 py-3">
      <div dir="rtl" class="row bottom-ab-grids align-items-center">

        <div dir="rtl" class="col-lg-6 bottom-ab-left">
          
          <h3 dir="rtl"  class="abtxt">
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
  <section id="services" dir="rtl" class="w3l-ab-features py-5">
  <div class="title-content text-center mb-lg-5 mb-4">
          <h6 class="sub-titlehny txt">خدماتنا</h6>
          <h3 class="hny-title ttxt">
            خدمات الشاهين</h3>
          <div class="separatorhny"></div>
        </div>
    <div dir="rtl" class="container py-md-5 py-3">
      <div class="row features-w3pvt-main" id="features">
      @foreach ($posts as $post)
        <div class="col-lg-4 col-md-6 feature-gird">
          <div class="row features-hny-inner-gd">
            <div class="col-md-2 col-2 featured_grid_left">
              <div class="icon-hnynumber">
                              </div>
            </div>
            <div  dir="rtl" class="col-md-10 col-10 featured_grid_right_info">
              
              <p>
              <a class="link-hny" href="/argid{{$post->id}}">
              <img src="assets/uploads/one/{{$post->img }}"  width="300px" height="300px" alt="...">
              </a>
</p>
<br />
<h5  dir="rtl">
<a class="link-hny ttxt" href="/argid{{$post->id}}">
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
  <div dir="rtl" class="w3l-cwp4-sec py-5">
    <div  dir="rtl"  class="container py-md-5 py-3">
      <div  dir="rtl"  class="cwp4-two row align-items-center">
        <div  dir="rtl"  class="cwp4-image col-lg-6 pr-lg-5">
          <img  src="assets/uploads/one/{{$block->img}}" class="img-fluid" alt="">
        </div>
        <div  dir="rtl"  class="cwp4-text col-lg-6 mt-lg-0 mt-5">
          <h6  dir="rtl"  class="txt2 sub-titlehny">
          {{$block->adresread}}

          </h6>
          <h3 class="hny-title txt2">
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
          <h3 class="txt2 hny-title">
            اخبار الشاهين</h3>
          <div class="separatorhny"></div>
        </div>
      </div>
      <div class="owl-news owl-carousel owl-theme">
        
      @foreach ($products as $product)

        <div class="item">
          <div class="news-img position-relative">
          <a href="/news{{$product->id}}">
            <img src="assets/uploads/one/{{$product->img }}" class="img-fluid" width="640px" height="427px" alt="news image"></a>
            <div class="title-wrap">
            <a href="/news{{$product->id}}">
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
  <div dir="rtl" class="w3l-middle py-5">
    <div class="container py-xl-5 py-lg-3">
      <div class="welcome-left py-3">
        <h6 class="txt sub-titlehny">اتصل بنا</h6>
        <h4 class="txt">نحن هنا لمساعدتك</h4>
        <div class="separatorhny"></div>
        <p class="pr-lg-5">ما عليك سوى إجراء اتصال هاتفي أو إرسال رسالة بريد إلكتروني للحصول على خدمة العملاء الممتازة لأي من منتجات 
شاهين
 </p>
        <div class="buttons mt-5">
          <a href="/arcon" class="btn btn-white btn-primary mr-2">اتصل بنا</a>
        </div>
      </div>
    </div>
  </div>
  <!-- //middle -->
   @endsection