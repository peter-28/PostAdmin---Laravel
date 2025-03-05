@extends('layouts.app')

@section('title', 'User Profile')

@section('third_party_stylesheets')
    @include('includes.filepond-css')
@endsection

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active">Profile</li>
    </ol>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <div class="alert-body">
                                <span>{{ $error }}</span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        </div>
                    @endforeach
                @endif
                <h3>Hello, <span class="text-primary">Peter</span></h3>
                <p class="font-italic">Change your profile information & password from here...</p>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form action="#" method="POST">
                            @csrf
                            @method('patch')

                            <div class="form-group">
                                <label for="image">Profile Image <span class="text-danger">*</span></label>
                                <img style="width: 100px;height: 100px;"
                                    class="d-block mx-auto img-thumbnail img-fluid rounded-circle mb-2" src="{{ asset('images/favicon.png') }}"
                                    alt="Profile Image">
                                <input id="image" type="file" name="image" data-max-file-size="500KB">
                            </div>

                            <div class="form-group">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="name" required
                                    value="Peter">
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input class="form-control" type="email" name="email" required
                                    value="peter@gmail.com">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Profile <i
                                        class="bi bi-check"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form action="#" method="POST">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="current_password">Current Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="current_password" required>
                                @error('current_password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">New Password <span class="text-danger">*</span></label>
                                <input class="form-control" type="password" name="password" required>
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" type="password" name="password_confirmation" required>
                                @error('password_confirmation')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Password <i
                                        class="bi bi-check"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page_scripts')
    @include('includes.filepond-js')
@endpush
