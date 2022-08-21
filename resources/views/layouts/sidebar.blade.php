<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ route('home') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('') }}assets/images/logo-light.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('') }}assets/images/logo-dark.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ route('home') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('') }}assets/images/logo-light.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('') }}assets/images/logo-light.png" alt="" height="50">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('home') ? 'active' : '' }}"
                       href="{{ route('home') }}">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                </li>
                <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('user.add') || request()->routeIs('user.all') || request()->routeIs('user.edit') || request()->routeIs('user.free') || request()->routeIs('user.premium') ? 'collapsed active' : '' }}"
                       href="#sidebarApps" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-user-line"></i> <span data-key="t-apps">Users</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->routeIs('user.add') || request()->routeIs('user.all') || request()->routeIs('user.edit') || request()->routeIs('user.free') || request()->routeIs('user.premium') ? 'show' : '' }}"
                         id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('user.add') }}"
                                   class="nav-link {{ request()->routeIs('user.add') ? 'active' : '' }}"
                                   data-key="t-chat">Add New User</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('user.all') }}" class="nav-link {{ request()->routeIs('user.all') ? 'active' : '' }}" data-key="t-calendar">
                                    All Users
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('user.free') }}" class="nav-link {{ request()->routeIs('user.free') ? 'active' : '' }}" data-key="t-chat">Free Users</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('user.premium') }}" class="nav-link {{ request()->routeIs('user.premium') ? 'active' : '' }}" data-key="t-chat">Premium Users</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('carrot.add') || request()->routeIs('carrot.all') || request()->routeIs('carrot.edit') ? 'collapsed active' : '' }}"
                       href="#sidebarCarrots" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarCarrots">
                        <i class="ri-gallery-line"></i> <span data-key="t-apps">Carrots</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->routeIs('carrot.add') || request()->routeIs('carrot.all') || request()->routeIs('carrot.edit') ? 'show' : '' }}"
                         id="sidebarCarrots">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('carrot.add') }}"
                                   class="nav-link {{ request()->routeIs('carrot.add') ? 'active' : '' }}"
                                   data-key="t-chat">Add New Carrot</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('carrot.all') }}" class="nav-link {{ request()->routeIs('carrot.all') ? 'active' : '' }}" data-key="t-calendar">
                                    All Carrots
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('category.add') || request()->routeIs('category.all') || request()->routeIs('category.edit') ? 'collapsed active' : '' }}"
                       href="#sidebarCategory" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarCategory">
                        <i class="ri-image-add-line"></i> <span data-key="t-apps">Categories</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->routeIs('category.add') || request()->routeIs('category.all') || request()->routeIs('category.edit') ? 'show' : '' }}"
                         id="sidebarCategory">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('category.add') }}"
                                   class="nav-link {{ request()->routeIs('category.add') ? 'active' : '' }}"
                                   data-key="t-chat">Add New Category</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('category.all') }}" class="nav-link {{ request()->routeIs('category.all') ? 'active' : '' }}" data-key="t-calendar">
                                    All Category
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('gif.add') || request()->routeIs('gif.all') || request()->routeIs('gif.edit') ? 'collapsed active' : '' }}"
                       href="#sidebarGif" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarGif">
                        <i class="ri-image-edit-fill"></i> <span data-key="t-apps">Gifs</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->routeIs('gif.add') || request()->routeIs('gif.all') || request()->routeIs('gif.edit') ? 'show' : '' }}"
                         id="sidebarGif">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('gif.add') }}"
                                   class="nav-link {{ request()->routeIs('gif.add') ? 'active' : '' }}"
                                   data-key="t-chat">Add New Gif</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('gif.all') }}" class="nav-link {{ request()->routeIs('gif.all') ? 'active' : '' }}" data-key="t-calendar">
                                    All Gif
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('life-and-job.add') || request()->routeIs('life-and-job.all') || request()->routeIs('life-and-job.edit') ? 'collapsed active' : '' }}"
                       href="#sidebarJobs" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarJobs">
                        <i class="ri-user-search-line"></i> <span data-key="t-apps">Life and Jobs</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->routeIs('life-and-job.add') || request()->routeIs('life-and-job.all') || request()->routeIs('life-and-job.edit') ? 'show' : '' }}"
                         id="sidebarJobs">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('life-and-job.add') }}"
                                   class="nav-link {{ request()->routeIs('life-and-job.add') ? 'active' : '' }}"
                                   data-key="t-chat">Add New Life and Job</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('life-and-job.all') }}" class="nav-link {{ request()->routeIs('life-and-job.all') ? 'active' : '' }}" data-key="t-calendar">
                                    All Life and Job
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('benefit.add') || request()->routeIs('benefit.all') || request()->routeIs('benefit.edit') ? 'collapsed active' : '' }}"
                       href="#sidebarBenefit" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarBenefit">
                        <i class="ri-hand-heart-line"></i> <span data-key="t-apps">Benefits</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->routeIs('benefit.add') || request()->routeIs('benefit.all') || request()->routeIs('benefit.edit') ? 'show' : '' }}"
                         id="sidebarBenefit">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('benefit.add') }}"
                                   class="nav-link {{ request()->routeIs('benefit.add') ? 'active' : '' }}"
                                   data-key="t-chat">Add New Benefit</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('benefit.all') }}" class="nav-link {{ request()->routeIs('benefit.all') ? 'active' : '' }}" data-key="t-calendar">
                                    All Benefit
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('level.add') || request()->routeIs('level.all') || request()->routeIs('level.edit') || request()->routeIs('question.all') || request()->routeIs('question.add') || request()->routeIs('question.edit') ? 'collapsed active' : '' }}"
                       href="#sidebarQuiz" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarQuiz">
                        <i class="ri-questionnaire-line"></i> <span data-key="t-apps">Quiz</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->routeIs('level.add') || request()->routeIs('level.all') || request()->routeIs('level.edit') || request()->routeIs('question.all') || request()->routeIs('question.add') || request()->routeIs('question.edit') ? 'show' : '' }}"
                         id="sidebarQuiz">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('level.all') }}" class="nav-link {{ request()->routeIs('level.add') || request()->routeIs('level.all') || request()->routeIs('level.edit') || request()->routeIs('question.all') || request()->routeIs('question.add') || request()->routeIs('question.edit') ? 'active' : '' }}" data-key="t-calendar">
                                    Manage Levels
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('learn-category.add') || request()->routeIs('learn-category.all') || request()->routeIs('learn-category.edit') || request()->routeIs('learn-category.all') || request()->routeIs('learn-subcategory.add') || request()->routeIs('learn-subcategory.all') || request()->routeIs('learn-subcategory.edit')  || request()->routeIs('learn-content.add') || request()->routeIs('learn-content.all') || request()->routeIs('learn-content.edit') ? 'collapsed active' : '' }}"
                       href="#sidebarLearn" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarLearn">
                        <i class="ri-contacts-book-line"></i> <span data-key="t-apps">Learn</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->routeIs('learn-category.add') || request()->routeIs('learn-category.all') || request()->routeIs('learn-category.edit') || request()->routeIs('learn-subcategory.add') || request()->routeIs('learn-subcategory.all') || request()->routeIs('learn-subcategory.edit') || request()->routeIs('learn-content.add') || request()->routeIs('learn-content.all') || request()->routeIs('learn-content.edit') ? 'show' : '' }}"
                         id="sidebarLearn">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('learn-category.all') }}" class="nav-link {{ request()->routeIs('learn-category.add') || request()->routeIs('learn-category.all') || request()->routeIs('learn-category.edit') || request()->routeIs('learn-subcategory.add') || request()->routeIs('learn-subcategory.all') || request()->routeIs('learn-subcategory.edit')  || request()->routeIs('learn-content.add') || request()->routeIs('learn-content.all') || request()->routeIs('learn-content.edit') ? 'active' : '' }}" data-key="t-calendar">
                                    Manage Category
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('privacy.edit') ? 'active' : '' }}"
                       href="{{ route('privacy.edit') }}">
                        <i class="ri-book-open-line"></i> <span data-key="t-dashboards">Privacy Policy</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('terms.edit') ? 'active' : '' }}"
                       href="{{ route('terms.edit') }}">
                        <i class="ri-pencil-ruler-2-line"></i> <span data-key="t-dashboards">Terms and Conditions</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
