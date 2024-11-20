@extends('admin.layouts.layout')

@section('content')
    <section>
        <div class="container py-3">
            <h3>Halaman Data Wisata</h3>
            <div class="row mt-3">
                <div class="col">
                    <a href="{{ route('admin.article.create') }}" class="btn btn-primary">Tambah Data</a>
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
                        <th scope="col">Nama Wisata</th>
                        <th scope="col">Kategori Wisata</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->category->name }}</td>
                            <td>
                                <a href="{{ route('admin.article.edit', $article->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('admin.article.delete', $article->id) }}"
                                    class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
