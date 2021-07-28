@extends('template.index')
@section('content')
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src=".../100px180/" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$item->nom}}</h5>
    <p class="card-text">{{$item->quantite}}</p>
    <p class="card-text">{{$item->url}}</p>
    <form action="{{route('delete', $item->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>

  </div>
</div>
@endsection