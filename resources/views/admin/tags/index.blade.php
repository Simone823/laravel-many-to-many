@extends('layouts.app')

@section('metaTitle', 'DB BOOLPRESS | TAGS')

@section('content')

    {{-- Sezione tabella tags --}}
    <section id="section_table_tags">

        {{-- Title --}}
        <h3 class="text-white">Tags</h3>

        {{-- Table tags --}}
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

            {{-- Foreach tags --}}
            @foreach ($tags as $element)
            <tr>
                <td>{{$element->id}}</td>
                <td>{{$element->name}}</td>
                <td>{{$element->slug}}</td>
                <td>{{$element->created_at}}</td>
                <td>{{$element->updated_at}}</td>
                <td>
                    <a class="btn btn-warning" href="{{route('admin.tags.edit', $element)}}">Modifica</a>
                </td>
                <td>
                    <form action="{{route('admin.tags.destroy', $element)}}" method="POST">

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
