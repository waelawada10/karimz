@extends('layouts.crud')
@section('contentz')

<div class="container">

<a href="{{ route('crud') }}" class="text-decoration-none">
            <button class="btn btn-danger">Back</button>
        </a>

  <a href="variance/create"><button type="button" class="btn btn-success">Create</button></a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">variance</th>
      <th scope="col">buttons</th>
    </tr>
  </thead>
  <tbody>

  @foreach($variance as $y)

<tr>
<th scope="row">{{ $y->id }}</th>

<td>{{ $y->name }}</td>



<td>

<div class="d-flex">

<a href="/crud/variance/edit/{{ $y->id }}">
<button class="btn btn-primary btn-sm">Edit</button>
</a>

<form class="ms-1" method="POST" action="/crud/variance/{{ $y->id }}">
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