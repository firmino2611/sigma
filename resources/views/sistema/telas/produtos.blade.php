@extends('layouts.sistema')

@section('content')

    <section class="content-header">
        <h1><i class="fa fa-book"></i> Detalhes do produto</h1>

        <ol class="breadcrumb">
            {{--<li><a href="http://bpocallaghan.co.za/admin/faqs"><i class="fa fa-question"></i> FAQ</a></li>--}}
            <li><a href="http://bpocallaghan.co.za/admin/faqs"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="">Produto</a></li>
        </ol>
    </section><br>

	<section class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-body">
					<div class="row">
						<form action="">
							<div class="col-md-12 form-group">
								<label for="">Produto</label>
								<input value="Projeto X"  type="text" class="form-control">
							</div>
							<div class="col-md-4 form-group">
								<label for="">Fornecedor</label>
								<input value="Cliente Y"  type="text" class="form-control">
							</div>
							<div class="col-md-4 form-group">
								<label for="">Quantidade</label>
								<input value="Integrador Z"  type="text" class="form-control">
							</div>
							<div class="col-md-4 form-group">
								<label for="">Preço R$</label>
								<input value="Projeto X"  type="text" class="form-control">
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