@extends('layouts.sistema')

@section('content')

    <section class="content-header">
        <h1><i class="fa fa-book"></i> Detalhes do integrador</h1> 

        <ol class="breadcrumb">
            {{--<li><a href="http://bpocallaghan.co.za/admin/faqs"><i class="fa fa-question"></i> FAQ</a></li>--}}
            <li><a href="http://bpocallaghan.co.za/admin/faqs"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="">Integrador</a></li>
        </ol>
    </section><br>

  <section class="row">
    <div class="col-md-12">
      <div class="box box-success">
        <div class="box-body">
         
          <h3 >Informações</h3>
          <div class="row">
              <div class="col-md-12 form-group">
                <label for="">Integrador</label>
                <input disabled value="Integrador X" type="text" class="form-control">
              </div>
              <div class="col-md-4 form-group">
                <label for="">Email</label>
                <input disabled value="integrador@mail.com" type="text" class="form-control">
              </div>
              <div class="col-md-4 form-group">
                <label for="">Telefone</label>
                <input disabled value="38 99988-7744" type="text" class="form-control">
              </div>
              <div class="col-md-4 form-group">
                <label for="">Avaliação</label>
                <input disabled value="9.0" type="text" class="form-control">
              </div>
          </div>
          <hr>  
          <h3>Projetos</h3>
          <table id="example2" class="table table-bordered table-hover">
              <thead>
                  <tr>
                      <th>Projeto</th>
                      <th>Valor R$</th>
                      <th>Status</th>
                      <th>Avaliacção</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td> Projeto X </td>
                      <td> R$ 90.000,00 </td>
                      <td> Aprovado</td>
                      <td> 9.0</td>
                  </tr>

              </tbody>
          </table>

        </div>
      </div>
    </div>
  </section>

@stop