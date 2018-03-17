@extends('layouts.sistema')

@section('content')

    <section class="content-header">
        <h1><i class="fa fa-dashboard"></i> Tarefas</h1>

        <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Tarefas</li>
	     </ol>
    </section> <br>

    <section class="row">
    	<div class="col-md-12">
    		<div class="box box-primary">
    			<div class="box-header">
    				<a href="{{ route('agenda') }}" class="btn btn-primary btn-xs">Voltar</a>
    			</div>
    			<div class="box-body">
    				<h3>Assunto da mensagem</h3>
    				<br>
    				<p>
    					Raw denim McSweeney's bicycle rights, iPhone trust fund quinoa Neutra VHS kale chips vegan PBR&B literally Thundercats +1. Forage tilde four dollar toast, banjo health goth paleo butcher. Four dollar toast Brooklyn pour-over American Apparel sustainable, lumbersexual listicle gluten-free health goth umami hoodie. Synth Echo Park bicycle rights DIY farm-to-table, retro kogi sriracha dreamcatcher PBR&B flannel hashtag irony Wes Anderson. Lumbersexual Williamsburg Helvetica next level. Cold-pressed slow-carb pop-up normcore Thundercats Portland, cardigan literally meditation lumbersexual crucifix. Wayfarers raw denim paleo Bushwick, keytar Helvetica scenester keffiyeh 8-bit irony mumblecore whatever viral Truffaut.
    				</p>
    			</div>
    		</div>
    	</div>
    </section>







@stop