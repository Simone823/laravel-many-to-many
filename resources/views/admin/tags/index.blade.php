@extends('layouts.app')

@section('metaTitle', 'DB BOOLPRESS | TAGS')

@section('content')

    {{-- Sezione tabella tags --}}
    <section id="section_table_tags" class="container">

        {{-- Title --}}
        <h3 class="text-white">Tags</h3>

        {{-- Table tags --}}
        <table class="table table-striped table-secondary">

            {{-- Table header --}}
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">Updated_at</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>

            {{-- Table body --}}
            <tbody>
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
            </tbody>   

        </table>

    </section>

@endsection
