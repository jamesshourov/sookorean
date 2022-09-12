@extends('layouts.app')
@section('title')
    Add New Category
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
                            <h4 class="mb-sm-0">Add New Category</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Categories</a></li>
                                    <li class="breadcrumb-item active">Add New Category</li>
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
                                <h4 class="card-title mb-0">Category Information</h4>
                            </div>
                            <!-- end card header -->
                            <div class="card-body">
                                <form action="{{ route('category.store') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gy-4">
                                        <div class="col-md-12">
                                            <label class="form-label">Image</label>
                                            <input type="file" accept=".jpeg, .jpg, .png, .gif"
                                                   class="form-control @error('image') is-invalid @enderror"
                                                   name="image" required>
                                            @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">English Title</label>
                                            <input type="text"
                                                   class="form-control @error('title_english') is-invalid @enderror"
                                                   name="title_english"
                                                   value="{{ old('title_english') }}" required>
                                            @error('title_english')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Japanese Title</label>
                                            <input type="text"
                                                   class="form-control @error('title_japanese') is-invalid @enderror"
                                                   name="title_japanese"
                                                   value="{{ old('title_japanese') }}">
                                            @error('title_japanese')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">French Title</label>
                                            <input type="text"
                                                   class="form-control @error('title_french') is-invalid @enderror"
                                                   name="title_french"
                                                   value="{{ old('title_french') }}">
                                            @error('title_french')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Spanish Title</label>
                                            <input type="text"
                                                   class="form-control @error('title_spanish') is-invalid @enderror"
                                                   name="title_spanish"
                                                   value="{{ old('title_spanish') }}">
                                            @error('title_spanish')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        {{--                                        <div class="col-md-12">--}}
                                        {{--                                            <label class="form-label">Arabic Title</label>--}}
                                        {{--                                            <input type="text"--}}
                                        {{--                                                   class="form-control @error('title_arabic') is-invalid @enderror"--}}
                                        {{--                                                   name="title_arabic"--}}
                                        {{--                                                   value="{{ old('title_arabic') }}" dir="rtl">--}}
                                        {{--                                            @error('title_arabic')--}}
                                        {{--                                            <span class="invalid-feedback" role="alert">--}}
                                        {{--                                                <strong>{{ $message }}</strong>--}}
                                        {{--                                            </span>--}}
                                        {{--                                            @enderror--}}
                                        {{--                                        </div>--}}

                                        <div class="col-md-12">
                                            <label class="form-label">English Subtitle</label>
                                            <textarea name="description_english"
                                                      class="form-control @error('description_english') is-invalid @enderror"
                                                      rows="5">{{ old('description_english') }}</textarea>
                                            @error('description_english')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Japanese Subtitle</label>
                                            <textarea name="description_japanese"
                                                      class="form-control @error('description_japanese') is-invalid @enderror"
                                                      rows="5">{{ old('description_japanese') }}</textarea>
                                            @error('description_japanese')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">French Subtitle</label>
                                            <textarea name="description_french"
                                                      class="form-control @error('description_french') is-invalid @enderror"
                                                      rows="5">{{ old('description_french') }}</textarea>
                                            @error('description_french')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Spanish Subtitle</label>
                                            <textarea name="description_spanish"
                                                      class="form-control @error('description_spanish') is-invalid @enderror"
                                                      rows="5">{{ old('description_spanish') }}</textarea>
                                            @error('description_spanish')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        {{--                                        <div class="col-md-12">--}}
                                        {{--                                            <label class="form-label">Arabic Subtitle</label>--}}
                                        {{--                                            <textarea name="description_arabic"--}}
                                        {{--                                                      class="form-control @error('description_arabic') is-invalid @enderror"--}}
                                        {{--                                                      rows="5" dir="rtl">{{ old('description_arabic') }}</textarea>--}}
                                        {{--                                            @error('description_arabic')--}}
                                        {{--                                            <span class="invalid-feedback" role="alert">--}}
                                        {{--                                                <strong>{{ $message }}</strong>--}}
                                        {{--                                            </span>--}}
                                        {{--                                            @enderror--}}
                                        {{--                                        </div>--}}

                                        <div class="col-md-12">
                                            <label class="form-label">Background Color</label>
                                            <input type="text"
                                                   class="form-control @error('background_color') is-invalid @enderror"
                                                   name="background_color"
                                                   value="{{ old('background_color') }}" required>
                                            @error('background_color')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Has Video</label>
                                            <select name="has_video"
                                                    class="form-control @error('has_video') is-invalid @enderror">
                                                <option value="">Select option</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                            @error('has_video')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Play Audio Before</label>
                                            <select name="play_audio_before"
                                                    class="form-control @error('play_audio_before') is-invalid @enderror">
                                                <option value="">Select option</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                            @error('play_audio_before')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Option Multilingual</label>
                                            <select name="multi_langual"
                                                    class="form-control @error('multi_langual') is-invalid @enderror">
                                                <option value="">Select option multilingual</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                            @error('multi_langual')
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
