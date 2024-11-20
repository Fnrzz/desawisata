@extends('admin.layouts.layout')

@section('content')
    <div class="container py-3">
        <h3>Halaman Tambah Article</h3>
        <div class="row mt-3">
            <div class="col-8">
                <form action="{{ route('admin.article.update', $article->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ $article->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Deskripsi</label>
                        <textarea type="text" class="form-control" id="body" name="body" rows="5">{{ $article->body }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar</label>
                        <div class="mb-3">
                            <img src="{{ asset('storage/images/' . $article->image) }}" class="img-thumbnail">
                        </div>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Kategori</label>
                        <select class="form-select" id="category_id" name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $category->id == $article->category_id ? 'selected' : '' }}>{{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
