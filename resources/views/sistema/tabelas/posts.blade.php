<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('public/plugins/datatables/dataTables.bootstrap.css') }}">

@extends('layouts.sistema')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
       Todos os posts
        <!-- <small>Optional description</small>-->
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active"> Posts</li>
    </ol>
  </section><br>

  <div class="box box-success">
    <div class="box-header">
      <h3 class="box-title">Todas as publicacoes</h3>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>id</th>
            <th>Title</th>
            <th>Author</th>
            <th>Category</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td> <a href="#" target="_blank" class="btn"><i class="fa  fa-search"></i></a> Internet
              Explorer 4.0
            </td>
            <td>Lucas</td>
            <td>Moda</td>
            <td>20/02/2017</td>
            <td>
                <a href="" class="btn btn-primary btn-flat"><i class="fa  fa-edit"></i> Editar</a>
                <a href="" class="btn btn-danger btn-flat"><i class="fa  fa-trash"></i> Excluir</a>
            </td>
          </tr>
        </tbody>
        
      </table>
    </div>  
  </div>
<!-- /.box-body -->
@endsection

<!-- DataTables -->
<script src="{{ asset('public/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('public/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{ asset('public/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('public/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('public/dist/js/demo.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>