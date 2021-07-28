@extends('template/index')

@section('content')

<form action="{{route('store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input name='nom' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          <label for="exampleInputEmail1" class="form-label">Quantite</label>
          <input name="quantite" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          <label for="exampleInputEmail1" class="form-label">Url</label>
          <input name="url" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection