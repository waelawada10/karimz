@extends('layouts.crud')

@section('contentz')
<div class="card" style="margin: 20px;">
    <div class="card-header">
    <a href="{{ route('crud.variance') }}" class="text-decoration-none">
            <button class="btn btn-danger">Back</button>
        </a>
        Edit variance
    </div>
    <div class="card-body">
    <form action="/crud/variance/{{ $variance->id }}" method="post">
            @csrf
            @method('PUT')



            <label>Edit variance</label><br>
            <input type="text" name="variance-name" class="form-control" value="{{ $variance->name }}"><br>
            <input type="submit" value="Update" class="btn btn-success">
        </form>
        <br>
    </div>
</div>
@endsection
