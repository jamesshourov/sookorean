@extends('layouts.app')
@section('title')
    Edit Terms and Conditions
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
                            <h4 class="mb-sm-0">Edit Terms and Conditions</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Terms and Conditions</a></li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                @if (session('error'))
                                    <div class="alert alert-danger w-100" role="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                @if (session('success'))
                                    <div class="alert alert-success w-100" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <h4 class="card-title mb-0">Terms and Conditions Information</h4>
                            </div>
                            <!-- end card header -->
                            <div class="card-body">
                                <form action="{{ route('terms.update') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gy-4">
                                        <div class="col-md-12">
                                            <label class="form-label">Content English</label>
                                            <textarea name="content_english"
                                                      class="form-control @error('content_english') is-invalid @enderror"
                                                      rows="20">{{ $content ? $content->content_english : '' }}</textarea>
                                            @error('content_english')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Content Japanese</label>
                                            <textarea name="content_japanese"
                                                      class="form-control @error('content_japanese') is-invalid @enderror"
                                                      rows="20">{{ $content ? $content->content_japanese : '' }}</textarea>
                                            @error('content_japanese')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Content French</label>
                                            <textarea name="content_french"
                                                      class="form-control @error('content_french') is-invalid @enderror"
                                                      rows="20">{{ $content ? $content->content_french : '' }}</textarea>
                                            @error('content_french')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Content Spanish</label>
                                            <textarea name="content_spanish"
                                                      class="form-control @error('content_spanish') is-invalid @enderror"
                                                      rows="20">{{ $content ? $content->content_spanish : '' }}</textarea>
                                            @error('content_spanish')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        {{--                                        <div class="col-md-12">--}}
                                        {{--                                            <label class="form-label">Content Arabic</label>--}}
                                        {{--                                            <textarea name="content_arabic"--}}
                                        {{--                                                      class="form-control @error('content_arabic') is-invalid @enderror"--}}
                                        {{--                                                      rows="20">{{ $content ? $content->content_arabic : '' }}</textarea>--}}
                                        {{--                                            @error('content_arabic')--}}
                                        {{--                                            <span class="invalid-feedback" role="alert">--}}
                                        {{--                                                <strong>{{ $message }}</strong>--}}
                                        {{--                                            </span>--}}
                                        {{--                                            @enderror--}}
                                        {{--                                        </div>--}}

                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

    </div>
    <!-- end main content-->
@endsection

