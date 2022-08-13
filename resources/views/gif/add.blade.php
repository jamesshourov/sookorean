@extends('layouts.app')
@section('title')
    Add New Gif
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
                            <h4 class="mb-sm-0">Add New Gif</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Gifs</a></li>
                                    <li class="breadcrumb-item active">Add New Gif</li>
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
                                <h4 class="card-title mb-0">Gif Information</h4>
                            </div>
                            <!-- end card header -->
                            <div class="card-body">
                                <form action="{{ route('gif.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gy-4">
                                        <div class="col-md-12">
                                            <label class="form-label">Image</label>
                                            <input type="file" accept=".jpeg, .jpg, .png, .gif" class="form-control @error('image') is-invalid @enderror"
                                                   name="image" required>
                                            @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Title</label>
                                            <input type="text"
                                                   class="form-control @error('title') is-invalid @enderror"
                                                   name="title"
                                                   value="{{ old('title') }}" required>
                                            @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-success">Save</button>
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

