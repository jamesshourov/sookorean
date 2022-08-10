@extends('layouts.app')
@section('title')
    Edit User
@endsection
@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
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
                            <h4 class="mb-sm-0">Edit User</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Users</a></li>
                                    <li class="breadcrumb-item active">Edit User</li>
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
                                <h4 class="card-title mb-0">User Information</h4>
                            </div>
                            <!-- end card header -->
                            <div class="card-body">
                                <form action="{{ route('user.update') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    <div class="row gy-4">
                                        <div class="col-md-6">
                                            <label class="form-label">Name</label>
                                            <input type="text"
                                                   class="form-control @error('name') is-invalid @enderror" name="name"
                                                   value="{{ $user->name }}" required>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Email</label>
                                            <input type="email"
                                                   class="form-control @error('email') is-invalid @enderror" name="email"
                                                   value="{{ $user->email }}" required>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Date of Birth</label>
                                            <input type="text"
                                                   class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth"
                                                   value="{{ $user->date_of_birth }}" data-provider="flatpickr" data-date-format="d M, Y" required>
                                            @error('date_of_birth')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Korean Language Level</label>
                                            <select name="korean_level" class="form-control form-select @error('korean_level') is-invalid @enderror" name="korean_level" required>
                                                <option value="beginner" @selected($user->korean_level == 'beginner')>Beginner</option>
                                                <option value="intermediate" @selected($user->korean_level == 'intermediate')>Intermediate</option>
                                                <option value="expert" @selected($user->korean_level == 'expert')>Expert</option>
                                            </select>
                                            @error('korean_level')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Membership Type</label>
                                            <select name="premium" class="form-control form-select @error('premium') is-invalid @enderror" name="premium" required>
                                                <option value="0" @selected($user->premium == 0)>Free</option>
                                                <option value="1" @selected($user->premium == 1)>Premium</option>
                                            </select>
                                            @error('premium')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Password</label>
                                            <input type="text"
                                                   class="form-control @error('password') is-invalid @enderror" name="password"
                                                   value="{{ old('password') }}">
                                            @error('password')
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
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@endsection
