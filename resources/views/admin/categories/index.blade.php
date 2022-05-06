@extends('layouts.app')

@section('metaTitle', 'DB BOOLPRESS | CATEGORIES')

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
                <th>Created_at</th>
                <th>Updated_at</th>
                <th></th>
                <th></th>
            </tr>

            {{-- Foreach categories --}}
            @foreach ($categories as $element)
                <tr>
                    <td>{{$element->id}}</td>
                    <td>{{$element->name}}</td>
                    <td>{{$element->slug}}</td>
                    <td>{{$element->created_at}}</td>
                    <td>{{$element->updated_at}}</td>
                    <td>
                        <a class="btn btn-warning" href="{{route('admin.categories.edit', $element)}}">Modifica</a>
                    </td>
                    <td>
                        <form action="{{route('admin.categories.destroy', $element)}}" method="POST">

                            {{-- Key --}}
                            @csrf

                            {{-- Method delete --}}
                            @method('DELETE')

                            {{-- Button delete --}}
                            <button class="btn btn-danger" type="submit">Elimina</button>

                        </form>
                    </td>
                </tr>
            @endforeach

        </table>

    </section>

@endsection