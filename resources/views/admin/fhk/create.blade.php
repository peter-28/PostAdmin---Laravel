@extends('layouts.app')
@section('title', 'DOC FHK')
@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('fhk.index') }}">Fhk</a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>
@endsection
@section('content')
    <form action="{{route('fhk.store')}}" method="post">
        @csrf
        @method('POST')
        <div class="row">
            <div class="col-lg-12">
                <div class="card border-0">
                    <div class="card-header">
                        <h5>Form Tambah FHK</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul"
                                   placeholder="Masukkan judul" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tema</label>
                            <input type="text" class="form-control" id="tema" name="tema"
                                   placeholder="Masukkan Tema" required>
                        </div>
                        <div class="form-group">
                            <label for="">Bacaan Alkitab</label>
                            <input type="text" class="form-control" id="bacaan_alkitab" name="bacaan_alkitab"
                                   placeholder="Yes : Bacaan Alkitab" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Khotbah</label>
                            <input type="date" class="form-control" id="tanggal_khotbah" name="tanggal_khotbah"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="">File</label>
                            <input type="file" class="form-control" name="file" id="file">
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('fhk.index')}}" class="btn btn-secondary"> <i
                                class="bi bi-arrow-left"></i> Kembali</a>
                        <button type="submit" class="btn btn-success">Save Change</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@push('page_scripts')
@endpush
