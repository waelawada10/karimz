@extends('layouts.crud')

@section('contentz')
<div class="card" style="margin: 20px;">
    <div class="card-header">
        <a href="{{ route('crud.item') }}" class="text-decoration-none">
            <button class="btn btn-danger">Back</button>
        </a>
        Edit item
    </div>
    <div class="card-body">
        <form action="/crud/item/{{ $item->id }}" method="post">
            @csrf
            @method('PUT')
            
<label>Choose categories</label><br>
<select name="categories_id" class="form-control">
<option value="" selected disabled>Select categories</option>
@foreach($categories as $categories)
<option value="{{ $categories->id }}" {{ $categories->id === $categories->categories_id ? 'selected' : '' }}>
{{ $categories->name }}
</option>
@endforeach
</select>


            <label>Edit item</label><br>
            <input type="text" name="item-name" class="form-control" value="{{ $item->name }}"><br>
            <input type="submit" value="Update" class="btn btn-success">
        </form>
        <br>
    </div>
</div>
@endsection
