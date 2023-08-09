@extends('layouts.crud')

@section('contentz')
<div class="card" style="margin: 20px;">
    <div class="card-header">
        <a href="{{ route('crud.categories') }}" class="text-decoration-none">
            <button class="btn btn-danger">Back</button>
        </a>
        Edit categories
    </div>
    <div class="card-body">
 
    <form action="/crud/categories/{{ $categories->id }}" method="post">
    @csrf
    @method('PUT')



    <label>Edit categories</label><br>
    <input type="text" name="categories-name" class="form-control" value="{{ $categories->name }}"><br>
    <input type="submit" value="Update" class="btn btn-success">
</form>


        <br>
    </div>
</div>
@endsection
