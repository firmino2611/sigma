@extends('layouts.sistema')

@section('content')

    <section class="content-header">
        <h1><i class="fa fa-book"></i> Detalhes do cliente</h1>

        <ol class="breadcrumb">
            {{--<li><a href="http://bpocallaghan.co.za/admin/faqs"><i class="fa fa-question"></i> FAQ</a></li>--}}
            <li><a href="http://bpocallaghan.co.za/admin/faqs"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="">Clientes</a></li>
        </ol>
    </section><br>

	<section class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-body">
					<h3>Informações</h3>
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="">Nome</label>
							<input value="Cliente X" disabled type="text" class="form-control">
						</div>
						<div class="col-md-4 form-group">
							<label for="">Empresa</label>
							<input value="Empresa X" disabled type="text" class="form-control">
						</div>
						<div class="col-md-4 form-group">
							<label for="">Contato</label>
							<input value="38 9988-7788" disabled type="text" class="form-control">
						</div>
						<div class="col-md-4 form-group">
							<label for="">Status</label>
							<input value="{{ $status }}" disabled type="text" class="form-control">
						</div>
					</div>
					<hr> 	

				</div>
			</div>
		</div>
	</section>

@stop