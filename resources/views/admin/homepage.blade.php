@extends('layouts.app')

@section('metaTitle', 'DB BOOLPRESS | HOMEPAGE')

@section('content')

    {{-- Sezione tabella users --}}
    <section id="section_table_users" class="mb-5">

        {{-- Title --}}
        <h3 class="text-white">Users</h3>

        {{-- Table users --}}
        <table class="table_users">

            {{-- Table header --}}
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Email_verified_at</th>
                <th>Password</th>
                <th>Remember_token</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </tr>

            {{-- Foreach users --}}
            @foreach ($users as $element)
                <tr>
                    <td>{{$element->id}}</td>
                    <td>{{$element->name}}</td>
                    <td>{{$element->email}}</td>
                    <td>{{$element->email_verified_at == null ? 'null' : $element->email_verified_at}}</td>
                    <td>{{$element->password}}</td>
                    <td>{{$element->remember_token == null ? 'null' : $element->remember_token}}</td>
                    <td>{{$element->created_at}}</td>
                    <td>{{$element->updated_at}}</td>
                </tr>
            @endforeach

        </table>

    </section>

    {{-- Sezione tabella categories --}}
    <section id="section_table_categories" class="mb-5">

        {{-- Title --}}
        <h3 class="text-white">Categories</h3>

        {{-- Table categories --}}
        <table class="table_categories">

            {{-- Table header --}}
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </tr>

            {{-- Foreach categories --}}
            @foreach ($categories as $element)
            <tr>
                <td>{{$element->id}}</td>
                <td>{{$element->name}}</td>
                <td>{{$element->slug}}</td>
                <td>{{$element->created_at}}</td>
                <td>{{$element->updated_at}}</td>
            </tr>
            @endforeach

        </table>

    </section>

    {{-- Sezione tabella tags --}}
    <section id="section_table_tags" class="mb-5">

        {{-- Title --}}
        <h3 class="text-white">Tags</h3>

        {{-- Table categories --}}
        <table class="table_tags">

            {{-- Table header --}}
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </tr>

            {{-- Foreach categories --}}
            @foreach ($tags as $element)
            <tr>
                <td>{{$element->id}}</td>
                <td>
                    <span style="background-color: {{$element->color}}; font-size: 14px;" class="badge badge-pill py-2 px-3 my-2 text-dark">{{$element->name}}</span>
                </td>
                <td>{{$element->slug}}</td>
                <td>{{$element->created_at}}</td>
                <td>{{$element->updated_at}}</td>
            </tr>
            @endforeach

        </table>

    </section>

    
    {{-- Sezione tabella posts --}}
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
                <th>User</th>
                <th>Description</th>
                <th>Category_id</th>
                <th>Tags</th>
                <th>Image</th>
                <th>Publication_date</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </tr>

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
                </tr>
            @endforeach

        </table>

    </section>


@endsection