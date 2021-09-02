@extends('template.main')

@section('content')

<section class="container">
    <h2 class="my-5">Ajoutez une photo</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="d-flex flex-column w-75" action="{{route('photos.store')}}" method="POST">
        @csrf

        <label for="url">Url : </label>
        <input value="{{old('url')}}" type="text" name="url" id="url">

        <label for="name">Nom : </label>
        <input value="{{old('name')}}" type="text" name="name" id="name">

        <label for="description">Description : </label>
        <input value="{{old('description')}}" type="text" name="description" id="description">

        <button class="btn btn-success w-25 mt-3" type="submit">Ajouter</button>
    </form>
</section>

@endsection

