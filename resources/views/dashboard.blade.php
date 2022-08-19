@extends('layouts.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Dashboard</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item active"><a href="javascript: void(0);">Dashboards</a>
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card crm-widget">
                            <div class="card-body p-0">
                                <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-1 g-0">
                                    <div class="col">
                                        <div class="py-4 px-3">
                                            <a href="{{ route('user.all') }}">
                                                <h5 class="text-muted text-uppercase fs-13">Total Users <i
                                                        class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i>
                                                </h5>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-user-line display-6 text-muted"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0">
                                                            <span class="counter-value"
                                                                  data-target="{{ \Illuminate\Support\Facades\DB::table('users')->where('role', 'user')->count() }}">0</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col">
                                        <div class="mt-3 mt-md-0 py-4 px-3">
                                            <a href="{{ route('carrot.all') }}">
                                                <h5 class="text-muted text-uppercase fs-13">Total Carrots <i
                                                        class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i>
                                                </h5>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-gallery-line display-6 text-muted"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0">
                                                            <span class="counter-value"
                                                                  data-target="{{ \Illuminate\Support\Facades\DB::table('carrots')->count() }}">0</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col">
                                        <div class="mt-3 mt-md-0 py-4 px-3">
                                            <a href="{{ route('category.all') }}">
                                                <h5 class="text-muted text-uppercase fs-13">Total Categories <i
                                                        class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i>
                                                </h5>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-image-add-line display-6 text-muted"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0">
                                                        <span class="counter-value"
                                                              data-target="{{ \Illuminate\Support\Facades\DB::table('categories')->count() }}">0</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col">
                                        <div class="mt-3 mt-md-0 py-4 px-3">
                                            <a href="{{ route('gif.all') }}">
                                                <h5 class="text-muted text-uppercase fs-13">Total Gifs <i
                                                        class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i>
                                                </h5>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-image-edit-fill display-6 text-muted"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0">
                                                        <span class="counter-value"
                                                              data-target="{{ \Illuminate\Support\Facades\DB::table('gifs')->count() }}">0</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col">
                                        <div class="mt-3 mt-md-0 py-4 px-3">
                                            <a href="{{ route('life-and-job.all') }}">
                                                <h5 class="text-muted text-uppercase fs-13">Total Life and Jobs <i
                                                        class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i>
                                                </h5>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-user-search-line display-6 text-muted"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0">
                                                        <span class="counter-value"
                                                              data-target="{{ \Illuminate\Support\Facades\DB::table('life_and_jobs')->count() }}">0</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card crm-widget">
                            <div class="card-body p-0">
                                <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-1 g-0">
                                    <div class="col">
                                        <div class="py-4 px-3">
                                            <a href="{{ route('benefit.all') }}">
                                                <h5 class="text-muted text-uppercase fs-13">Total Benefits <i
                                                        class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i>
                                                </h5>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-hand-heart-line display-6 text-muted"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0">
                                                            <span class="counter-value"
                                                                  data-target="{{ \Illuminate\Support\Facades\DB::table('benefits')->count() }}">0</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col">
                                        <div class="mt-3 mt-md-0 py-4 px-3">
                                            <a href="{{ route('level.all') }}">
                                                <h5 class="text-muted text-uppercase fs-13">Total Quiz Levels <i
                                                        class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i>
                                                </h5>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-questionnaire-line display-6 text-muted"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0">
                                                            <span class="counter-value"
                                                                  data-target="{{ \Illuminate\Support\Facades\DB::table('levels')->count() }}">0</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col">
                                        <div class="mt-3 mt-md-0 py-4 px-3">
                                            <a href="{{ route('learn-category.all') }}">
                                                <h5 class="text-muted text-uppercase fs-13">Total Learn Categories <i
                                                        class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i>
                                                </h5>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-contacts-book-line display-6 text-muted"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0">
                                                        <span class="counter-value"
                                                              data-target="{{ \Illuminate\Support\Facades\DB::table('categories')->count() }}">0</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end col -->

                                </div>
                                <!-- end row -->
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div>
                <!-- end row -->


            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
    <!-- end main content-->
@endsection
