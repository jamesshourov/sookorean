@extends('layouts.app')
@section('title')
    Edit Question
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
                            <h4 class="mb-sm-0">Edit Question</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Questions</a></li>
                                    <li class="breadcrumb-item active">Edit Question</li>
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
                                <form action="{{ route('question.update') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $row->id }}">
                                    <div class="row gy-4">
                                        <div class="col-md-12">

                                            <label class="form-label">Title</label>
                                            <input type="text"
                                                   class="form-control @error('title') is-invalid @enderror"
                                                   name="title"
                                                   value="{{ $row->title }}" required>
                                            @error('title')
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
                                                @if(!empty($row->image))
                                                    <div class="col-md-4 mb-4">
                                                        <img class="img-fluid w-75" src="{{ asset($row->image) }}"
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
                                        @if($category->has_video == 1)
                                            <div class="col-md-12">
                                                <label class="form-label">Video</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="file"
                                                               class="form-control @error('video') is-invalid @enderror"
                                                               name="video">
                                                        @error('video')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    @if(!empty($row->video))
                                                        <div class="col-md-4">
                                                            <video class="w-75" src="{{ asset($row->video) }}"
                                                                   controls></video>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        @endif
                                        <div class="col-md-12">
                                            @if($category->multi_langual == 0)
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
                                                        @foreach($options as $key => $option)
                                                            <tr class="option-option-{{ $key }}">
                                                                <td>
                                                                    <input type="text"
                                                                           class="form-control option_label option_label_1"
                                                                           name="options_english[]"
                                                                           value="{{ $option->option_title_english }}"
                                                                           required>
                                                                </td>
                                                                <td>
                                                                    <input type="text"
                                                                           class="form-control option_value option_value_1"
                                                                           name="option_values[]"
                                                                           value="{{ $option->option_value }}" required>
                                                                </td>
                                                                <td>
                                                                    <button
                                                                        class="btn btn-danger remove-button remove-button-1"
                                                                        type="button" onclick="removeOption(1)">
                                                                        <i class="ri-delete-bin-3-line"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        @endforeach
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
                                            @else
                                                <div class="col-md-12">
                                                    <table class="table table-bordered option-table">
                                                        <thead>
                                                        <tr>
                                                            <th>Option English</th>
                                                            <th>Option Japanese</th>
                                                            <th>Option French</th>
                                                            <th>Option Spanish</th>
                                                            {{--                                                        <th>Option Arabic</th>--}}
                                                            <th>
                                                                Value
                                                            </th>
                                                            <th>
                                                                Action
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($options as $key => $option)
                                                            <tr class="option-{{ $key }}">
                                                                <td>
                                                                    <input type="text"
                                                                           class="form-control option_label option_label_{{ $key }}"
                                                                           name="options_english[]"
                                                                           value="{{ $option->option_title_english }}"
                                                                           required>
                                                                </td>
                                                                <td>
                                                                    <input type="text"
                                                                           class="form-control option_label option_label_{{ $key }}"
                                                                           name="options_japanese[]"
                                                                           value="{{ $option->option_title_japanese }}">
                                                                </td>
                                                                <td>
                                                                    <input type="text"
                                                                           class="form-control option_label option_label_{{ $key }}"
                                                                           name="options_french[]"
                                                                           value="{{ $option->option_title_french }}">
                                                                </td>
                                                                <td>
                                                                    <input type="text"
                                                                           class="form-control option_label option_label_{{ $key }}"
                                                                           name="options_spanish[]"
                                                                           value="{{ $option->option_title_spanish }}">
                                                                </td>
                                                                <td>
                                                                    <input type="text"
                                                                           class="form-control option_value option_value_{{ $key }}"
                                                                           name="option_values[]"
                                                                           value="{{ $option->option_value }}" required>
                                                                </td>
                                                                <td>
                                                                    <button
                                                                        class="btn btn-danger remove-button remove-button-1"
                                                                        type="button" onclick="removeOption(1)">
                                                                        <i class="ri-delete-bin-3-line"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                        <tr>
                                                            <td colspan="@if($category->multi_langual == 0) 3 @else 6 @endif"
                                                                class="text-end">
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
                                                                       class="form-control @error('answer') is-invalid @enderror"
                                                                       name="answer" value="{{ $row->answer }}"
                                                                       required>
                                                                @error('answer')
                                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                                @enderror
                                                            </td>
                                                        </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            @endif
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

        @if($category->multi_langual == 0)
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
        @else
        function addOption() {
            let count = $('.option-table tbody tr').length;
            $('.option-table tbody').append(`
                        <tr class="option-${count + 1}">
                            <td>
                                <input type="text" class="form-control option_label option_label_${count + 1}" name="options_english[]" required>
                            </td>
                            <td>
                                <input type="text" class="form-control option_label option_label_${count + 1}" name="options_japanese[]">
                            </td>
                            <td>
                                <input type="text" class="form-control option_label option_label_${count + 1}" name="options_french[]">
                            </td>
                            <td>
                                <input type="text" class="form-control option_label option_label_${count + 1}" name="options_spanish[]">
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
        @endif

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
