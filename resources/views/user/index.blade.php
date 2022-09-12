@extends('layouts.app')
@section('title')
    {{ $title }}
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
                            <h4 class="mb-sm-0">{{ $title }}</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Users</a></li>
                                    <li class="breadcrumb-item active">{{ $title }}</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
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
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">
                                    <a href="{{ route('user.export') }}" class="btn btn-primary">Export Users</a>
                                </h4>
                                <div class="flex-shrink-0">
                                    <div class="search-box ms-2">
                                        <form action="{{ route('user.all') }}" method="get">
                                            <input type="text" class="form-control search" placeholder="Search..."
                                                   name="keyword">
                                            <i class="ri-search-line search-icon"></i>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Bordered Tables -->
                                <table class="table table-bordered table-nowrap">
                                    <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Membership</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $sl = 0;
                                    @endphp
                                    @foreach($users as $user)
                                        @php
                                            $sl++;
                                        @endphp
                                        <tr>
                                            <th scope="row">
                                                {{ $sl }}
                                            </th>
                                            <td>
                                                {{ $user->name }}
                                            </td>
                                            <td>
                                                {{ $user->email }}
                                            </td>
                                            <td>
                                                @if($user->premium == 1)
                                                    <span class="badge badge-soft-success">Premium</span>
                                                @else
                                                    <span class="badge badge-soft-danger">Free</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($user->status == 1)
                                                    <span class="badge badge-soft-success">Active</span>
                                                @else
                                                    <span class="badge badge-soft-danger">Blocked</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div class="edit">
                                                        <a class="btn btn-sm btn-success edit-item-btn" href="{{ route('user.edit', $user->id) }}">Edit</a>
                                                    </div>
                                                    <div class="remove">
                                                        <a class="btn btn-sm btn-danger remove-item-btn" href="{{ route('user.delete', $user->id) }}" onclick="return confirm('Are you sure?')">Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-end">
                                    {!! $users->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

    </div>
    <!-- end main content-->
@endsection
