<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="{{ asset('theme/adminbsb-materialdesign/images/user.png') }}" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="material-icons">input</i>{{ __('Sign Out') }}
                            </a>
                        </li>

                    </ul>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <!-- Main Navigation -->
                <li class="header">{{ __('model.navigation.mainNavigation') }}</li>
                <li class="active">
                    <a ref="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">perm_contact_calendar</i>
                        <span>{{ __('Reservations') }}</span>
                    </a>
                    <ul class="ml-menu">
                        @if(App\User::where('id', Auth::User()->id)->with('userType')->first()->user_type == App\Contracts\Constant::USERTYPE_INTEGER_ADMIN)
                        <li>
                            <a href="{{ route('marketplace.marketplace') }}">
                                <span>{{ __('Calendar') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('reservation.index') }}">
                                <span>{{ __('Reservations') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('reservationType.index') }}">
                                <span>{{ __('Reservation Types') }}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a ref="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">home</i>
                        <span>{{ __('Tables/Rooms') }}</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{ route('roomType.index') }}">
                                <span>{{ __('Reservation Offers') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('room.index') }}">
                                <span>{{ __('Tables/Rooms') }}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('customer.index') }}">
                        <i class="material-icons">people</i>
                        <span>{{ __('Customers') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('billing.index') }}">
                        <i class="material-icons">people</i>
                        <span>{{ __('Billings') }}</span>
                    </a>
                </li>
                @elseif(App\User::where('id', Auth::User()->id)->with('userType')->first()->user_type == App\Contracts\Constant::USERTYPE_INTEGER_CUSTOMER)
                <li>
                        <a href="{{ route('reservation.index') }}">
                            <i class="material-icons">people</i>
                            <span>{{ __('Make Reservations') }}</span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                <a href="#!">{{ config('app.name') }}</a> &copy; 2018
            </div>
            <div class="version">
                <strong>Version:</strong> {{ config('app.version') }}
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
            <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red" class="active">
                        <div class="red"></div>
                        <span>Red</span>
                    </li>
                    <li data-theme="pink">
                        <div class="pink"></div>
                        <span>Pink</span>
                    </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme="deep-purple">
                        <div class="deep-purple"></div>
                        <span>Deep Purple</span>
                    </li>
                    <li data-theme="indigo">
                        <div class="indigo"></div>
                        <span>Indigo</span>
                    </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme="light-blue">
                        <div class="light-blue"></div>
                        <span>Light Blue</span>
                    </li>
                    <li data-theme="cyan">
                        <div class="cyan"></div>
                        <span>Cyan</span>
                    </li>
                    <li data-theme="teal">
                        <div class="teal"></div>
                        <span>Teal</span>
                    </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span>
                    </li>
                    <li data-theme="light-green">
                        <div class="light-green"></div>
                        <span>Light Green</span>
                    </li>
                    <li data-theme="lime">
                        <div class="lime"></div>
                        <span>Lime</span>
                    </li>
                    <li data-theme="yellow">
                        <div class="yellow"></div>
                        <span>Yellow</span>
                    </li>
                    <li data-theme="amber">
                        <div class="amber"></div>
                        <span>Amber</span>
                    </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span>
                    </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Deep Orange</span>
                    </li>
                    <li data-theme="brown">
                        <div class="brown"></div>
                        <span>Brown</span>
                    </li>
                    <li data-theme="grey">
                        <div class="grey"></div>
                        <span>Grey</span>
                    </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span>
                    </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span>
                    </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Report Panel Usage</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Email Redirect</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Notifications</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Offline</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Location Permission</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</section>
