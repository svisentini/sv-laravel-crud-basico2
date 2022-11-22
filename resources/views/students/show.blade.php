@extends('students.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Students Page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Name : {{ $student->name }}</h5>
                <p class="card-text">Address : {{ $student->address }}</p>
                <p class="card-text">Mobile : {{ $student->mobile }}</p>
            </div>
            <br>
            <a href="{{ route('studentFilter') }}" class="btn btn-info btn-sm" title="Back -> Students">
                Back to students list
            </a>
        </div>
    </div>

@stop
