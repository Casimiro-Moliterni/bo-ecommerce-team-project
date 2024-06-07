@extends('layouts.admin')
@section('content')
    <h2>Lista Prodotti</h2>
    <table class="table  text-center">
        <thead>
            <tr class="my_tr_active">
                <th>id</th>
                <th>name</th>
                <th>slug</th>
                <th>create at</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr class="my_tr_active">
                    <td>{{$product->id }}</td>
                    <td>{{$product->name }}</td>
                    <td>{{$product->slug }}</td>
                    <td>{{$product->created_at }}</td>
                    {{-- <td>
                        <div class="d-flex align-items-center justify-content-center gap-3">

                            <a class="btn btn-primary"
                                href="{{ route('admin.projects.show', ['project' =>$product->slug]) }}">view</a>

                            <a class="ms_update_icon btn btn-success"
                                href="{{ route('admin.projects.edit', ['project' =>$product->slug]) }}">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <div>
                                <form action="{{ route('admin.projects.destroy', ['project' =>$product->slug]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        </div>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection