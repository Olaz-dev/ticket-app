<nav id="sidebar" class="sidebar-wrapper sidebar-dark">
                <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
                    <div class="sidebar-brand">
                        <a href="{{ URL('dashboard')  }}">
                            <img src="{{url('assets/images/logo-dark.png')}}" height="24" class="logo-light-mode" alt="">
                            <img src="{{url('assets/images/logo-light.png')}}" height="24" class="logo-dark-mode" alt="">
                            <span class="sidebar-colored">
                                <img src="{{url('assets/images/logo-light.png')}}" height="24" alt="">
                            </span>
                        </a>
                    </div>
                    
                    <ul class="sidebar-menu">
                        <li><a href="{{ URL('dashboard')  }}"><i class="ti ti-home me-2"></i>Dashboard</a></li>
                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="ti ti-browser me-2"></i>Tickets</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="{{ url('ticket') }}">All Tickets</a></li>
                                    <li><a href="index-sidebar-light.html">Assigned Tickets</a></li>
                                    <li><a href="index-rtl.html">Opened Tickets</a></li>
                                    <li><a href="index-rtl-dark.html">Closed Tickets</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="ti ti-browser me-2"></i>Users</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="{{ url('user') }}">All user</a></li>
                                    <li><a href="index-sidebar-light.html">Assigned Tickets</a></li>
                                    <li><a href="index-rtl.html">Opened Tickets</a></li>
                                    <li><a href="index-rtl-dark.html">Closed Tickets</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="{{ url('notifications') }}"><i class="ti ti-browser me-2"></i>Tickets Logs</a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="ti ti-apps me-2"></i>Categories</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="{{ url('category/create') }}">Add New Category</a></li>
                                    <li><a href="{{ url('category') }}">View Added Categories</a></li>
                                    <li><a href="calendar.html">Edit Categories</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="ti ti-apps me-2"></i>Labels</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="{{ url('label/create') }}">Add New Label</a></li>
                                    <li><a href="{{ url('label') }}">View Added Labels</a></li>
                                    <li><a href="calendar.html">Edit Labels</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="ti ti-apps me-2"></i>Priorities</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="{{ url('priority/create') }}">Add New Priority</a></li>
                                    <li><a href="{{ url('priority') }}">View Added Priority</a></li>
                                    <li><a href="calendar.html">Edit Priority</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="ti ti-user me-2"></i>User Profile</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="profile-setting.html">Profile Setting</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="ti ti-brand-gravatar me-2"></i>Blog</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="blog.html">Blogs</a></li>
                                    <li><a href="blog-detail.html">Blog Detail</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="ti ti-shopping-cart me-2"></i>E-Commerce</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="product-detail.html">Shop Detail</a></li>
                                    <li><a href="shop-cart.html">Shopcart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="ti ti-camera me-2"></i>Gallery</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="gallery-one.html">Gallary One</a></li>
                                    <li><a href="gallery-two.html">Gallery Two</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="ti ti-file-info me-2"></i>Pages <span class="badge bg-success ms-1">Added</span></a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="faqs.html">FAQs</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="timeline.html">Timeline <span class="badge bg-warning">New</span></a></li>
                                    <li><a href="team.html">Team <span class="badge bg-warning">New</span></a></li>
                                    <li><a href="blank-page.html">Blank Page</a></li>
                                    <li><a href="components.html">Components</a></li>
                                    <li><a href="privacy.html">Privacy Policy</a></li>
                                    <li><a href="terms.html">Term & Condition</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="ti ti-mail-opened me-2"></i>Email Template</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="email-confirmation.html">Confirmation</a></li>
                                    <li><a href="email-password-reset.html">Reset Password</a></li>
                                    <li><a href="email-alert.html">Alert</a></li>
                                    <li><a href="email-invoice.html">Invoice</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="ti ti-file-invoice me-2"></i>Invoice</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="invoice-list.html">Invoice List</a></li>
                                    <li><a href="invoice.html">Invoice Preview</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="ti ti-login me-2"></i>Authentication</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="login-cover.html">Login Two</a></li>
                                    <li><a href="signup.html">Signup</a></li>
                                    <li><a href="signup-cover.html">Signup Two</a></li>
                                    <li><a href="reset-password.html">Reset Password</a></li>
                                    <li><a href="reset-password-cover.html">Reset Password Two</a></li>
                                    <li><a href="lock-screen.html">Lockscreen</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="ti ti-license me-2"></i>Miscellaneous</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="comingsoon.html">Comingsoon</a></li>
                                    <li><a href="maintenance.html">Maintenance</a></li>
                                    <li><a href="error.html">Error</a></li>
                                    <li><a href="thankyou.html">Thank You</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <!-- sidebar-menu  -->
                </div>
                <!-- Sidebar Footer -->
                <ul class="sidebar-footer list-unstyled mb-0">
                    <li class="list-inline-item mb-0">
                        <a href="https://1.envato.market/landrick" target="_blank" class="btn btn-icon btn-soft-light"><i class="ti ti-shopping-cart"></i></a> <small class="text-muted ms-1">Buy Now</small>
                    </li>
                </ul>
                <!-- Sidebar Footer -->
            </nav>