<div class="elementor-section elementor-top-section elementor-element elementor-element-f39e0c4 elementor-section-full_width elementor-section-stretched elementor-section-content-middle elementor-section-height-default elementor-section-height-default" data-id="f39e0c4" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
              <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-93d0667 layouts-column-align-inherit layouts-section-position-none" data-id="93d0667" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="hf-elementor-layout elementor-element elementor-element-9fa835f elementor-widget elementor-widget-iqonic_logo" data-id="9fa835f" data-element_type="widget" data-widget_type="iqonic_logo.default">
                    <div class="elementor-widget-container"><a class="navbar-brand widget-logo  " href="{{url('/')}}"><img class="logo_image" src="./content/themes/streamit-theme/assets/images/ott-logo.jpeg" alt="iqonic" style="width: 50px; height: 50px;"></a></div>
                  </div>
                </div>
              </div>
              <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7d11b2e elementor-hidden-tablet elementor-hidden-mobile layouts-section-position-static layouts-column-align-inherit" data-id="7d11b2e" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="hf-elementor-layout elementor-element elementor-element-6d3a9f1 elementor-widget elementor-widget-iqonic_navigation" data-id="6d3a9f1" data-element_type="widget" data-widget_type="iqonic_navigation.default">
                    <div class="elementor-widget-container">
                      <div class="widget-nav-menu menu-hover-default menu-align-center">
                        <nav class="navbar deafult-header nav-widget navbar-light p-0 header-default-menu" aria-label="Widget menu">
                          <div class="menu-all-pages-container widget-menu-container">
                            <div class="menu-mega-menu-container">
                              <ul id="menu-mega-menu" class="sf-menu sf-js-enabled sf-arrows iq-menu">
                                <li id="menu-item-13994" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13994 menu-item-has-children megamenu-layout"><a href="{{url('/')}}"><span class="menu-line"><span class="link-title">Home</span></li>
                                <!-- <li id="menu-item-13994" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13994 menu-item-has-children megamenu-layout"><a href="{{url('/movies')}}"><span class="menu-line"><span class="link-title">Movies</span></li> -->
                              </ul>
                            </div>
                          </div>
                        </nav>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6766c4e layouts-column-align-inherit layouts-section-position-none" data-id="6766c4e" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="hf-elementor-layout elementor-element elementor-element-c4e27f9 elementor-widget__width-auto elementor-widget elementor-widget-iqonic_layouts" data-id="c4e27f9" data-element_type="widget" data-widget_type="iqonic_layouts.default">
                    <div class="elementor-widget-container"><label style="display: none;"></label></div>
                  </div>
                  <div class="hf-elementor-layout elementor-element elementor-element-2c0f451 elementor-widget__width-auto elementor-widget elementor-widget-iqonic_ajax_search" data-id="2c0f451" data-element_type="widget" data-widget_type="iqonic_ajax_search.default">
                    <div class="elementor-widget-container">
                      <div class="iq-ajax-search iq-ajax-search-2"><a href="javascript:void(0);" class="search-toggle device-search active"><i aria-hidden="true" class="fa fa-search"></i></a>
                        <div class="search-box iq-search-bar d-search active">
                          <form method="get" class="search-form search__form" action="#" autocomplete="off">
                            <div class="iq-form-fields"><input type="search" id="searchInput" class="search-field search__input" placeholder="Search" value="" name="s" data-search-style="style-2"><input type="hidden" name="ajax_search" value="true"><button type="submit" class="search-submit"><i class="fa fa-search" aria-hidden="true"></i><span class="screen-reader-text">Search</span></button></div>
                            <div class="search_result_history"></div>
                            <div class="datafetch"></div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="hf-elementor-layout elementor-element elementor-element-b6af09a elementor-widget__width-auto elementor-widget elementor-widget-shortcode" data-id="b6af09a" data-element_type="widget" data-widget_type="shortcode.default">
                    <div class="elementor-widget-container">
                      <div class="css_prefix-notification notification-shortcode"><a href="{{route('user.transcations')}}" class="notification-wrapper"><i class="fas fa-bell"></i><span class="notification-count"></span></a></div>
                      <div class="elementor-shortcode"></div>
                    </div>
                  </div>
                  <div class="hf-elementor-layout elementor-element elementor-element-853448b elementor-widget__width-auto elementor-widget elementor-widget-iqonic_layout_user" data-id="853448b" data-element_type="widget" data-widget_type="iqonic_layout_user.default">
                    <div class="elementor-widget-container">
                      <div class="iq-users-settings user-btn nav-item nav-icon header-user-rights iq-usermenu-dropdown">
                        <div class="nav-item nav-icon header-user-rights"> @if(!\Auth::check()) <a href="{{route('login')}}" class="iq-user-dropdown search-toggle p-0 d-flex align-items-center active" data-toggle="search-toggle" id="btn-user-list"><span class="iq-avatar style-1 "><i aria-hidden="true" alt="user" class="far fa-user"></i></span></a> @else {{\Auth::user()->name}} @endif <div class="iq-sub-dropdown iq-user-dropdown-style-2">
                            <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="hf-elementor-layout elementor-element elementor-element-79f5f41 elementor-widget__width-auto elementor-hidden-desktop elementor-view-default elementor-widget elementor-widget-icon" data-id="79f5f41" data-element_type="widget" data-widget_type="icon.default">
                    <div class="elementor-widget-container">
                      <div class="elementor-icon-wrapper"><a class="elementor-icon" href="#sideheader"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <rect width="4" height="4" fill="white"></rect>
                            <rect x="6" width="4" height="4" fill="white"></rect>
                            <rect x="12" width="4" height="4" fill="white"></rect>
                            <rect y="6" width="4" height="4" fill="white"></rect>
                            <rect x="6" y="6" width="4" height="4" fill="white"></rect>
                            <rect x="12" y="6" width="4" height="4" fill="white"></rect>
                            <rect y="12" width="4" height="4" fill="white"></rect>
                            <rect x="6" y="12" width="4" height="4" fill="white"></rect>
                            <rect x="12" y="12" width="4" height="4" fill="white"></rect>
                          </svg></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <div class="has-sticky header-default-hidden default-hidden-enable elementor-section elementor-top-section elementor-element elementor-element-80fcc25 elementor-section-full_width elementor-section-stretched elementor-section-content-middle elementor-section-height-default elementor-section-height-default" data-id="80fcc25" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
              <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ebcd05f layouts-column-align-inherit layouts-section-position-none" data-id="ebcd05f" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="hf-elementor-layout elementor-element elementor-element-02c80ed elementor-widget elementor-widget-iqonic_logo" data-id="02c80ed" data-element_type="widget" data-widget_type="iqonic_logo.default">
                    <div class="elementor-widget-container"><a class="navbar-brand widget-logo  " href="../pages/index.html"><img class="logo_image" src="../content/themes/streamit-theme/assets/images/logo.png" alt="iqonic"></a></div>
                  </div>
                </div>
              </div>
              <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-a8928a8 elementor-hidden-tablet elementor-hidden-mobile layouts-section-position-static layouts-column-align-inherit" data-id="a8928a8" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="hf-elementor-layout elementor-element elementor-element-6e1734f elementor-widget elementor-widget-iqonic_navigation" data-id="6e1734f" data-element_type="widget" data-widget_type="iqonic_navigation.default">
                    <div class="elementor-widget-container">
                      <div class="widget-nav-menu menu-hover-default menu-align-center">
                        <nav class="navbar deafult-header nav-widget navbar-light p-0 header-default-menu" aria-label="Widget menu">
                          <div class="menu-all-pages-container widget-menu-container">
                            <div class="menu-mega-menu-container">
                              <ul id="menu-mega-menu-1" class="sf-menu sf-js-enabled sf-arrows iq-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13994 menu-item-has-children megamenu-layout"><a href="{{url('/')}}"><span class="menu-line"><span class="link-title">Home</span></li>
                                <!-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13994 menu-item-has-children megamenu-layout"><a href="../pages/Movie.html"><span class="menu-line"><span class="link-title">Movies</span></li> -->
                              </ul>
                            </div>
                          </div>
                        </nav>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-262e3a5 layouts-column-align-inherit layouts-section-position-none" data-id="262e3a5" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="hf-elementor-layout elementor-element elementor-element-d68074a elementor-widget__width-auto elementor-widget elementor-widget-iqonic_layouts" data-id="d68074a" data-element_type="widget" data-widget_type="iqonic_layouts.default">
                    <div class="elementor-widget-container"><label style="display: none;"></label></div>
                  </div>
                  <div class="hf-elementor-layout elementor-element elementor-element-8fc566f elementor-widget__width-auto elementor-widget elementor-widget-iqonic_ajax_search" data-id="8fc566f" data-element_type="widget" data-widget_type="iqonic_ajax_search.default">
                    <div class="elementor-widget-container">
                      <div class="iq-ajax-search iq-ajax-search-2"><a href="javascript:void(0);" class="search-toggle device-search active"><i aria-hidden="true" class="fa fa-search"></i></a>
                        <div class="search-box iq-search-bar d-search active">
                          <form method="get" class="search-form search__form" action="#" autocomplete="off">
                            <div class="iq-form-fields"><input type="search" id="searchInput" class="search-field search__input" placeholder="Search" value="" name="s" data-search-style="style-2"><input type="hidden" name="ajax_search" value="true"><button type="submit" class="search-submit"><i class="fa fa-search" aria-hidden="true"></i><span class="screen-reader-text">Search</span></button></div>
                            <div class="search_result_history"></div>
                            <div class="datafetch"></div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="hf-elementor-layout elementor-element elementor-element-5665b35 elementor-widget__width-auto elementor-widget elementor-widget-shortcode" data-id="5665b35" data-element_type="widget" data-widget_type="shortcode.default">
                    <div class="elementor-widget-container">
                      <div class="css_prefix-notification notification-shortcode"><a href="{{route('user.transcations')}}" class="notification-wrapper"><i class="fas fa-bell"></i><span class="notification-count"></span></a></div>
                      <div class="elementor-shortcode"></div>
                    </div>
                  </div>
                  <div class="hf-elementor-layout elementor-element elementor-element-98af34a elementor-widget__width-auto elementor-widget elementor-widget-iqonic_layout_user" data-id="98af34a" data-element_type="widget" data-widget_type="iqonic_layout_user.default">
                    <div class="elementor-widget-container">
                      <div class="iq-users-settings user-btn nav-item nav-icon header-user-rights iq-usermenu-dropdown">
                            <div class="nav-item nav-icon header-user-rights"> @if(!\Auth::check()) <a href="{{route('login')}}" class="iq-user-dropdown search-toggle p-0 d-flex align-items-center active" data-toggle="search-toggle" id="btn-user-list"><span class="iq-avatar style-1 "><i aria-hidden="true" alt="user" class="far fa-user"></i></span></a> @else {{\Auth::user()->name}} @endif <div class="iq-sub-dropdown iq-user-dropdown-style-2">
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="hf-elementor-layout elementor-element elementor-element-3a84b3f elementor-widget__width-auto elementor-hidden-desktop elementor-view-default elementor-widget elementor-widget-icon" data-id="3a84b3f" data-element_type="widget" data-widget_type="icon.default">
                    <div class="elementor-widget-container">
                      <div class="elementor-icon-wrapper"><a class="elementor-icon" href="#sideheader"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <rect width="4" height="4" fill="white"></rect>
                            <rect x="6" width="4" height="4" fill="white"></rect>
                            <rect x="12" width="4" height="4" fill="white"></rect>
                            <rect y="6" width="4" height="4" fill="white"></rect>
                            <rect x="6" y="6" width="4" height="4" fill="white"></rect>
                            <rect x="12" y="6" width="4" height="4" fill="white"></rect>
                            <rect y="12" width="4" height="4" fill="white"></rect>
                            <rect x="6" y="12" width="4" height="4" fill="white"></rect>
                            <rect x="12" y="12" width="4" height="4" fill="white"></rect>
                          </svg></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>