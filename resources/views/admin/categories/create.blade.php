@extends('layouts.app')

@section('metaTitle', 'DB BOOLPRESS | AGGIUNGI CATEGORIA')

@section('content')

    {{-- Sezione form create wrapper --}}
    <section id="form_create_wrapper" class="container text-white">

        {{-- Form aggiungi elemento --}}
        <form action="{{route('admin.categories.store')}}" method="POST">

            {{-- key --}}
            @csrf

            {{-- Title --}}
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Inserisci il nome della categoria" value="{{old('name')}}">

                {{-- Error validation --}}
                @error('name')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                @enderror
            </div>

            {{-- BTN aggiungi --}}
            <div class="btn_add d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Aggiungi</button>
            </div>

        </form>
    </section>

@endsection