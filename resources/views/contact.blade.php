@extends("ennbody")


@section("content")


  <!--/w3l-breadcrumb-->
  <section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container">
            <h2 class="title">Cull us</h2>
            <ul class="breadcrumbs-custom-path mt-3 text-center">
                <li><a href="/en">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact Us </li>
            </ul>
        </div>
    </div>
  </section>
  <!--//w3l-breadcrumb-->
  <!--/contact-->
  <section class="w3l-contact-11 pt-5">
    <div class="contacts-main pt-lg-5 pt-3">
      <div class="title-content text-center">
        <h6 class="sub-titlehny">Contact</h6>
        <h3 class="hny-title mb-0">We’re Here to Help You</h3>
        <p class="mb-md-5 mb-4">Have some suggestions or just want to say hi? Contact us:</p>
    </div>
      <div class="form-41-mian section-gap mt-5">
        <div class="container">
          <div class="d-grid align-form-map">
            <div class="form-inner-cont">
              <form action="/mail" method="post" class="contact-form">
                <div class="form-top-left">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                  <input type="text" name="wlName" id="w3lName" placeholder="Name" required="">

                  <input type="email" name="wlSender" id="w3lSender" placeholder="Email*"
                    required="">

                  <input type="text" name="wlSubject" id="w3lName" placeholder="Subject"
                    required="">

                </div>
                <div class="form-top-righ">
                  <textarea name="wlMessage" id="w3lMessage" placeholder="Message*"
                    required=""></textarea>
                </div>
                <div class="form-submit text-right">
                    <button type="submit" class="btn btn-style btn-primary">Submit Message</button>
                  </div>
              </form>
            </div>
      
          </div>
        </div>
      </div>
      <div  class="contant11-top-bg mt-4">
        <div class="container pb-lg-5">
          <div class="d-grid contact py-lg-5 py-4">
            <div class="contact-info-left d-grid text-left">
              <div class="contact-info">
                <span class="fa fa-map-o" aria-hidden="true"></span>
                <h4>Visit Us Daily:</h4>
                <p class="mb-2">
KINGDOM OF SAUDI ARABIA – RIYADH – Railway Stree 5578-12321

</p>
                
              </div>
              <div class="contact-info">
                <span class="fa fa-phone" aria-hidden="true"></span>
                <h4>Phone Us 24/7:</h4>
                <p class="mb-2 conp"> <a href="">TEL : +966 538088184</a></p>
                <p class="conp"> <a href="">ALT : +966 59209811</a></p>
              </div>
              <div class="contact-info">
                <span class="fa fa-envelope-o" aria-hidden="true"></span>
                <h4>Mail Us 24/7:</h4>
                <p class="mb-2 conp"><a href="" class="email"></a></p>
                <p class="conp"><a href="mailto:Preventive@email.com" class="email">info@shaheen.com</a></p>
               
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001161.424489281!2d-78.01909140705047!3d42.72866436845163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sin!4v1570786994395!5m2!1sen!2sin"
          frameborder="0" allowfullscreen=""></iframe>
      </div>
  </section>
  <!--//contact-->
  <!--//w3l-footer-29-main-->
@endsection

