@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    Create Student
                    <a href="{{ route('student.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>

                <div class="card-body">
                        <div class="form-group">
                            <label for="name">Student Name</label>
                            <input disabled type="text" class="form-control" id="name"
                                aria-describedby="nae" name="name" placeholder="Name" value="{{ $student->name }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Student Email</label>
                            <input disabled type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ $student->email }}">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input disabled type="text" class="form-control " id="phone" name="phone" value="{{ $student->phone }}">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input disabled type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{ $student->address }}">
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
