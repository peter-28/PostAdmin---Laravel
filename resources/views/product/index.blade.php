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
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="w-5p">No</th>
                                        <th>Nama</th>
                                        <th class="w-15p">Qty</th>
                                        <th class="w-25p">Description</th>
                                        <th class="w-5p">Act</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Hanphone</td>
                                        <td>100</td>
                                        <td>Samsung S25 Ultra</td>
                                        <td>
                                            <button class="btn btn-warning btn-sm"><i
                                                    class="bi bi-pencil-square"></i></button>
                                            <button class="btn btn-primary btn-sm" onclick="delete()" pointer><i
                                                    class="bi bi-info-circle"></i></button>
                                            <button id="clickButton">Click Me!</button>
                                        </td>
                                    </tr>
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
@push('page_scripts')
    <script>
        function delete (){
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });
                }
            });
        }

        $(document).ready(function () {
            $('#clickButton').click(function () {
                alert('Button was clicked!');
            });
        });
    </script>
@endpush