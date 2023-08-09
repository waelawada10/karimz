@extends('layouts.crud')

@section('contentz')

<div class="card" style="margin: 20px;">
    <div class="card-header">
    <a href="{{ route('crud.item') }}" class="text-decoration-none">
            <button class="btn btn-danger">Back</button>
        </a>
        Create item
    </div>
    <div class="card-body">
        <form action="{{ route('crud.item') }}" method="post"> 
            @csrf
            <select name="categories_id" class="form-control">
        <option value="" selected disabled>Select categories</option>
        @foreach($categories as $categories)
            <option value="{{ $categories->id }}" {{ $categories->id === $categories->categories_id ? 'selected' : '' }}>
                {{ $categories->name }}
            </option>
        @endforeach
    </select>
            <label>Add item</label><br>
            <input type="text" name="item-name" class="form-control">
            <br>
            <input type="submit" value="Save" class="btn btn-success">
        </form>
        <br>
    </div>
</div>

@endsection
