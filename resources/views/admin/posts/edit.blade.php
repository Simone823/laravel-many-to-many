@extends('layouts.app')

@section('metaTitle')
    DB BOOLPRESS | {{$post->title}}
@endsection

@section('content')
    
    {{-- Sezione table_post --}}
    <section id="section_table_posts" class="container-fluid mb-4">

        {{-- Table --}}
        <table class="table table-striped table-secondary">
    
            {{-- Table header --}}
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">User</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category_id</th>
                    <th scope="col">Tags</th>
                    <th scope="col">Image</th>
                    <th scope="col">Publication_date</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">Updated_at</th>
                </tr>
            </thead>
    
            {{-- Table Body --}}
            <tbody>
                <tr>
                    <td>{{$post['id']}}</td>
                    <td>{{$post['title']}}</td>
                    <td>{{$post['slug']}}</td>
                    <td>
                        <span class="badge badge-pill badge-dark text-white font-weight-bold px-3 py-2">{{$post->user->name}}</span>
                    </td>
                    <td>{{$post['description']}}</td>
                    <td>{{$post->category ? $post->category->name : 'null'}}</td>
                    <td>
                        @foreach ($post->tags as $tag)
                            <span style="background-color: {{$tag->color}}; font-size: 14px;" class="badge badge-pill py-2 px-3 my-2 text-dark">{{$tag->name}}</span>

                        @endforeach
                    </td>
                    <td>
                        <figure class="img_wrapper">
                            <img src="{{$post['image']}}" alt="">
                        </figure>
                    </td>
                    <td>{{$post['publication_date'] == null ? 'null' : $post['publication_date'] }}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                </tr>
            </tbody>
    
        </table>
    </section>

    {{-- Sezione form edit --}}
    <section id="form_edit_wrapper" class="container text-white">

        {{-- Form aggiungi elemento --}}
        <form action="{{route('admin.posts.update', $post)}}" method="POST">
    
            {{-- key --}}
            @csrf
            @method('PUT')
    
            {{-- Title --}}
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="title" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Inserisci il titolo" value="{{old('title', $post['title'])}}">

    
                {{-- Error validation --}}
                @error('title')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
    
    
            {{-- Description --}}
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" cols="30" rows="10" placeholder="Inserisci una descrizione">{{old('title', $post['description'])}}</textarea>

    
                {{-- Error validation --}}
                @error('description')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>

            {{-- Categories --}}
            <div class="form-group">
                <label for="category_id">Categoria</label>
                <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category_id">

                    <option value="">Seleziona una categoria</option>

                    {{-- Foreach variabile categories --}}
                    @foreach ($categories as $element)
                        <option value="{{$element->id}}" {{old('category_id', optional($post->category)->id) == $element->id ? 'selected' : ''}}>{{$element->name}}</option>
                    @endforeach
                </select>

                {{-- Error validation --}}
                @error('category_id')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                @enderror
            </div>

            {{-- Tags --}}
            <div class="form-group">
                <label>Tags</label>

                {{-- Input --}}
                @foreach ($tags as $elTag)
                    <div class="form-check d-flex align-items-center mb-3">
                        <input {{$post->tags->contains($elTag) ? 'checked' : ''}} class="form-check-input @error('tags') is-invalid @enderror" type="checkbox" name="tags[]" value="{{$elTag->id}}" id="tags-{{$elTag->id}}">
                        <label style="background-color: {{$elTag->color}}" class="form-check-label badge badge-pill py-1 px-2 text-dark" for="tags-{{$elTag->id}}">{{$elTag->name}}</label>
                    </div>
                @endforeach

                {{-- Error validation --}}
                @error('tags')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>

    
    
            {{-- Image --}}
            <div class="form-group">
                <label for="image">Immagine</label>
                <input type="text" class="form-control @error('image') is-invalid @enderror" name="image" id="image" placeholder="URL Immagine" value="{{old('title', $post['image'])}}">

    
                {{-- Error validation --}}
                @error('image')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>

            {{-- Users --}}
            <div class="form-group">
                <label for="user_id">Utente</label>
                <select class="form-control @error('user_id') is-invalid @enderror" name="user_id" id="user_id">

                    <option value="">Seleziona un utente</option>

                    {{-- Foreach variabile categories --}}
                    @foreach ($users as $element)
                        <option value="{{$element->id}}" {{old('user_id', optional($post->user)->id) == $element->id ? 'selected' : ''}}>{{$element->name}}</option>
                    @endforeach
                </select>

                {{-- Error validation --}}
                @error('user_id')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>

    
            {{-- Date --}}
            <div class="form-group">
                <label for="publication_date">Data di pubblicazione</label>
                <input type="date" class="form-control @error('publication_date') is-invalid @enderror" name="publication_date" id="publication_date" value="{{old('publication_date', $post['publication_date']) !== null ? $post['publication_date'] : ''}}">

    
                {{-- Error validation --}}
                @error('publication_date')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
    
            {{-- BTN aggiungi --}}
            <div class="btn_add d-flex justify-content-center">
                <button type="submit" class="btn btn-warning font-weight-bold">Modifica</button>
            </div>
    
        </form>

    </section>

@endsection