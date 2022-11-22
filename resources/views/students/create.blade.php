@extends('students.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Create New Student</div>
        <div class="card-body">

            <form action="{{ route('studentStore') }}" method="post">
                @csrf
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" class="form-control"></br>
                <label>Mobile</label></br>
                <input type="text" name="mobile" id="mobile" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success">
                <a href="{{ route('studentFilter') }}" class="btn btn-info" title="Back to students list">
                    Cancel
                </a>

                </br>
            </form>

        </div>
    </div>

@stop
