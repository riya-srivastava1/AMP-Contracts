<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar app-sidebar-transparent">
    <!-- BEGIN scrollbar -->
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <!-- BEGIN menu -->
        <div class="menu">
            <div class="menu">
                <div class="menu-search mb-n3">
                  <input type="text" class="form-control" placeholder="Sidebar menu filter..." data-sidebar-search="true">
                </div>
              </div>
            <div id="appSidebarProfileMenu" class="collapse">
                <div class="menu-item pt-5px">
                    <a href="javascript:;" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-cog"></i></div>
                        <div class="menu-text">Settings</div>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="javascript:;" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-pencil-alt"></i></div>
                        <div class="menu-text"> Send Feedback</div>
                    </a>
                </div>
                <div class="menu-item pb-5px">
                    <a href="javascript:;" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-question-circle"></i></div>
                        <div class="menu-text"> Helps</div>
                    </a>
                </div>
                <div class="menu-divider m-0"></div>
            </div>
            <div class="menu-header">Navigation</div>

            <div class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="menu-link">
                    <div class="menu-icon">
                        <i class="fas fa-circle-user"></i>
                    </div>
                    <div class="menu-text">Users</div>
                </a>
            </div>
            <div class="menu-item {{ request()->routeIs('testimonial.index') ? 'active' : '' }}">
                <a href="{{ route('testimonial.index') }}" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-align-left"></i>
                    </div>
                    <div class="menu-text">Testimonials</div>
                </a>
            </div>
            <div class="menu-item {{ request()->routeIs('social.index') ? 'active' : '' }}">
                <a href="{{ route('social.index') }}" class="menu-link">
                    <div class="menu-icon">
                        <i class="fab fa-linkedin"></i>
                    </div>
                    <div class="menu-text">Social Media</div>
                </a>
            </div>
            <div class="menu-item {{ request()->routeIs('galleryimage.index') ? 'active' : '' }}">
                <a href="{{ route('galleryimage.index') }}" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-image"></i>
                    </div>
                    <div class="menu-text">Gallery Images</div>
                </a>
            </div>
            <div class="menu-item {{ request()->routeIs('footercontact.index') ? 'active' : '' }}">
                <a href="{{ route('footercontact.index') }}" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-list-ol"></i>
                    </div>
                    <div class="menu-text">Footer Contact Us</div>
                </a>
            </div>
            <div class="menu-item {{ request()->routeIs('news.index') ? 'active' : '' }}">
                <a href="{{ route('news.index') }}" class="menu-link">
                    <div class="menu-icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <div class="menu-text">Newsletter</div>
                </a>
            </div>
            <div class="menu-item {{ request()->routeIs('contact.index') ? 'active' : '' }}">
                <a href="{{ route('contact.index') }}" class="menu-link">
                    <div class="menu-icon">
                        <i class="fas fa-user-pen"></i>
                    </div>
                    <div class="menu-text">Contact Us</div>
                </a>
            </div>
            <div class="menu-item {{ request()->routeIs('page.index') ? 'active' : '' }}">
                <a href="{{ route('page.index') }}" class="menu-link">
                    <div class="menu-icon">
                        <i class="fas fa-folder-plus"></i>
                    </div>
                    <div class="menu-text">Add Pages</div>
                </a>
            </div>
            <div class="menu-item {{ request()->routeIs('project.index') ? 'active' : '' }}">
                <a href="{{ route('project.index') }}" class="menu-link">
                    <div class="menu-icon">
                        <i class="fas fa-folder-plus"></i>
                    </div>
                    <div class="menu-text">Projects</div>
                </a>
            </div>
            <!-- BEGIN minify-button -->
            <div class="menu-item d-flex">
                <a href="javascript:;" class="app-sidebar-minify-btn ms-auto" data-toggle="app-sidebar-minify"><i
                        class="fa fa-angle-double-left"></i></a>
            </div>
            <!-- END minify-button -->
        </div>
        <!-- END menu -->
    </div>
    <!-- END scrollbar -->
</div>
<div class="app-sidebar-bg"></div>
<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile"
        class="stretched-link"></a></div>
<!-- END #sidebar -->
