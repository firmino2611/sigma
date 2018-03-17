@extends('layouts.sistema')

@section('styles')
	
@endsection

@section('content')
		
	
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	      	<i class="fa fa-book"></i>
	        LIsta de tarefas
	        <small>3 new messages</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Tarefas</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <div class="row">
	        <div class="col-md-3">
	          <div class="box box-solid">
	            {{-- <div class="box-header with-border">
	              <h3 class="box-title">Folders</h3>

	              <div class="box-tools">
	                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
	                </button>
	              </div>
	            </div> --}}
	            <div class="box-body no-padding" style="display: block;">
	              <ul class="nav nav-pills nav-stacked">
	                <li class=""><a href="#"><i class="fa fa-inbox"></i> Tarefas
	                  <span class="label label-primary pull-right">3</span></a></li>

	                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope-o"></i> Nova tarefa</a></li>
	              </ul>
	            </div>
	            <!-- /.box-body -->
	          </div>
	          <!-- /. box -->
	          
	        </div>
	        <!-- /.col -->
	        <div class="col-md-9">
	          <div class="box box-primary">
	            <div class="box-header with-border">
	              <h3 class="box-title">Tarefas</h3>

	              
	              <!-- /.box-tools -->
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body ">
	              
	              <div class="table-responsive mailbox-messages">
	                <table id="example2" class="table table-hover table-striped">
	                	<thead>
	                		<tr>
	                			<th>Titulo</th>
	                			<th>Assunto</th>
	                			<th>Data</th>
	                		</tr>
	                	</thead>
	                  	<tbody>
		                 	<tr>
			                    <td class="mailbox-name"><a href="{{ route('agenda.detalhe', 1) }}">Tarefa 001</a></td>
			                    <td class="mailbox-subject"> Trying to find a solution to this problem...
			                    </td>
			                    <td class="mailbox-date">5 mins ago</td>
		                  	</tr>
		                  	<tr>
			                    <td class="mailbox-name"><a href="{{ route('agenda.detalhe', 1) }}">Tarefa 002</a></td>
			                    <td class="mailbox-subject"> Trying to find a solution to this problem...
			                    </td>
			                    <td class="mailbox-date">5 mins ago</td>
		                  	</tr>
		                  	<tr>
			                    <td class="mailbox-name"><a href="{{ route('agenda.detalhe', 1) }}">Tarefa 003</a></td>
			                    <td class="mailbox-subject"> Trying to find a solution to this problem...
			                    </td>
			                    <td class="mailbox-date">5 mins ago</td>
		                  	</tr>
	                 
	                  	</tbody>
	                </table>
	                <!-- /.table -->
	              </div>
	              <!-- /.mail-box-messages -->
	            </div>
	            <!-- /.box-body -->
	           
	          </div>
	          <!-- /. box -->
	        </div>
	        <!-- /.col -->
	      </div>
	      <!-- /.row -->
	    </section>
	    <!-- /.content -->

@endsection

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Novo integrador</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
        	<label for="">Titulo</label>
        	<input type="text" class="form-control">
        </div>
         <div class="form-group">
        	<label for="">Assunto</label>
        	<input type="text" class="form-control">
        </div>
         <div class="form-group">
        	<label for="">Descrição</label>
        	<textarea id="summernote" type="text" rows="5" class="form-control summernote"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>

@section('scripts')
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
    
  });
</script>
@endsection