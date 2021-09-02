@extends('template.main')

@section('content')

<section class="container d-flex justify-content-center my-5">
    <div class="card" style="width: 18rem;">
    <img src="{{asset('img/'.$photo->url)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$photo->name}}</h5>
            <p class="card-text">{{$photo->description}}</p>
            <div class="d-flex justify-content-around">
                <a class="btn btn-primary" href="{{route('photos.edit', $photo->id)}}">Edit</a>
                <form action="{{route('photos.destroy', $photo->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
        </div>
      </div>
</section>

@endsection