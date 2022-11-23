@extends('layout.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Create New Course</div>
        <div class="card-body">

            <form action="{{ route("coursesStore") }}" method="post">
                @csrf
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Start Date</label></br>
                <input type="text" name="startDate" id="startDate" class="form-control"></br>
                <label>End Date</label></br>
                <input type="text" name="endDate" id="endDate" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success">
                <a href="{{ route('coursesFilter') }}" class="btn btn-info" title="Back to students list">
                    Cancel
                </a>

                </br>
            </form>

        </div>
    </div>

@stop
