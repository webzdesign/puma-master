<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}" />

<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

{{-- <link rel="shortcut icon" type="image/jpg" href="{{ asset((Helper::settings()->favicon) ?  'public/favicon/' . Helper::settings()->favicon : "") }}"/> --}}
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('public/assets/plugins/fontawesome-free/css/all.min.css') }}">

<!-- Select2 Css -->
<link rel="stylesheet" href="{{ asset('public/assets/plugins/select2/css/select2.min.css') }}">

<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet"
    href="{{ asset('public/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
<!-- iCheck -->
<link rel="stylesheet" href="{{ asset('public/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
<!-- JQVMap -->
<link rel="stylesheet" href="{{ asset('public/assets/plugins/jqvmap/jqvmap.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('public/assets/dist/css/adminlte.min.css') }}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ asset('public/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{ asset('public/assets/plugins/daterangepicker/daterangepicker.css') }}">
<!-- Date picker -->
<link rel="stylesheet" href="{{ asset('public/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('public/assets/plugins/summernote/summernote-bs4.css') }}">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('public/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet"
    href="{{ asset('public/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet"
    href="{{ asset('public/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

<link rel="stylesheet"
    href="{{ asset('public/assets/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css') }}">

{{-- dropzone --}}
<link rel="stylesheet" href="{{ asset('public/assets/plugins/dropzone/dropzone.min.css') }}">
{{-- filepond --}}
<link rel="stylesheet" href="{{ asset('public/assets/plugins/filepond/filepond.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/plugins/filepond/filepond-plugin-file-poster.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/plugins/filepond/filepond-plugin-image-preview.css') }}">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">


<style>
    .requride_cls {
        padding-left: 1px;
        color: red;
    }

    * {
        font-family: 'PT Sans', sans-serif;
        letter-spacing: 0.02cm;
    }

    .datepicker-dropdown {
        z-index: 9999 !important;
    }

    .error {
        color: red;
    }

</style>
