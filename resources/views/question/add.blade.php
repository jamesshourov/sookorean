@extends('layouts.app')
@section('title')
    Add New Question to {{ $level->title_english }}
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
                            <h4 class="mb-sm-0">Add New Question to {{ $level->title_english }}</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Questions</a></li>
                                    <li class="breadcrumb-item active">Add New Question
                                        to {{ $level->title_english }}</li>
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
                                <h4 class="card-title mb-0">Question Information</h4>
                            </div>
                            <!-- end card header -->
                            <div class="card-body">
                                <form action="{{ route('question.store') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="level_id" value="{{ $level_id }}">
                                    <div class="row gy-4">
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
                                            <label class="form-label">Image</label>
                                            <input type="file" accept=".jpeg, .jpg, .png, .gif"
                                                   class="form-control @error('image') is-invalid @enderror"
                                                   name="image">
                                            @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Audio</label>
                                            <input type="file" class="form-control @error('audio') is-invalid @enderror"
                                                   name="audio">
                                            @error('audio')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Video</label>
                                            <input type="file" class="form-control @error('video') is-invalid @enderror"
                                                   name="video">
                                            @error('video')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <table class="table table-bordered option-table">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        Option
                                                    </th>
                                                    <th>
                                                        Value
                                                    </th>
                                                    <th>
                                                        Action
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="option-1">
                                                    <td>
                                                        <input type="text"
                                                               class="form-control option_label option_label_1"
                                                               name="options[]" required>
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                               class="form-control option_value option_value_1"
                                                               name="option_values[]" required>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger remove-button remove-button-1"
                                                                type="button" onclick="removeOption(1)">
                                                            <i class="ri-delete-bin-3-line"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td colspan="3" class="text-center">
                                                        <button class="btn btn-success" type="button"
                                                                onclick="addOption()">Add New
                                                            Option
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-end">
                                                        <strong>Answer</strong>
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                               class="form-control @error('audio') is-invalid @enderror"
                                                               name="answer" required>
                                                        @error('audio')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                </tfoot>
                                            </table>
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

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
            integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
            integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function () {
            $('.category').select2();
        });

        function addOption() {
            let count = $('.option-table tbody tr').length;
            $('.option-table tbody').append(`
                <tr class="option-${count + 1}">
                    <td>
                        <input type="text" class="form-control option_label option_label_${count + 1}" name="options[]" required>
                    </td>
                    <td>
                        <input type="text" class="form-control option_value option_value_${count + 1}" name="option_values[]" required>
                    </td>
                    <td>
                        <button class="btn btn-danger remove-button remove-button-${count + 1}" type="button" onclick="removeOption(${count + 1})"><i class="ri-delete-bin-3-line"></i></button>
                    </td>
                </tr>
            `);
        }

        function removeOption(id) {
            $('.option-table tbody tr.option-' + id).remove();
            let currentTr = 0;
            $(".option-table tbody tr").each(function () {
                currentTr++;
                $(this).removeAttr('class');
                $(this).addClass('option-' + currentTr);
            });

            let currentOptionLabel = 0;
            $(".option-table .option_label").each(function () {
                currentOptionLabel++;
                $(this).removeAttr('class');
                $(this).addClass('form-control option_label option_label_' + currentOptionLabel);
            });

            let currentOptionValue = 0;
            $(".option-table .option_value").each(function () {
                currentOptionValue++;
                $(this).removeAttr('class');
                $(this).addClass('form-control option_value option_value_' + currentOptionValue);
            });

            let currentButton = 0;
            $(".option-table .remove-button").each(function () {
                currentButton++;
                $(this).removeAttr('class');
                $(this).addClass('btn btn-danger remove-button remove-button-' + currentButton);
            });
        }
    </script>
@endsection
