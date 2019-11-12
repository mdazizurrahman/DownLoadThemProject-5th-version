        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</div>
                    <div class="email">{{Auth::user()->email}}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">{{__('keyboard_arrow_down')}}</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">{{__('person')}}</i>{{__('Profile')}}</a></li>
                            <li role="separator" class="divider"></li>

                            <li>
                                 <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        
                                    <i class="material-icons">{{__('input')}}</i>{{ __('Logout') }}</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">{{__('DownloadTemplate Amdin')}}</li>
                    @if(Request::is('admin*'))
                    <li class="{{Request::is('admin/dashboard')? 'active' : ''}}">
                        <a href="{{route('admin.dashboard')}}">
                            <i class="material-icons">{{__('dashboard')}}</i>
                            <span>{{__('Home')}}</span>
                        </a>
                    </li>
                    <li class="{{Request::is('admin/tag*')? 'active' : ''}}">
                        <a href="{{route('admin.tag.index')}}">
                            <i class="material-icons">{{__('label')}}</i>
                            <span>{{__('Tag')}}</span>
                        </a>
                    </li>
                    <li class="{{Request::is('admin/category*')? 'active' : ''}}">
                        <a href="{{route('admin.category.index')}}">
                            <i class="material-icons">{{__('library_books')}}</i>
                            <span>{{__('Category')}}</span>
                        </a>
                    </li>
                    <li class="{{Request::is('admin/post*')? 'active' : ''}}">
                        <a href="{{route('admin.post.index')}}">
                            <i class="material-icons">{{__('apps')}}</i>
                            <span>{{__('Posts')}}</span>
                        </a>
                    </li>
                    <li class="{{Request::is('admin/pending/post')? 'active' : ''}}">
                        <a href="{{route('admin.post.pending')}}">
                            <i class="material-icons">{{__('apps')}}</i>
                            <span>{{__('Pending Posts')}}</span>
                        </a>
                    </li>
                    <li class="{{Request::is('admin/subscriber')? 'active' : ''}}">
                        <a href="{{route('admin.subscriber.index')}}">
                            <i class="material-icons">{{__('subscriptions')}}</i>
                            <span>{{__('Subscribers')}}</span>
                        </a>
                    </li>
                        <li class="{{Request::is('admin/setting*')? 'active' : ''}}">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">{{__('settings')}}</i>
                                <span>{{__('Settings')}}</span>
                            </a>
                            <ul class="ml-menu">
                                <li class="{{Request::is('admin/setting')? 'active' : '' }}">
                                    <a href="{{route('admin.settings.settings')}}">
                                        <i class="material-icons">{{__('person')}}</i>{{__('Profile')}}</a>

                                </li>
                                <li>
                                    <a href="pages/tables/jquery-datatable.html">Jquery Datatables</a>
                                </li>
                                <li>
                                    <a href="pages/tables/editable-table.html">Editable Tables</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                   @if(Auth::check() && Auth::user()->role->id == 2)
                        @if(Request::is('user*'))
                            <li class="{{Request::is('user/dashboard') ?'active' : ''}}">
                                <a href="{{route('user.dashboard')}}">
                                    <i class="material-icons">{{__('dashboard')}}</i>
                                    <span>{{__('Home')}}</span>
                                </a>
                            </li>

                            <li class="{{Request::is('user/post*')? 'active' : ''}}">
                                <a href="{{route('user.post.index')}}">
                                    <i class="material-icons">{{__('apps')}}</i>
                                    <span>{{__('Posts')}}</span>
                                </a>
                            </li>
                            <li class="{{Request::is('user/setting*')? 'active' : ''}}">
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">{{__('settings')}}</i>
                                    <span>{{__('Settings')}}</span>
                                </a>
                                <ul class="ml-menu">
                                    <li class="{{Request::is('user/setting')? 'active' : '' }}">
                                        <a href="{{route('user.settings.settings')}}">
                                            <i class="material-icons">{{__('person')}}</i>{{__('Profile')}}</a>

                                    </li>

                                </ul>
                            </li>
                        @endif
                    @endif
                    
                    <hr>
                    <li>
                        <a class="header" href="javascript:void(0);">
                            <i class="material-icons col-light-blue">{{__('donut_large')}}</i>
                            <span>{{__('System')}}</span>
                        </a>
                    </li>
                    <li>
                         <a style="color:black;font-weight: bold; font-size: 20px;" class="dropdown-item btn btn-danger" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                
                            <i class="material-icons" style="margin-right: 10px;">{{__('input')}}</i>{{ __('Logout') }}</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                   </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; {{__('2019- 2020')}}<a href="javascript:void(0);">{{__('Develop By Md Azizur Rahman')}}</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>