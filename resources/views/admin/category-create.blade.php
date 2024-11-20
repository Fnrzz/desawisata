@extends('admin.layouts.layout')

@section('content')
    <div class="container py-3">
        <h3>Halaman Tambah Kategori</h3>
        <div class="row mt-3">
            <div class="col-6">
                <form action="{{ route('admin.category.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
