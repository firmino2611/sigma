<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            
            @if(Auth::user()->hasRole('cliente'))

                <li><a href="{{ route('projetos.integrador') }}"><i class="fa fa-book"></i> <span>Projetos</span></a></li>
                <li><a href="{{ route('integradores') }}"><i class="fa fa-book"></i> <span>Integradores</span></a></li>

            @elseif(Auth::user()->hasRole('banco'))

                <li><a href="{{ route('banco.projetos') }}"><i class="fa fa-book"></i> <span>Projetos</span></a></li>
                <li><a href="{{ route('banco.clientes') }}"><i class="fa fa-users"></i> <span>Clientes</span></a></li>
                <li><a href="{{ route('banco.integradores') }}"><i class="fa fa-user"></i> <span>Integradores</span></a></li>

            @elseif(Auth::user()->hasRole('integrador'))

                <li><a href="{{ route('projetos.integrador') }}"><i class="fa fa-circle"></i> <span>Projetos</span></a></li>
                <li><a href="{{ route('agenda') }}"><i class="fa fa-book"></i> <span>Agenda</span></a></li>
                <li><a href="{{ route('produtos') }}"><i class="fa fa-book"></i> <span>Produtos</span></a></li>

                <li class="treeview">
                    <a href="#"><i class="fa  fa-users"></i> <span>Clientes</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href=" {{ route('clientes.respondidos') }} "><i class="fa  fa-circle-o"></i> Respondidos </a></li>
                        <li><a href="{{ route('clientes.abertos') }}"><i class="fa  fa-circle-o"></i> Em aberto </a></li>
                    </ul>
                </li>
                
            @endif

        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>