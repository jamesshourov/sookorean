@extends('layouts.app')
@section('title')
    Edit Content
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
                            <h4 class="mb-sm-0">Edit Content</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Contents</a></li>
                                    <li class="breadcrumb-item active">Edit Content</li>
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
                                <h4 class="card-title mb-0">Subcategory Information</h4>
                            </div>
                            <!-- end card header -->
                            <div class="card-body">
                                <form action="{{ route('learn-content.update') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $row->id }}">
                                    <div class="row gy-4">
                                        <div class="col-md-12">
                                            <label class="form-label">English Title</label>
                                            <input type="text"
                                                   class="form-control @error('title_english') is-invalid @enderror"
                                                   name="title_english"
                                                   value="{{ $row->title_english }}" required>
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
                                                   value="{{ $row->title_japanese }}">
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
                                                   value="{{ $row->title_french }}">
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
                                                   value="{{ $row->title_spanish }}">
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
{{--                                                   value="{{ $row->title_arabic }}" dir="rtl">--}}
{{--                                            @error('title_arabic')--}}
{{--                                            <span class="invalid-feedback" role="alert">--}}
{{--                                                <strong>{{ $message }}</strong>--}}
{{--                                            </span>--}}
{{--                                            @enderror--}}
{{--                                        </div>--}}
                                        <div class="col-md-12">
                                            <label class="form-label">English Description</label>
                                            <textarea name="description_english" class="form-control @error('description_english') is-invalid @enderror" rows="5">{{ $row->description_english }}</textarea>
                                            @error('description_english')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Japanese Description</label>
                                            <textarea name="description_japanese" class="form-control @error('description_japanese') is-invalid @enderror" rows="5">{{ $row->description_japanese }}</textarea>
                                            @error('description_japanese')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">French Description</label>
                                            <textarea name="description_french" class="form-control @error('description_french') is-invalid @enderror" rows="5">{{ $row->description_french }}</textarea>
                                            @error('description_french')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Spanish Description</label>
                                            <textarea name="description_spanish" class="form-control @error('description_spanish') is-invalid @enderror" rows="5">{{ $row->description_spanish }}</textarea>
                                            @error('description_spanish')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

{{--                                        <div class="col-md-12">--}}
{{--                                            <label class="form-label">Arabic Description</label>--}}
{{--                                            <textarea name="description_arabic" class="form-control @error('description_arabic') is-invalid @enderror" rows="5" dir="rtl">{{ $row->description_arabic }}</textarea>--}}
{{--                                            @error('description_arabic')--}}
{{--                                            <span class="invalid-feedback" role="alert">--}}
{{--                                                <strong>{{ $message }}</strong>--}}
{{--                                            </span>--}}
{{--                                            @enderror--}}
{{--                                        </div>--}}
                                        <div class="col-md-12">
                                            <label class="form-label">Image</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="file" accept=".jpeg, .jpg, .png, .gif"
                                                           class="form-control @error('image') is-invalid @enderror"
                                                           name="image">
                                                    @error('image')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                @if(!empty($row->thumbnail))
                                                    <div class="col-md-4 mb-4">
                                                        <img class="img-fluid w-75" src="{{ asset($row->thumbnail) }}"
                                                             alt="Image"/>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Audio</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="file"
                                                           class="form-control @error('audio') is-invalid @enderror"
                                                           name="audio">
                                                    @error('audio')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                @if(!empty($row->audio))
                                                    <div class="col-md-4">
                                                        <audio class="w-75" src="{{ asset($row->audio) }}"
                                                               controls></audio>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Video link</label>
                                            <input type="text"
                                                   class="form-control @error('video_link') is-invalid @enderror"
                                                   name="video_link"
                                                   value="{{ $row->video_link }}">
                                            @error('video_link')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
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
