<!-- Dropezone CSS -->
<link rel="stylesheet" href="{{ asset('css/dropzone.css') }}">
<!-- CoreUI CSS -->
@vite('resources/sass/app.scss')
<link
    href="https://cdn.datatables.net/v/bs4/jszip-3.10.1/dt-1.13.5/b-2.4.1/b-html5-2.4.1/b-print-2.4.1/sl-1.7.0/datatables.min.css"
    rel="stylesheet">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />
@stack('page_css')

{{-- @livewireStyles --}}

<style>
    div.dataTables_wrapper div.dataTables_length select {
        width: 65px;
        display: inline-block;
    }

    .select2-container--default .select2-selection--single {
        background-color: #fff;
        border: 1px solid #D8DBE0;
        border-radius: 4px;
    }

    .select2-container--default .select2-selection--multiple {
        background-color: #fff;
        border: 1px solid #D8DBE0;
        border-radius: 4px;
    }

    .select2-container .select2-selection--multiple {
        height: 35px;
    }

    .select2-container .select2-selection--single {
        height: 35px;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: 33px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow b {
        margin-top: 2px;
    }

    .w-3p {
        width: 3% !important;
    }

    .w-5p {
        width: 5% !important;
    }

    .w-8p {
        width: 8% !important;
    }

    .w-10p {
        width: 10% !important;
    }

    .w-12p {
        width: 12% !important;
    }

    .w-15p {
        width: 15% !important;
    }

    .w-20p {
        width: 20% !important;
    }

    .w-25p {
        width: 25% !important;
    }
</style>
