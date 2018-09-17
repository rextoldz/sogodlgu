 <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark {{ ($page === 'dashbord')? 'active':''  }}"href="{{ url('/admin') }}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark {{ ($page === 'events')? 'active':''  }}" href="{{ url('/admin/events') }}" aria-expanded="true"><i class="mdi mdi-calendar-multiple-check"></i><span class="hide-menu">Events</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark {{ ($page === 'barangay')? 'active':''  }}" href="{{ url('/admin/barangay') }}" aria-expanded="true"><i class="mdi mdi-settings"></i><span class="hide-menu">Barangay</span></a>
                        </li> 
                       <!--  <li> <a class="waves-effect waves-dark" href="" aria-expanded="false"><i class="mdi mdi-newspaper"></i><span class="hide-menu">News</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="" aria-expanded="false"><i class="mdi mdi-bullhorn"></i><span class="hide-menu">Annoucements</span></a>
                        </li> -->
                        <li> <a class="waves-effect waves-dark {{ ($page === 'settings')? 'active':''  }}" href="{{ url('/admin/settings') }}" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Settings</span></a>
                        </li>
                        <!-- 
                        <li> <a class="waves-effect waves-dark" href="icon-material.html" aria-expanded="false"><i class="mdi mdi-emoticon"></i><span class="hide-menu">Icons</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="map-google.html" aria-expanded="false"><i class="mdi mdi-earth"></i><span class="hide-menu">Google Map</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="pages-blank.html" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Blank Page</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="pages-error-404.html" aria-expanded="false"><i class="mdi mdi-help-circle"></i><span class="hide-menu">Error 404</span></a>
                        </li> -->
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> 
            </div>