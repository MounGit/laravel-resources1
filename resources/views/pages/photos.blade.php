@extends('template.main')


@section('content')

<section class="container d-flex flex-column align-items-center">
    <h2 class="my-5">Photos</h2>
<a class="btn btn-success mb-5" href="{{route('photos.create')}}">Create</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Url</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($photo as $data)
                <tr>
                    <th scope="row">{{$data->id}}</th>
                    <td>
                        <img src="{{asset('img/'.$data->url)}}" style="width: 30px; height: 25px" alt="">
                    </td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->description}}</td>
                    <td class="d-flex justify-content-evenly">
                        <a class="btn btn-primary" href="{{route('photos.edit', $data->id)}}">Edit</a>
                        <a class="btn btn-warning" href="{{route('photos.show', $data->id)}}">Show</a>
                        <form action="{{route('photos.destroy', $data->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
      </table>
</section>

@endsection