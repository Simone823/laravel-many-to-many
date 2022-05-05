@extends('layouts.app')

@section('metaTitle', 'DB BOOLPRESS | POSTS')

@section('content')

    <section id="section_table_posts">
        
        {{-- Title --}}
        <h3 class="text-white">Posts</h3>
    
        {{-- Table posts --}}
        <table class="table_posts">
    
            {{-- Table header --}}
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Description</th>
                <th>Category_id</th>
                <th>Image</th>
                <th>Publication_date</th>
                <th></th>
                <th></th>
            </tr>
    
            {{-- Foreach posts --}}
            @foreach ($posts as $element)
                <tr>
                    <td>{{$element->id}}</td>
                    <td>{{$element->title}}</td>
                    <td>{{$element->slug}}</td>
                    <td>{{$element->description}}</td>
                    <td>{{$element->category ? $element->category->name : 'null'}}</td>
                    <td>
                        <figure class="img_wrapper">
                            <img src="{{$element->image}}" alt="">
                        </figure>
                    </td>
                    <td>{{$element->publication_date == null ? 'null' : $element->publication_date}}</td>
                    {{-- <td><a href="http://">Visualizza</a></td> --}}
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
    
        </table>

    </section>
   
@endsection