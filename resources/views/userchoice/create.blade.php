@extends('layouts.crud')

@section('contentz')
    <div class="card" style="margin: 20px;">
        <div class="card-header">
            <a href="{{ route('crud.userchoice') }}" class="text-decoration-none">
                <button class="btn btn-danger">Back</button>
            </a>
            Create userchoice
        </div>
        <div class="card-body">
            <form action="{{ route('crud.userchoice.store') }}" method="post">
                @csrf


<div class="input-group mb-3">
<label class="input-group-text" for="categories_id">categories</label>
<select class="form-select" id="categories_id" name="categories_id">
<option selected disabled>Select categories</option>
@foreach($categories as $categories)
<option value="{{ $categories->id }}">{{ $categories->name }}</option>
@endforeach
</select>
</div>

<div class="input-group mb-3">
<label class="input-group-text" for="item_id">item</label>
<select class="form-select" id="item_id" name="item_id">
<option selected disabled>Select item</option>
@foreach($item as $item)
<option value="{{ $item->id }}" data-item="{{ $item->categories_id }}">{{ $item->name }}</option>
@endforeach
</select>
</div>


<input type="checkbox" id="showVariant" />
<label for="showVariant">Add Variant</label>


<div id="variantContainer" style="display: none;">

<div class="input-group mb-3">
<label class="input-group-text" for="variance_id">variance</label>
<select class="form-select" id="variance_id" name="variance_id">
<option selected disabled>Select variance</option>
@foreach($variance as $variance)
<option value="{{ $variance->id }}" >
    {{ $variance->id }} - {{ $variance->name }}</option>
@endforeach
</select>
</div>

<div class="input-group mb-3">
<label class="input-group-text" for="Variant_Item_id">Variant_Item</label>
<select class="form-select" id="Variant_Item_id" name="Variant_Item_id">
<option selected disabled>Select Variant_Item</option>
@foreach($Variant_Item as $Variant_Item)
<option value="{{ $Variant_Item->id }}" data-item="{{ $Variant_Item->variance_id }}" class="Variant_Item-option" data-item="{{ $Variant_Item->item_id }}">{{ $Variant_Item->name }}</option>
@endforeach
</select>
</div>

</div>




<input type="submit" value="Save" class="btn btn-success">
</form>
<br>
</div>
</div>

<script>

// part 1


document.getElementById('categories_id').addEventListener('change', function () {
const selectedItemId = this.value;
const categoryOptions = document.querySelectorAll('#item_id option');

categoryOptions.forEach(function (option) {
if (option.getAttribute('data-item') === selectedItemId) {
option.style.display = 'block';
} else {
option.style.display = 'none';
}
});
document.getElementById('item_id').value = '';
});


// part 2
const a = document.getElementById('variance_id');
const b =document.getElementById('Variant_Item_id');

a.addEventListener('change', function () {

const selectedvarianceId = this.value;
const Variant_ItemOptions = document.querySelectorAll('#Variant_Item_id option');

Variant_ItemOptions.forEach(function (option) {
if (option.getAttribute('data-item') === selectedvarianceId) {
option.style.display = 'block';
} else {
option.style.display = 'none';
}
});


b.value = '';
});

</script>


<script>
const x = document.getElementById('showVariant');
const y = document.getElementById('variantContainer');

x.addEventListener('change', function () {

y.style.display = this.checked ? 'block' : 'none';
});
</script>
@endsection
