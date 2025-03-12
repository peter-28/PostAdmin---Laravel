@extends('layouts.app')

@section('title', 'Home')

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item active">Product</li>
    </ol>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-lg-12">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title">Master Data Product</h5>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Create</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="table-product">
                                <thead>
                                    <tr>
                                        <th class="w-5p">No</th>
                                        <th>Nama</th>
                                        <th class="w-15p">Qty</th>
                                        <th class="w-15p">Price</th>
                                        <th class="w-25p">Description</th>
                                        <th class="w-5p">Act</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->qty }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>
                                                <button class="btn btn-warning btn-sm" title="edit"><i
                                                        class="bi bi-pencil-square"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm" title="delete"
                                                    onclick="deleteData({{ $item->id }})"><i
                                                        class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modal')
    @include('product.modal')
@endsection
@push('page-scripts')
    <script>
        $(document).ready(function() {
            let table = new DataTable('#table-product');
        });

        function deleteData(id) {
            Swal.fire({
                title: "Apakah anda yakin?",
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, hapus!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `/product/destroy/${id}`,
                        method: "delete",
                        data: {
                            _token: $('meta[name="csrf-token"]').attr("content")
                        },
                        success: function(response) {
                            if (response.status == 300) {
                                Swal.fire({
                                    title: "Drag me!",
                                    icon: "error",
                                    draggable: true
                                });
                                return;
                            }

                            Swal.fire({
                                title: response.message,
                                icon: "success",
                                draggable: true
                            });
                            window.location.reload();
                        },
                        error: function(err) {
                            console.log(err);
                        }
                    });
                }
            });
        }
    </script>
@endpush
