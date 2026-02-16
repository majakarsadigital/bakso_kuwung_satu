@extends('admin.layouts.app')

@section('admin_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $user->name }}</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label"><strong>Name:</strong></label>
                        <p>{{ $user->name }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Email:</strong></label>
                        <p>{{ $user->email }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Role:</strong></label>
                        <p>{{ $user->role ?? 'N/A' }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Created At:</strong></label>
                        <p>{{ $user->created_at->format('d-m-Y H:i') }}</p>
                    </div>
                    <div class="mt-4">
                        <a href="#" class="btn btn-primary">Edit Profile</a>
                        <a href="#" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection