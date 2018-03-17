@extends('layouts.sistema')

@section('content')

    <section class="content-header">
        <h1><i class="fa fa-book"></i> Detalhes do projeto</h1>

        <ol class="breadcrumb">
            {{--<li><a href="http://bpocallaghan.co.za/admin/faqs"><i class="fa fa-question"></i> FAQ</a></li>--}}
            <li><a href="http://bpocallaghan.co.za/admin/faqs"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="">Projeto</a></li>
        </ol>
    </section><br>

	<section class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-body">
					<div class="row">
						<form action="">
							<div class="col-md-12 form-group">
								<label for="">Projeto</label>
								<input value="Projeto X" disabled type="text" class="form-control">
							</div>
							<div class="col-md-4 form-group">
								<label for="">Cliente</label>
								<input value="Cliente Y" disabled type="text" class="form-control">
							</div>
							<div class="col-md-4 form-group">
								<label for="">Integrador</label>
								<input value="Integrador Z" disabled type="text" class="form-control">
							</div>
							<div class="col-md-4 form-group">
								<label for="">Valor R$</label>
								<input value="Projeto X" disabled type="text" class="form-control">
							</div>
							<div class="col-md-4 form-group">
								<label for="">Status</label>
								<select class="form-control" id="">
									<option selected="" value="">Aprovado</option>
									<option value="">Em espera</option>
								</select>
							</div>
						</div>
						<button class="btn btn-primary">Salvar</button>
					</form>
					<hr> 	

				</div>
			</div>
		</div>
	</section>

@stop