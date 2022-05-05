@extends('layouts.app')

@section('metaTitle')
    DB BOOLPRESS | {{$category->name}}
@endsection

@section('content')
    
    {{-- Sezione tabella categories --}}
    <section id="section_table_categories">

        {{-- Title --}}
        <h3 class="text-white">Categories</h3>

        {{-- Table categories --}}
        <table class="table_categories">

            {{-- Table header --}}
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Slug</th>
            </tr>

            {{-- Category --}}
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->slug}}</td>
            </tr>

        </table>

    </section>

    {{-- Sezione form create wrapper --}}
    <section id="form_create_wrapper" class="container text-white">

        {{-- Form aggiungi elemento --}}
        <form action="{{route('admin.categories.update', $category)}}" method="POST">

            {{-- key --}}
            @csrf

            {{-- Method --}}
            @method('PUT')

            {{-- Name --}}
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Inserisci il nome della categoria" value="{{old('name', $category['name'])}}">

                {{-- Error validation --}}
                @error('name')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                @enderror
            </div>

            {{-- BTN aggiungi --}}
            <div class="btn_add d-flex justify-content-center">
                <button type="submit" class="btn btn-warning">Modifica</button>
            </div>

        </form>
    </section>



@endsection