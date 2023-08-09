@extends('layouts.crud')

@section('contentz')

<div class="card" style="margin: 20px;">
    <div class="card-header">
        <a href="{{ route('crud.categories') }}" class="text-decoration-none">
            <button class="btn btn-danger">Back</button>
        </a>
        Create categories
    </div>

    <div class="card-body">
        <form action="{{ route('crud.categories') }}" method="post"> 
            @csrf

            <label>Choose categories</label><br>

            
            <input type="text" name="categories-name" class="form-control">
            <br>



            <br>
            <input type="submit" value="Save" class="btn btn-success">
        </form>
        <br>
    </div>
</div>

@endsection
