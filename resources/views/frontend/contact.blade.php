@extends('layouts.frontend')
@section('content')

<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="http://placehold.it/1920x1280">
      <div class="container pt-30 pb-30">
        <!-- Section Content -->
        <div class="section-content text-center">
          <div class="row"> 
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="text-theme-colored font-36">Contact</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Contact</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

 <!-- Section: Have Any Question -->
 <section class="divider">
      <div class="container pt-60 pb-60">
        <div class="section-title mb-60">
          <div class="row">
            <div class="col-md-12">
              <div class="esc-heading small-border text-center">
                <h3>Have any Questions?</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
                <h4>Call Us</h4>
                <h6 class="text-gray">Phone: +262 695 2601</h6>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
                <h4>Address</h4>
                <h6 class="text-gray">121 King Street, Australia</h6>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
                <h4>Email</h4>
                <h6 class="text-gray">you@yourdomain.com</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section Contact -->
    <section id="contact" class="divider bg-lighter">
      <div class="container-fluid pt-0 pb-0">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="contact-wrapper">
                <h3 class="mt-100 mb-30">Interested in discussing?</h3>
                <p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                <!-- Contact Form -->
                <form id="contact_form" name="contact_form" class="form-transparent" action="includes/sendmail.php" method="post">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="form_name">Name <small>*</small></label>
                        <input id="form_name" name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="form_email">Email <small>*</small></label>
                        <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="form_name">Subject <small>*</small></label>
                        <input id="form_subject" name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="form_phone">Phone</label>
                        <input id="form_phone" name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="form_name">Message</label>
                    <textarea id="form_message" name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                  </div>
                  <div class="form-group">
                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                    <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
                    <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
                  </div>
                </form>
                <!-- Contact Form Validation-->
                <script type="text/javascript">
                  $("#contact_form").validate({
                    submitHandler: function(form) {
                      var form_btn = $(form).find('button[type="submit"]');
                      var form_result_div = '#form-result';
                      $(form_result_div).remove();
                      form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                      var form_btn_old_msg = form_btn.html();
                      form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                      $(form).ajaxSubmit({
                        dataType:  'json',
                        success: function(data) {
                          if( data.status == 'true' ) {
                            $(form).find('.form-control').val('');
                          }
                          form_btn.prop('disabled', false).html(form_btn_old_msg);
                          $(form_result_div).html(data.message).fadeIn('slow');
                          setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                        }
                      });
                    }
                  });
                </script>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 bg-img-center bg-img-cover p-0" data-bg-img="http://placehold.it/1920x1280">

              <!-- Google Map HTML Codes -->
              <div 
                data-address="121 King Street, Melbourne Victoria 3000 Australia"
                data-popupstring-id="#popupstring1"
                class="map-canvas autoload-map"
                data-mapstyle="style2"
                data-height="800"
                data-latlng="-37.817314,144.955431"
                data-title="sample title"
                data-zoom="12"
                data-marker="images/map-icon-blue.png">
              </div>
              <div class="map-popupstring hidden" id="popupstring1">
                <div class="text-center">
                  <h3>MrLaw Office</h3>
                  <p>121 King Street, Melbourne Victoria 3000 Australia</p>
                </div>
              </div>
              <!-- Google Map Javascript Codes -->
              <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
              <script src="js/google-map-init.js"></script>

            </div>
          </div>
        </div>
      </div>
    </section>
@endsection