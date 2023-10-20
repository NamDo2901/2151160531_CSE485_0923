@extends('layout.app')
@section('content')
<div class="content">
<thead>
<tr>
<th scope="col">id</th>
<th scope="col">artist_name</th>
<th scope="col">description</th>
<th scope="col">art_type</th>
<th scope="col">media_link</th>
<th scope="col">cover_image</th>
<th scope="col">sửa</th>
<th scope="col">Xoá</th>
</tr>
</thead>
<tbody>
@foreach ($Artworks as $item)
<tr>
<th scope="row">{{$item->id}}</th>
<td>{{$item->artist_name}}</td>
<td>{{$item->description}}</td>
<td>{{$item->art_type}}</td>
<td><a href="#idlink{{$item->id}}">{{$item->media_link}}</a></td>
<td><a href="#idimage{{$item->id}}">{{$item->cover_image}}</a></td>
<td><a href="{{ route('Artworks.edit', $item->id) }}"><i class="fa-solid fa-user-pen"></i></a></td>
<td ><button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#deleteModal-{{$item->id}}">
<i class=" delete fa-solid fa-trash"></i>
</button></td>
{{-- Modal --}}
<div class="modal fade " id="deleteModal-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
Bạn có chắc chắn muốn xoá artist {{$item->artist_name}}
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
<form action="{{route('Artworks.destroy',$item->id)}}" method="POST">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Xoá</button>
</form>
</div>
</div>
</div>
</div>
{{-- end Modal --}}
@endforeach


</tbody>

</div>
@endsection

