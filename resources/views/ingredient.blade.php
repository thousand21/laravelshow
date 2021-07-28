@extends('template.index')
@section('content')
<h1>Ingredients</h1>
    
    
    <section>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Quantite</th>
                <th scope="col">Show</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $item)
              <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->nom}}</td>
                <td>{{$item->quantite}}</td>
                <td><a href="{{route('show',$item->id)}}" class="btn btn-info">Show</a></td>
                <td>
                <form action="{{route('delete', $item->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </section>
@endsection