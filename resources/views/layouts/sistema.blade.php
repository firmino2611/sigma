<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>BDMG</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="{{ asset('public/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/app.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('public/dist/css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/plugins/iCheck/square/blue.css') }}">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link rel="stylesheet" href="{{ asset('public/dist/css/skins/skin-blue.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/dist/css/skins/skin-green.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/dist/css/skins/_all-skins.min.css') }}">

        @yield('styles')

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <!--
    BODY TAG OPTIONS:
    =================
    Apply one or more of the following classes to get the
    desired effect
    |---------------------------------------------------------|
    | SKINS         | skin-blue                               |
    |               | skin-black                              |
    |               | skin-purple                             |
    |               | skin-yellow                             |
    |               | skin-red                                |
    |               | skin-green                              |
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
    -->
    <body class="hold-transition fixed skin-green-light sidebar-mini">
        <div class="wrapper">
            <!-- Main Header -->
            @include('layouts._sistema._navbar')

            <!-- Left side column. contains the logo and sidebar -->
            @include('layouts._sistema._sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                    <!-- Main content -->
                 <section class="content">
                    @if(Session::has('message'))
                        <div class="alert alert-{{ Session::get('message')['class'] }}">
                            {{ Session::get('message')['content'] }}
                        </div>
                    @endif
                    <!-- Your Page Content Here -->
                    @yield('content')

                 </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Main Footer -->
          @include('layouts._sistema._footer')

            <!-- Add the sidebar's background. This div must be placed
                     immediately after the control sidebar -->
              <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED JS SCRIPTS -->

        <!-- jQuery 2.2.3 -->
        <script src="{{ asset('public/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
        <!-- DataTables -->
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="{{ asset('public/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('public/dist/js/app.min.js') }}"></script>
        <!-- include summernote css/js-->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
        <script>
            $(document).ready(function() {
                $('.summernote').summernote({
                    height: 200,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: true,                 // set focus to editable area after initializing summernote
                    
                });

                $('#example2').DataTable({
                    "columnDefs": [
                        {"orderable": true}
                    ],
                    "language": {
                        "zeroRecords": "Nenhuma informação encontrada",
                        "infoEmpty": "Mostrando 0 resultados encontrados",
                        "infoFiltered":   "(filtro aplicado nas _MAX_ entradas)",
                        "info":  "Mostrando _START_ a _END_ do total de _TOTAL_ encontradas",
                        "search": "Pesquisa:",
                        "lengthMenu":     "Mostrar _MENU_ resultados",
                        "paginate": {
                            "first":      "First",
                            "last":       "Last",
                            "next":       "Próximo",
                            "previous":   "Anterior"
                        },
                    }
                });
            });
        </script>

        @yield('scripts')
        <!-- Optionally, you can add Slimscroll and FastClick plugins.
               Both of these plugins are recommended to enhance the
               user experience. Slimscroll is required when using the
               fixed layout. -->
    </body>
</html>
