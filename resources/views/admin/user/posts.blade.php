@extends('layouts.app')

@section('metaTitle')
    DB BOOLPRESS | {{$user->name}} | POSTS
@endsection

@section('content')
    
    <section id="section_table_posts" class="container-fluid">

        {{-- Title --}}
        <h3 class="text-white">Posts di {{$user->name}}</h3>

        {{-- Table posts --}}
        <table class="table table-striped table-secondary">

            {{-- Table header --}}
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">User</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">Tags</th>
                    <th scope="col">Image</th>
                    <th scope="col">Publication date</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Updated at</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>

            {{-- Table body --}}
            <tbody>
                {{-- Foreach posts --}}
                @foreach ($posts as $element)
                    <tr>
                        <td>{{$element->id}}</td>
                        <td>{{$element->title}}</td>
                        <td>{{$element->slug}}</td>
                        <td>
                            <span class="badge badge-pill badge-dark text-white font-weight-bold px-3 py-2">{{$element->user->name}}</span>
                        </td>
                        <td>{{$element->description}}</td>
                        <td>{{$element->category ? $element->category->name : 'null'}}</td>
                        <td>
                            @foreach ($element->tags as $tag)
                            <span style="background-color: {{$tag->color}}; font-size: 14px;" class="badge badge-pill py-2 px-3 my-2 text-dark">{{$tag->name}}</span>
                            @endforeach
                        </td>
                        <td>
                            <figure class="img_wrapper">
                                <img src="{{$element->image}}" alt="">
                            </figure>
                        </td>
                        <td>{{$element->publication_date == null ? 'null' : $element->publication_date}}</td>
                        <td>{{$element->created_at}}</td>
                        <td>{{$element->updated_at}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{route('admin.posts.edit', $element)}}">Modifica</a>
                        </td>
                        <td>
                            <form action="{{route('admin.posts.destroy', $element)}}" method="POST">
                                {{-- Key --}}
                                @csrf
                                {{-- Method delete --}}
                                @method('DELETE')
    
                                {{-- BTN submit delete --}}
                                <button class="btn btn-danger" type="submit">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>

    </section>

@endsection