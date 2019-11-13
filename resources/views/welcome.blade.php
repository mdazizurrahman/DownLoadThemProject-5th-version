@extends('layouts.frontend.app')
@section('title','Home')
@push('css')
    <style>
        .favorite_posts{
            color:blue;
        }
    </style>
@endpush
@section('content')
    <div class="benar-area">
        <div class="heading-text">
            <h1>45,945 WordPress Themes & Website Templates From $2</h1>
            <p>WordPress themes, web templates and more. Brought to you by the largest global community of creatives.</p>
            <div class="header_search">
                <div class="header_search_content">
                    <div class="header_search_form_container">
                        <form action="#" class="header_search_form clearfix text-center">
                            <input type="search" required="required" class="header_search_input" placeholder="Search for products...">
                            <button type="submit" class="header_search_button trans_300" value="Submit"><img src="assets/img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End benar -->
    <!-- week-templates -->
    <section class="week-template px fix">
        <div class="container">
            <div class="section-title">
                <h2>Our Featured html templates of the week</h2>
                <p>Every week we hand-pick some of the best new website html template from our collection. These beautiful templates are making our heads turn!</p>
            </div>
            <div class="row">
                <div class="col ">
                    <div class="templates">
                        <a href="">
                            <img src="assets/img/template/thumb.png" alt="" />
                            <h4>Dazzling</h4>
                        </a>
                    </div>
                </div>
                <div class="col no-padding">
                    <div class="templates">
                        <a href="">
                            <img src="assets/img/template/thumb.png" alt="" />
                            <h4>Dazzling</h4>
                        </a>
                    </div>
                </div>
                <div class="col no-padding">
                    <div class="templates">
                        <a href="">
                            <img src="assets/img/template/thumb.png" alt="" />
                            <h4>Dazzling</h4>
                        </a>
                    </div>
                </div>
                <div class="col no-padding">
                    <div class="templates">
                        <a href="">
                            <img src="assets/img/template/thumb.png" alt="" />
                            <h4>Dazzling</h4>
                        </a>
                    </div>
                </div>
                <div class="col no-padding">
                    <div class="templates">
                        <a href="">
                            <img src="assets/img/template/thumb.png" alt="" />
                            <h4>Dazzling</h4>
                        </a>
                    </div>
                </div>
                <div class="col no-padding">
                    <div class="templates">
                        <a href="">
                            <img src="assets/img/template/thumb.png" alt="" />
                            <h4>Dazzling</h4>
                        </a>
                    </div>
                </div>
                <div class="col no-padding">
                    <div class="templates">
                        <a href="">
                            <img src="assets/img/template/thumbnail.png" alt="" />
                            <h4>Dazzling</h4>
                        </a>
                    </div>
                </div>
                <div class="col no-padding">
                    <div class="templates">
                        <a href="">
                            <img src="assets/img/template/thumb.png" alt="" />
                            <h4>Dazzling</h4>
                        </a>
                    </div>
                </div>
                <div class="col no-padding">
                    <div class="templates">
                        <a href="">
                            <img src="assets/img/template/thumbnail (1).png" alt="" />
                            <h4>Dazzling</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End week-templates -->
    <!-- html template -->
    <section class="week-themes px fix">
        <div class="container">
            <div class="section-title">
                <h2> {{__('Free html templates')}}</h2>
                <p>Every week we hand-pick some of the best new website wordpress themes from our collection. These beautiful wordpress themes are making our heads turn!</p>
            </div>
            <div class="row">
                @foreach($posts as $post)
                <div class="col-lg-4 col-md-6 col-sm-6 col-xl-3">
                    <div class="template">
                        <a href="">
                            <img src="{{asset('storage/uploads/post/'.$post->image)}}" alt="{{$post->title}}" />
                            <h3>{!! str_limit($post->title,20) !!}</h3>
                        </a>
                        <p>{!! str_limit($post->body ,30)!!}</p>
                        {{--<ul class="post_footer">--}}
                            {{--<li>--}}
                                {{--<a href="#"><i class="ion-eye"></i></a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        <style>
                            .post-footer{display:flex;}
                            .post-footer li a {padding-left:10px}
                        </style>
                        <ul class="post-footer" style="">
                            <li "><a href="#"><i class="material-icons">{{__('comments')}}</i></a></li>
                            <li>
                                @guest
                                    <a href="javascript:void(0);" onclick="toastr.info('To add favorite list. You need to login first.','Info',{
                                        closeButton: true,
                                        progressBar: true,
                                        })">
                                        <i class="material-icons">{{__('favorite')}}</i>
                                        </i>{{$post->favorite_to_users->count()}}</a>
                                @else
                                    <a href="javascript:void(0);" onclick="document.getElementById('favorite-form-{{ $post->id }}').submit();">

                                        <i class="material-icons">{{__('favorite')}}</i>
                                        </i>{{$post->favorite_to_users->count()}}</a>
                                    <form id="favorite-form-{{$post->id}}" style="display: none;" method="POST" action="{{route('post.favorite',$post->id)}}">
                                        @csrf
                                    </form>
                                @endguest
                            </li>
                            <li 5px; "><a href="#"><i class="material-icons">{{__('visibility')}}</i>{{ $post->view_count }}</a></li>
                        </ul>
                        <a class="download" href="">READ MORE</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="html-button text-center">
                <a href="">VIEW ALL</a>
            </div>
        </div>
    </section>
    <!--End html template -->
    <hr />
    <!-- wp-themes -->
        <section class="week-themes px fix">
        <div class="container">
            <div class="section-title">
                <h2> Free Wordpress Themes</h2>
                <p>Every week we hand-pick some of the best new website wordpress themes from our collection. These beautiful wordpress themes are making our heads turn!</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xl-3">
                    <div class="theme">
                        <a href="">
                            <img src="assets/img/template/wp-img/preview-1.jpg" alt="" />
                            <h3>foodmid</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        <a class="download" href="">READ MORE</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xl-3">
                    <div class="theme">
                        <a href="">
                            <img src="assets/img/template/wp-img/preview-2.jpg" alt="" />
                            <h3>foodmid</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        <a class="download" href="">READ MORE</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xl-3">
                    <div class="theme">
                        <a href="">
                            <img src="assets/img/template/wp-img/preview-3.jpg" alt="" />
                            <h3>foodmid</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        <a class="download" href="">READ MORE</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xl-3">
                    <div class="theme">
                        <a href="">
                            <img src="assets/img/template/wp-img/preview-4.jpg" alt="" />
                            <h3>foodmid</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        <a class="download" href="">READ MORE</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xl-3">
                    <div class="theme">
                        <a href="">
                            <img src="assets/img/template/wp-img/preview-5.jpg" alt="" />
                            <h3>foodmid</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        <a class="download" href="">READ MORE</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xl-3">
                    <div class="theme">
                        <a href="">
                            <img src="assets/img/template/wp-img/preview-6.jpg" alt="" />
                            <h3>foodmid</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        <a class="download" href="">READ MORE</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xl-3">
                    <div class="theme">
                        <a href="">
                            <img src="assets/img/template/wp-img/preview-7.jpg" alt="" />
                            <h3>foodmid</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        <a class="download" href="">READ MORE</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xl-3">
                    <div class="theme">
                        <a href="">
                            <img src="assets/img/template/wp-img/preview-8.jpg" alt="" />
                            <h3>foodmid</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        <a class="download" href="">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="html-button text-center">
                <a href="">VIEW ALL</a>
            </div>
        </div>
    </section>
    <!-- End wp-themes -->
    <!-- service area -->
     <!-- START SERVICES-->
    <section class="services page-spy px" id="services">
      <div class="container">
        <div class="row">
          <!-- Start Mobile Slider Content-->
          <div class="col-lg-7 col-md-12 order-lg-7 order-md-12 rotate-inner wow fadeInLeft" data-wow-duration="1s">
            <div class="rotate-content">
              <!-- Start Slider Links-->
              <ul class="nav nav-pills mobile-nav-pills nav-stacked">
                <li class="active-icon" data-owl-item="0"><a href="#tab_a" data-toggle="pill"><i class="fas fa-life-ring"></i></a></li>
                <li data-owl-item="1"><a href="#tab_b" data-toggle="pill"><i class="lni-cloud-download"></i></a></li>
                <li data-owl-item="2"><a href="#tab_c" data-toggle="pill"><i class="lni-bar-chart"></i></a></li>
                <li data-owl-item="3"><a href="#tab_d" data-toggle="pill"><i class="lni-world"></i></a></li>
                <li data-owl-item="4"><a href="#tab_e" data-toggle="pill"><i class="lni-mobile"></i></a></li>
                <li data-owl-item="5"><a href="#tab_f" data-toggle="pill"><i class="lni-gallery"></i></a></li>
                <li data-owl-item="6"><a href="#tab_g" data-toggle="pill"><i class="lni-user"></i></a></li>
                <li data-owl-item="7"><a href="#tab_h" data-toggle="pill"><i class="lni-bulb"></i></a></li>
                <li data-owl-item="8"><a href="#tab_i" data-toggle="pill"><i class="lni-cog"></i></a></li>
                <li data-owl-item="9"><a href="#tab_j" data-toggle="pill"><i class="lni-link"></i></a></li>
                <li data-owl-item="10"><a href="#tab_k" data-toggle="pill"><i class="lni-layers"></i></a></li>
                <li data-owl-item="11"><a href="#tab_l" data-toggle="pill"><i class="lni-anchor"></i></a></li>
              </ul>
              <!-- End Slider Links-->
              <div class="tab-content">
                <!-- Start Single One-->
                <div class="tab-pane mobile-tab-pane active" id="tab_a" data-owl-item="0">
                  <div class="tab-inner"><i class="lni-support"></i>
                    <h4>Support 24/7</h4>
                  </div>
                </div>
                <!-- End Single One-->
                <!-- Start Single One-->
                <div class="tab-pane mobile-tab-pane" id="tab_b" data-owl-item="1">
                  <div class="tab-inner"><i class="lni-cloud-download"></i>
                    <h4>Easy installation</h4>
                  </div>
                </div>
                <!-- End Single One-->
                <!-- Start Single One-->
                <div class="tab-pane mobile-tab-pane" id="tab_c" data-owl-item="2">
                  <div class="tab-inner"><i class="lni-bar-chart"></i>
                    <h4>linegraph Analysis</h4>
                  </div>
                </div>
                <!-- End Single One-->
                <!-- Start Single One-->
                <div class="tab-pane mobile-tab-pane" id="tab_d" data-owl-item="3">
                  <div class="tab-inner"><i class="lni-world"></i>
                    <h4>around the world</h4>
                  </div>
                </div>
                <!-- End Single One-->
                <!-- Start Single One-->
                <div class="tab-pane mobile-tab-pane" id="tab_e" data-owl-item="4">
                  <div class="tab-inner"><i class="lni-mobile"></i>
                    <h4>Responsive Design</h4>
                  </div>
                </div>
                <!-- End Single One-->
                <!-- Start Single One-->
                <div class="tab-pane mobile-tab-pane" id="tab_f" data-owl-item="5">
                  <div class="tab-inner"><i class="lni-gallery"></i>
                    <h4>Include PSD Files</h4>
                  </div>
                </div>
                <!-- End Single One-->
                <!-- Start Single One-->
                <div class="tab-pane mobile-tab-pane" id="tab_g" data-owl-item="6">
                  <div class="tab-inner"><i class="lni-user"></i>
                    <h4>Personal Design</h4>
                  </div>
                </div>
                <!-- End Single One-->
                <!-- Start Single One-->
                <div class="tab-pane mobile-tab-pane" id="tab_h" data-owl-item="7">
                  <div class="tab-inner"><i class="lni-bulb"></i>
                    <h4>Creative Ideas</h4>
                  </div>
                </div>
                <!-- End Single One-->
                <!-- Start Single One-->
                <div class="tab-pane mobile-tab-pane" id="tab_i" data-owl-item="8">
                  <div class="tab-inner"><i class="lni-cog"></i>
                    <h4>easy to customize</h4>
                  </div>
                </div>
                <!-- End Single One-->
                <!-- Start Single One-->
                <div class="tab-pane mobile-tab-pane" id="tab_j" data-owl-item="9">
                  <div class="tab-inner"><i class="lni-link"></i>
                    <h4>HTML + PSD Files</h4>
                  </div>
                </div>
                <!-- End Single One-->
                <!-- Start Single One-->
                <div class="tab-pane mobile-tab-pane" id="tab_k" data-owl-item="10">
                  <div class="tab-inner"><i class="lni-layers"></i>
                    <h4>Lots of shapes</h4>
                  </div>
                </div>
                <!-- End Single One-->
                <!-- Start Single One-->
                <div class="tab-pane mobile-tab-pane" id="tab_l" data-owl-item="11">
                  <div class="tab-inner"><i class="lni-anchor"></i>
                    <h4>Modern Design</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 order-lg-5 order-md-12">
            <div class="feat03-slider owl-carousel owl-theme wow fadeInRight" data-wow-duration="1s">
              <!-- Start Single Item-->
              <div class="item">
                <div class="service-box"><span class="welcome">You need Support?!</span>
                  <h3>SUPPORT 24/7</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam ab id, porro unde accusamus dignissimos maxime nulla delectus qui iure explicabo perferendis neque tenetur est! Corrupti sed suscipit quia quod!    </p>
                </div>
              </div>
              <!-- End Single Item-->
              <!-- Start Single Item-->
              <div class="item">
                <div class="service-box"><span class="welcome">have you template?!</span>
                  <h3>EASY INSTALLATION</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae delectus dicta ipsa, quam culpa nam eveniet doloribus at quaerat quo, officia expedita laudantium. Incidunt fuga sint quam ducimus dolorum distinctio!</p>
                </div>
              </div>
              <!-- End Single Item-->
              <!-- Start Single Item-->
              <div class="item">
                <div class="service-box"><span class="welcome">have you Live Site?!</span>
                  <h3>LINEGRAPH ANALYSIS</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam ab id, porro unde accusamus dignissimos maxime nulla delectus qui iure explicabo perferendis neque tenetur est! Corrupti sed suscipit quia quod! </p>
                </div>
              </div>
              <!-- End Single Item-->
              <!-- Start Single Item-->
              <div class="item">
                <div class="service-box"><span class="welcome">Are you from a far place?!</span>
                  <h3>AROUND THE WORLD</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam ab id, porro unde accusamus dignissimos maxime nulla delectus qui iure explicabo perferendis neque tenetur est! Corrupti sed suscipit quia quod! </p>
                </div>
              </div>
              <!-- End Single Item-->
              <!-- Start Single Item-->
              <div class="item">
                <div class="service-box"><span class="welcome">use your site on your mobile?!</span>
                  <h3>RESPONSIVE DESIGN</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam ab id, porro unde accusamus dignissimos maxime nulla delectus qui iure explicabo perferendis neque tenetur est! Corrupti sed suscipit quia quod! </p>
                </div>
              </div>
              <!-- End Single Item-->
              <!-- Start Single Item-->
              <div class="item">
                <div class="service-box"><span class="welcome">have you PSD Files?!</span>
                  <h3>INCLUDE PSD FILES</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam ab id, porro unde accusamus dignissimos maxime nulla delectus qui iure explicabo perferendis neque tenetur est! Corrupti sed suscipit quia quod! </p>
                </div>
              </div>
              <!-- End Single Item-->
              <!-- Start Single Item-->
              <div class="item">
                <div class="service-box"><span class="welcome">need resume Design?!</span>
                  <h3>PERSONAL DESIGN</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam ab id, porro unde accusamus dignissimos maxime nulla delectus qui iure explicabo perferendis neque tenetur est! Corrupti sed suscipit quia quod! </p>
                </div>
              </div>
              <!-- End Single Item-->
              <!-- Start Single Item-->
              <div class="item">
                <div class="service-box"><span class="welcome">have you no idea?!</span>
                  <h3>CREATIVE IDEAS</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam ab id, porro unde accusamus dignissimos maxime nulla delectus qui iure explicabo perferendis neque tenetur est! Corrupti sed suscipit quia quod! </p>
                </div>
              </div>
              <!-- End Single Item-->
              <!-- Start Single Item-->
              <div class="item">
                <div class="service-box"><span class="welcome">have you need to edit?!</span>
                  <h3>EASY TO CUSTOMIZE</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam ab id, porro unde accusamus dignissimos maxime nulla delectus qui iure explicabo perferendis neque tenetur est! Corrupti sed suscipit quia quod! </p>
                </div>
              </div>
              <!-- End Single Item-->
              <!-- Start Single Item-->
              <div class="item">
                <div class="service-box"><span class="welcome">need creative template?!</span>
                  <h3>HTML + PSD FILES</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam ab id, porro unde accusamus dignissimos maxime nulla delectus qui iure explicabo perferendis neque tenetur est! Corrupti sed suscipit quia quod! </p>
                </div>
              </div>
              <!-- End Single Item-->
              <!-- Start Single Item-->
              <div class="item">
                <div class="service-box"><span class="welcome">need more templates?!</span>
                  <h3>LOTS OF SHAPES</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam ab id, porro unde accusamus dignissimos maxime nulla delectus qui iure explicabo perferendis neque tenetur est! Corrupti sed suscipit quia quod! </p>
                </div>
              </div>
              <!-- End Single Item-->
              <!-- Start Single Item-->
              <div class="item">
                <div class="service-box"><span class="welcome">Want to keep up with the times?!</span>
                  <h3>MODERN DESIGN</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam ab id, porro unde accusamus dignissimos maxime nulla delectus qui iure explicabo perferendis neque tenetur est! Corrupti sed suscipit quia quod! </p>
                </div>
              </div>
              <!-- End Single Item-->
            </div>
            <!-- End Mobile Slider-->
          </div>
        </div>
      </div>
    </section>
    <!-- END SERVICES-->
    <!-- Subscribe area -->
    <section class="Subscribe px fix">
        <div class="container">
            <div class="section-title">
                <h2>Subscribe For New Item</h2>
                <p>If you want to be the first to find out more about our colorful
                WordPress themes and html template please subscribe to our newsletter</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 p-0 text-right">
                    <div class="subscribes">
                        <input type="email" value="" name="EMAIL" class="email " id="mce-EMAIL" placeholder="email address" required="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6  p-0 text-left">
                    <div class="subscribes-btn">
                        <a href="">Subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end Subscribe area -->
    <!--End service area -->
@endsection
@push('js')

@endpush