<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('public/plugins/datatables/dataTables.bootstrap.css') }}">

@extends('layouts.sistema')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
       Todos os projetos
      @if(Auth::user()->hasRole('integrador') or Auth::user()->hasRole('banco'))
          <button class="btn  btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Novo Projeto</button>
      @endif
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
            <th>Projeto</th>
            <th>Cliente</th>
            <th>Valor</th>
            <th>Status</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <tr>
              <td> Projeto X </td>
              <td> Cliente Y </td>
              <td> PR$ 90.000,00 </td>
              <td>Aprovado</td>
              <td>
                  <a href="{{ route('projetos.detalhes', 1) }}" class="btn btn-xs btn-primary btn-flat"><i class="fa fa-eye"></i> Visualizar</a>
              </td>
          </tr>

        </tbody>
        
      </table>
    </div>  
  </div>
<!-- /.box-body -->
@endsection

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Novo projeto</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="">Projeto</label>
          <input type="text" class="form-control">
        </div>
         <div class="form-group">
          <label for="">Integrador</label>
          <select class="form-control" id="">
              <option value="">Integrador X</option>
              <option value="">Integrador Y</option>
              <option value="">Integrador Z</option>
              <option value="">Integrador K</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Valor</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Prazo</label>
          <input type="date" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>

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