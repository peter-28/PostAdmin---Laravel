<script defer src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script defer src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
<script defer src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
<script defer src="https://unpkg.com/filepond/dist/filepond.js"></script>


@if(\Session::has('message'))
    @php
        $message = Session::get('message');
    @endphp
    <script defer>
        $(function () {
            Toast.fire({
                icon: "{{$message[1]}}",
                title: "{{$message[0]}}"
            });
        });
    </script>
@endif

<script defer>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        onOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
</script>