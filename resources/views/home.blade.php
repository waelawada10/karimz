<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-icons.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-icons-1.10.5/font/bootstrap-icons.css') }}">

<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>



<table class="table">
  <thead>
    <tr>
    <th scope="col">#IDs</th>
      <th scope="col">categories </th>
      <th scope="col">item </th>
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



<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>


