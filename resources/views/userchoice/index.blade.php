@extends('layouts.crud')
@section('contentz')

<div class="container">

<a href="{{ route('crud') }}" class="text-decoration-none">
            <button class="btn btn-danger">Back</button>
        </a>

  <a href="userchoice/create"><button type="button" class="btn btn-success">Create</button></a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">categories </th>
      <th scope="col">item </th>
      <th scope="col">variance </th>
      <th scope="col">Variant_Item </th>
  

      <th scope="col">buttons</th>
    </tr>
  </thead>
  <tbody>

  @foreach($queryz as $x)

<tr>
<th scope="row">{{ $x->id }}</th>
<td>{{ $x->categories->name }}</td>
<td>{{ $x->item->name }}</td>
<td>{{ optional($x->variance)->name }}</td>
<td>{{ optional($x->Variant_Item)->name }}</td>






<td>

<div class="d-flex">

<a href="/crud/userchoice/edit/{{ $x->id }}">
<button class="btn btn-primary btn-sm">Edit</button>
</a>

<form class="ms-1" method="POST" action="/crud/userchoice/{{ $x->id }}">
@method('DELETE')
@csrf

<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Confirm delete?')">
Delete
</button>
</form>

</div>

</td>







    </tr>
    @endforeach
    
  </tbody>
</table>

</div>




@endsection