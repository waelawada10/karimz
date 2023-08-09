@extends('layouts.crud')
@section('contentz')




<table class="table">
<thead>
<tr>
<th scope="col">#ID</th>
<th scope="col">categories </th>
<th scope="col">Item </th>
<th scope="col">variance </th>
<th scope="col">Variant_Item </th>
</tr>
</thead>
  <tbody>
  @foreach ($queryz as $x)
<tr>
    <th scope="row">{{ $x->id }}</th>
    <td>{{ $x->categories->name }}</td>
    <td>{{ $x->item->name }}</td>
    <td>{{ optional($x->variance)->name }}</td>
    <td>{{ optional($x->Variant_Item)->name }}</td>
</tr>
@endforeach



    
    
  </tbody>
</table>

@endsection