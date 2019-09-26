@extends('master')

@section('contents')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form action="{{route('tasks.store')}}" method="post" role="form">
                @csrf
                <legend>Create</legend>

                <div class="form-group">
                    <label for="">Name:</label>
                    <input type="text" class="form-control" name="name" id="" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
