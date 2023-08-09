@extends('layouts.crud')

@section('contentz')
<div class="card" style="margin: 20px;">
    <div class="card-header">
    <a href="{{ route('crud.Variant_Item') }}" class="text-decoration-none">
            <button class="btn btn-danger">Back</button>
        </a>
        Edit Variant_Item
    </div>
    <div class="card-body">
    <form action="/crud/Variant_Item/{{ $queryz->id }}" method="post">
            @csrf
            @method('PUT')

            <label>Choose variance</label><br>
            <select name="variance_id" class="form-control">
                <option value="" selected disabled>Select categories</option>
                @foreach($variance as $variance)
                    <option value="{{ $variance->id }}" {{ $variance->id === $variance->variance_id ? 'selected' : '' }}>
                    {{ $variance->id }}  - {{ $variance->name }}

                    </option>
                @endforeach
            </select>


            <label>Edit Variant_Item</label><br>
            <input type="text" name="Variant_Item-name" class="form-control" value="{{ $queryz->name }}"><br>
            <input type="submit" value="Update" class="btn btn-success">
        </form>
        <br>
    </div>
</div>
@endsection
