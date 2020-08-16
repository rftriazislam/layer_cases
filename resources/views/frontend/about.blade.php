@extends('layouts.frontend')
@section('content')
 <!-- Section: inner-header -->
 <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="http://placehold.it/1920x1280">
      <div class="container pt-30 pb-30">
        <!-- Section Content -->
        <div class="section-content text-center">
          <div class="row"> 
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="text-theme-colored font-36">About</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">About</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>
    
    <!-- Section: About -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h3 class="mt-0">About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis voluptatibus neque, assumenda maxime. Eaque libero unde corrupti deleniti maxime ratione doloremque suscipit perferendis aperiam labore debitis atque odit neque, possimus, aspernatur dicta nobis recusandae numquam provident porro, quam suscipit quibusdam. Commodi eum, optio quo.</p>
            <p class="mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla odio molestiae laboriosam, inciduntvolupta tibus fugit, adipisci tenetur necessitatibus officia nesciunt eveniet, culpa consequatur reiciendis quaerat.</p>
            <h3>Our Skills</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et optio cum velit autem dolor reprehenderit saepe assumenda eos, qui. Voluptatem eveniet, illum dolor nemo? Velit maiores quaerat a non dolor praesentium, corporis optio ullam, voluptatem fuga consequatur sed cupiditate quam!</p>
            <br>
            <div class="row">
              <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="icon-box border-1px bg-hover-theme-colored text-center mb-0 mb-sm-20 p-15"> <i class="pe-7s-users text-theme-colored"></i>
                  <h6 class="font-weight-600 font-14">Deal Support</h6>
                </div>
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="icon-box border-1px bg-hover-theme-colored text-center mb-0 mb-sm-20 p-15"> <i class="pe-7s-headphones text-theme-colored"></i>
                  <h6 class="font-weight-600 font-14">Online Consulting</h6>
                </div>
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="icon-box border-1px bg-hover-theme-colored text-center mb-0 mb-sm-20 p-15"> <i class="pe-7s-copy-file text-theme-colored"></i>
                  <h6 class="font-weight-600 font-14">Document preparation</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="thumb"> <img class="img-fullwidth" src="http://placehold.it/450x250" alt=""> </div>
            <h4 class="mt-20">Why Choose Us?</h4>
            <div class="panel-group accordion style2 mb-0 mt-20" id="accordion2">
              <div class="panel">
                <div class="panel-title"> <a href="#accordion21" data-toggle="collapse" data-parent="#accordion2"> <span class="open-sub"></span> Best Case Strategy </a> </div>
                <div class="panel-collapse collapse" id="accordion21">
                  <div class="panel-content">
                    <p>Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum leo massa mollis estiegittis miristum nulla.</p>
                  </div>
                </div>
              </div>
              <div class="panel">
                <div class="panel-title"> <a href="#accordion22" data-toggle="collapse" data-parent="#accordion2"> <span class="open-sub"></span> Review your Case Documents </a> </div>
                <div class="panel-collapse collapse" id="accordion22">
                  <div class="panel-content">
                    <p>Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum leo massa mollis estiegittis miristum nulla.</p>
                  </div>
                </div>
              </div>
              <div class="panel">
                <div class="panel-title"> <a href="#accordion23" data-toggle="collapse" data-parent="#accordion2"> <span class="open-sub"></span> Fight for Justice </a> </div>
                <div class="panel-collapse collapse" id="accordion23">
                  <div class="panel-content">
                    <p>Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum leo massa mollis estiegittis miristum nulla.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- divider: what makes us different -->
    <section class="divider parallax layer-overlay overlay-deep" data-stellar-background-ratio="0.5" data-bg-img="http://placehold.it/1920x1280">
      <div class="container">
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12">
              <h3 class="mt-0">We Fight for our clients</h3>
              <h2>Just call at <span class="text-theme-colored">(01) 234 5678</span> for emergency service</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section: Appointment -->
    <section class="bg-no-repeat bg-img-cover">
      <div class="container pb-0">
        <div class="row">
          <div class="col-md-7 col-md-offset-1"> <img class="mt-10" src="http://placehold.it/889x655" alt=""> </div>
          <div class="col-md-4 p-20">
            <div class="bg-deep p-30 pt-20">
              <h4 class="line-bottom text-theme-colored text-uppercase mt-0 mb-20">Make an Appointment</h4>

              <!-- Appointment Form -->
              <form id="appointment_form" name="appointment_form" class="form-transparent form-line" method="post" action="includes/appointment.php">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group mb-10">
                      <input id="form_name" name="form_name" class="form-control" type="text" required="" placeholder="Enter Name" aria-required="true">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group mb-10">
                      <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group mb-10">
                      <input id="form_appontment_date" name="form_appontment_date" class="form-control required date-picker" type="text" placeholder="Appoinment Date" aria-required="true">
                    </div>
                  </div>
                </div>
                <div class="form-group mb-10">
                  <textarea id="form_message" name="form_message" class="form-control required"  placeholder="Enter Message" rows="5" aria-required="true"></textarea>
                </div>
                <div class="form-group mb-0 mt-20">
                  <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                  <button type="submit" class="btn btn-dark btn-theme-colored" data-loading-text="Please wait...">SEND TO LAWYER</button>
                </div>
              </form>

              <!-- Appointment Form Validation-->
              <script type="text/javascript">
                $("#appointment_form").validate({
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
        </div>
      </div>
    </section>

    <!-- Divider: testimonials and clients -->
    <section class="divider parallax layer-overlay overlay-deep" data-stellar-background-ratio="0.5" data-bg-img="http://placehold.it/1920x1280">
      <div class="container pb-50">
        <div class="row">
          <div class="col-sm-5 mb-30">
            <div class="testimonial-carousel boxed">
              <div class="item xs-text-center">
                <div class="content pt-10">
                  <p class="font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt.</p>
                  <div class="thumb"><img width="75" class="img-circle" alt="" src="http://placehold.it/75x75"></div>
                  <h5 class="author text-theme-colored mt-20 mb-0">Catherine Grace</h5>
                  <h6 class="title text-gray mt-0">Designer</h6>
                </div>
              </div>
              <div class="item xs-text-center">
                <div class="content pt-10">
                  <p class="font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt.</p>
                  <div class="thumb"><img width="75" class="img-circle" alt="" src="http://placehold.it/75x75"></div>
                  <h5 class="author text-theme-colored mt-20 mb-0">Catherine Grace</h5>
                  <h6 class="title text-gray mt-0">Designer</h6>
                </div>
              </div>
              <div class="item xs-text-center">
                <div class="content pt-10">
                  <p class="font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt.</p>
                  <div class="thumb"><img width="75" class="img-circle" alt="" src="http://placehold.it/75x75"></div>
                  <h5 class="author text-theme-colored mt-20 mb-0">Catherine Grace</h5>
                  <h6 class="title text-gray mt-0">Designer</h6>
                </div>
              </div>
            </div> 
          </div>
          <div class="col-sm-7">
            <div class="row equal-height">
              <div class="col-xs-4 p-0">
                <div class="client-img"><a href="#"><img alt="" src="http://placehold.it/110x110"></a></div>
              </div>
              <div class="col-xs-4 p-0 bg-lightest">
                <div class="client-img"><a href="#"><img alt="" src="http://placehold.it/110x110"></a></div>
              </div>
              <div class="col-xs-4 p-0">
                <div class="client-img"><a href="#"><img alt="" src="http://placehold.it/110x110"></a></div>
              </div>
              <div class="col-xs-4 p-0 bg-lightest">
                <div class="client-img"><a href="#"><img alt="" src="http://placehold.it/110x110"></a></div>
              </div>
              <div class="col-xs-4 p-0">
                <div class="client-img"><a href="#"><img alt="" src="http://placehold.it/110x110"></a></div>
              </div>
              <div class="col-xs-4 p-0 bg-lightest">
                <div class="client-img"><a href="#"><img alt="" src="http://placehold.it/110x110"></a></div>
              </div>
              <div class="col-xs-4 p-0">
                <div class="client-img"><a href="#"><img alt="" src="http://placehold.it/110x110"></a></div>
              </div>
              <div class="col-xs-4 p-0 bg-lightest">
                <div class="client-img"><a href="#"><img alt="" src="http://placehold.it/110x110"></a></div>
              </div>
              <div class="col-xs-4 p-0">
                <div class="client-img"><a href="#"><img alt="" src="http://placehold.it/110x110"></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection