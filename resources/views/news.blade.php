@extends("body")


@section("content")

  
  <section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container">
            <h2 class="title">{{$products->address}}</h2>
            <ul class="breadcrumbs-custom-path mt-3 text-center">
                <li><a href="/">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> About us </li>
            </ul>
        </div>
    </div>
  </section>
  <!--/w3l-ab-->
   <!--/w3l-ab-->
  <!--/w3l-ab-features-->
  <section class="w3l-ab-features py-5">
    <div class="container py-md-5 py-3">
      <div class="row features-w3pvt-main align-items-center" id="features">
        <div class="col-lg-6 feature-gird pb-lg-5">
          <h6 class="sub-titlehny mb-2">
            

          </h6>
          <h3 class="hny-title mb-4">
 

          </h3>
          <div class="separatorhny"></div>
          <p class="pr-lg-5">
          
<div contenteditable="true" calss="js-wysiwyg">  
          {{$products->text}}
          </div>
          </p>
          </div>
        <div class="col-lg-6 feature-gird pr-lg-5 mt-md-0 mt-4 pb-lg-5">
        <img src="assets/uploads/one/{{$products->img }}" alt="" class="img-fluid" />
        </div>
       
      </div>
    </div>
  </section>
  <!--//-->
   <!--/w3l-faq-block-->
   
@endsection

