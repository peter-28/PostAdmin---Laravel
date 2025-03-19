@extends('layouts.app')
@section('title', 'Gembalas')
@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Gembalas</li>
    </ol>
@endsection
@section('content')
    @include('admin.any.index')
    <div class="row">
        <div class="col-lg-12">
            <div class="card border-0">
                <div class="card-header">
                    <h5>List Data Gembala</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{ route('gembala.create') }}" class="btn btn-primary"> + Create</a>
                        <button class="btn btn-danger"> Export</button>
                    </div>
                    <table class="table table-bordered table-hover" id="table-gembala">
                        <thead>
                            <tr class="bg-gray-500">
                                <th class="w-3p">#</th>
                                <th class="w-10p">Kode</th>
                                <th class="w-20p">Nama</th>
                                <th class="w-10p">Tanggal Lahir</th>
                                <th class="w-10p">Tanggal Diteguhkan</th>
                                <th class="w-5p">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gembalas as $key => $doc)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $doc->kode }}</td>
                                    <td>{{ $doc->nama }}</td>
                                    <td>{{ $doc->tgl_lahir }}</td>
                                    <td>{{ date_format($doc->tgl_peneguhan, strtotime('Y-m-d')) }}</td>
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
                            {{ $gembalas->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('page_scripts')
@endpush
