@extends('layouts.crud')

@section('contentz')

<div class="card" style="margin: 20px;">
    <div class="card-header">
    <a href="{{ route('crud.Variant_Item') }}" class="text-decoration-none">
            <button class="btn btn-danger">Back</button>
        </a>
        Create Variant_Item
    </div>
    <div class="card-body">
        <form action="{{ route('crud.Variant_Item') }}" method="post"> 
            @csrf

                   
<label>Choose variance</label><br>
<select name="variance_id" class="form-control">
<option value="" selected disabled>Select categories</option>


@foreach($variance as $variance)
    <option value="{{ $variance->id }}">
        {{ $variance->id }} - {{ $variance->name }}
    </option>
@endforeach
</select>
























<label>Add Variant_Item</label><br>
<input type="text" name="Variant_Item-name" class="form-control">

<br>
<input type="submit" value="Save" class="btn btn-success">
</form>
<br>
</div>
</div>

@endsection
