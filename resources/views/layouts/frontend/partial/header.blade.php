    <!-- HEADER -->
    <!-- TOP BAR -->
    <div class="top_bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <div class="top_bar_contact_item">
                        <ul>
                            <li><i class="icofont-ui-dial-phone"></i>01960343941</li>
                            <li>
                                <i class="icofont-envelope-open icon"></i>
                                <a href="mailto:downloadtemplate@gmail.com">downloadtemplate@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-lg-7">
                    <div class="top_bar_content ml-auto">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="top_bar_menu">
                                    <ul class="standard_dropdown top_bar_dropdown">
                                        <li>
                                            <a href="#">{{__('English')}}<i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="#"> {{ __('Italian') }}</a></li>
                                                <li><a href="#">{{ __('Spanish') }}</a></li>
                                                <li><a href="#">{{ __('Japanese') }}</a></li>
                                                <li><a href="#">{{__('Bangla')}}</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">$ {{__('US dollar')}}<i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="#">{{__('EUR Euro')}}</a></li>
                                                <li><a href="#">{{__('GBP British Pound')}}</a></li>
                                                <li><a href="#">{{('JPY Japanese Yen')}}</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                             @guest
                            <div class="col-md-6 col-sm-12">
                                <div class="top_bar_user">
                                    <div class="user_icon"><i class="icofont-user-alt-3"></i></div>
                                    <div><a href="{{ route('register') }}">{{__('Register')}}</a></div>
                                    <div><a href="{{ route('login') }}">{{('Sign in')}}</a></div>
                                </div>
                            </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </div>
    <!-- END TOP BAR -->
    <!-- model -->
    <!-- Button trigger modal -->

{{--     <!-- Modal -->--}}
    {{--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
      {{--<div class="modal-dialog modal-dialog-centered" role="document">--}}
        {{--<div class="modal-content">--}}
          {{--<div class="modal-header">--}}
            {{--<h5 class="modal-title" id="exampleModalLongTitle">Register Forms</h5>--}}
            {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
              {{--<span aria-hidden="true">&times;</span>--}}
            {{--</button>--}}
          {{--</div>--}}
          {{--<div class="modal-body">--}}
            {{--<div id="register-form">--}}
                {{--<h3 class="log-title">Register</h3>--}}
                {{--<div class="form-group">--}}
                    {{--<input type="text" class="form-control" id="email" placeholder="Email" required data-error="*Please fill out this field">--}}
                    {{--<div class="help-block with-errors"></div>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<input type="email" class="form-control" id="username" placeholder="Username" required>--}}
                    {{--<div class="help-block with-errors"></div>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<input type="text" class="form-control" id="password" placeholder="Password" required data-error="*Please fill out this field">--}}
                    {{--<div class="help-block with-errors"></div>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<input type="email" class="form-control" id="cpassword" placeholder="Confirm Password" required>--}}
                    {{--<div class="help-block with-errors"></div>--}}
                {{--</div>--}}
                {{--<!-- log-line -->--}}
                {{--<div class="log-line reg-form-1 no-margin">--}}
                    {{--<div class="pull-left">--}}
                        {{--<div class="checkbox checkbox-primary space-bottom">--}}
                            {{--<label class="hide"><input type="checkbox"></label>--}}
                            {{----}}
                            {{--<label for="checkbox2"><span><a href="#">Terms & Conditions</a></span></label>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="pull-right">--}}
                        {{--<button type="submit" id="reg-submit" class="btn btn-md btn-success-filled btn-log">Register</button>--}}
                        {{--<div id="msgSubmit" class="h3 text-center hidden"></div>--}}
                        {{--<div class="clearfix"></div>--}}
                    {{--</div>--}}
                {{--</div><!-- / log-line -->--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}
    {{--<!-- Button trigger modal -->--}}
        {{--<!-- Modal -->--}}
        {{--<div class="modal fade" id="exampleModallogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
          {{--<div class="modal-dialog modal-dialog-centered" role="document">--}}
            {{--<div class="modal-content">--}}
              {{--<div class="modal-header">--}}
                {{--<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                  {{--<span aria-hidden="true">&times;</span>--}}
                {{--</button>--}}
              {{--</div>--}}
              {{--<div class="modal-body">--}}
                {{--<div id="login-form">--}}
                    {{--<h3 class="log-title">Log In</h3>--}}
                    {{--<div class="form-group">--}}
                        {{--<input type="text" class="form-control" id="username" placeholder="Username" required data-error="*Please fill out this field">--}}
                        {{--<div class="help-block with-errors"></div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<input type="email" class="form-control" id="password" placeholder="Password" required>--}}
                        {{--<div class="help-block with-errors"></div>--}}
                    {{--</div>--}}
                    {{--<!-- log-line -->--}}
                    {{--<div class="log-line">--}}
                        {{--<div class="pull-left">--}}
                            {{--<div class="checkbox checkbox-primary space-bottom">--}}
                                {{--<label class="hide"><input type="checkbox"></label>--}}
                                {{----}}
                                {{--<label for="checkbox1"><span>Remember Me</span></label>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="pull-right">--}}
                            {{--<button type="submit" id="log-submit" class="btn btn-md btn-success-filled btn-log">Log In</button>--}}
                            {{--<div id="msgSubmit" class="h3 text-center hidden"></div>--}}
                            {{--<div class="clearfix"></div>--}}
                        {{--</div>--}}
                    {{--</div><!-- / log-line -->--}}
                    {{--<a href="#" class="forgot-password">Forgot your Password?</a>--}}
                {{--</div>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
    {{--<!-- model --> --}}
    <div class="top_logo_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-logo">
                        <a href="#"><img src="assets/img/logo/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu Area -->
    <div class="main-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="main-menu navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link active">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Super Deals<i class="icofont-simple-down"></i></a>
                                <ul>
                                    <li>
                                        <a class="nav-link" href="#">Menu Item<i class="icofont-simple-right"></i></a>
                                        <ul>
                                            <li><a class="nav-link" href="#">Menu Item</a></li>
                                            <li><a class="nav-link" href="#">Menu Item</a></li>
                                            <li><a class="nav-link" href="#">Menu Item</a></li>
                                            <li><a class="nav-link" href="#">Menu Item</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="nav-link" href="#">Menu Item</a></li>
                                    <li><a class="nav-link" href="#">Menu Item</a></li>
                                    <li><a class="nav-link" href="#">Menu Item</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Featured Brands<i class="icofont-simple-down"></i></a>
                                <ul>
                                    <li>
                                        <a class="nav-link" href="#">Menu Item<i class="icofont-simple-right"></i></a>
                                        <ul>
                                            <li><a class="nav-link" href="#">Menu Item</a></li>
                                            <li><a class="nav-link" href="#">Menu Item</a></li>
                                            <li><a class="nav-link" href="#">Menu Item</a></li>
                                            <li><a class="nav-link" href="#">Menu Item</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="nav-link" href="#">Menu Item</a></li>
                                    <li><a class="nav-link" href="#">Menu Item</a></li>
                                    <li><a class="nav-link" href="#">Menu Item</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Pages<i class="icofont-simple-down"></i></a>
                                <ul>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="product.html">Product</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog_single.html">Blog Post</a></li>
                                    <li><a href="regular.html">Regular Post</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog.html">Blog</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul>         
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Menu Area --> 
    <!-- HEADER -->
