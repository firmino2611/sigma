<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('public/plugins/datatables/dataTables.bootstrap.css') }}">

@extends('layouts.sistema')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
       Todos os respondidos
        <!-- <small>Optional description</small>-->
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active"> Projetos</li>
    </ol>
  </section><br>

  <div class="box box-success">
    

    <!-- /.box-header -->
    <div class="box-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Cliente</th>
            <th>Empresa</th>
            <th>Telefone</th>
            <th>Status</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <tr>
              <td> Cliente X </td>
              <td> Empresa X </td>
              <td> 38 99988-7744 </td>
              <td>Em produção</td>
              <td>
                  <a href="{{ route('banco.clientes.detalhes', 1) }}" class="btn btn-xs btn-primary btn-flat"><i class="fa fa-eye"></i> Visualizar</a>
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