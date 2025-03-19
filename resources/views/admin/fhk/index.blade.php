@extends('layouts.app')
@section('title', 'DOC FHK')
@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Fhk</li>
    </ol>
@endsection
@section('content')
    @include('admin.any.index')
    <div class="row">
        <div class="col-lg-12">
            <div class="card border-0">
                <div class="card-header">
                    <h5>List Data FHK</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{ route('fhk.create') }}" class="btn btn-primary"> + Create</a>
                        <button class="btn btn-danger"> Export</button>
                    </div>
                    <table class="table table-bordered table-hover" id="table-fhk">
                        <thead>
                            <tr class="bg-gray-500">
                                <th>ID</th>
                                <th>Judul</th>
                                <th>Tema</th>
                                <th>Bacaan Alkitab</th>
                                <th>Tanggal Khotbah</th>
                                <th>Doc</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fhk as $key => $doc)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $doc->judul }}</td>
                                    <td>{{ $doc->tema }}</td>
                                    <td>{{ $doc->bacaan_alkitab }}</td>
                                    <td>{{ $doc->tanggal_khotbah }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('fhk.download', basename($doc->file)) }}"
                                            class="btn btn-outline-primary btn-sm">
                                            <i class="bi bi-cloud-download"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-outline-warning btn-sm"><i
                                                class="bi bi-pencil-square"></i></button>
                                        <button type="button" class="btn btn-outline-danger btn-sm"><i
                                                class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end mt-2">
                        <div class="text-right">
                            {{ $fhk->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('page_scripts')
@endpush
