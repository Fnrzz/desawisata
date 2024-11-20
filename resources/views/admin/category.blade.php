@extends('admin.layouts.layout')

@section('content')
    <section>
        <div class="container py-3">
            <h3>Halaman Data Kategori</h3>
            <div class="row mt-3">
                <div class="col">
                    <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container py-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('admin.category.delete', $category->id) }}"
                                    class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
