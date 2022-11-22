@extends('students.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Edit Student</div>
        <div class="card-body">

            <form action="{{ route('studentUpdate',['student' => $student->id ]) }}" method="post">
                @csrf
                @method("put")
                <input type="hidden" name="id" id="id" value="{{$student->id}}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{$student->name}}" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" value="{{$student->address}}" class="form-control"></br>
                <label>Mobile</label></br>
                <input type="text" name="mobile" id="mobile" value="{{$student->mobile}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success">
                <a href="{{ route('studentFilter') }}" class="btn btn-info" title="Back to students list">
                    Cancel
                </a>
                </br>
            </form>

        </div>
    </div>

@stop
