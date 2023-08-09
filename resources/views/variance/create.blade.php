@extends('layouts.crud')

@section('contentz')

<div class="card" style="margin: 20px;">
    <div class="card-header">
    <a href="{{ route('crud.variance') }}" class="text-decoration-none">
            <button class="btn btn-danger">Back</button>
        </a>
        Create variance
    </div>
    <div class="card-body">
        <form action="{{ route('crud.variance') }}" method="post"> 
            @csrf





            
            <label>Add variance</label><br>
            <input type="text" name="variance-name" class="form-control">
            
            <br>
            <input type="submit" value="Save" class="btn btn-success">
        </form>
        <br>
    </div>
</div>

@endsection
