<!DOCTYPE html>
<html lang="pt-br">
<head>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sistema com Laravel - Fluxo de Caixa</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
        <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
        <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

      </head>
      <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

          <header class="main-header">



            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
              <!-- Sidebar toggle button-->
              <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only"></span>
              </a>
     </nav>
          </header>
          <!-- Left side column. contains the logo and sidebar -->
          <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
              <!-- Sidebar user panel -->

              <!-- sidebar menu: : style can be found in sidebar.less -->
              <ul class="sidebar-menu">
                <li class="header"></li>

                <li class="treeview">
                  <a href="#">
                    <i class=""></i>
                    <span>Fornecedor</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="/fornecedores"><i class="fa fa-circle-o"></i> Fornecedores</a></li>

                  </ul>



                </li>

                <li class="treeview">
                  <a href="#">
                    <i class=""></i>
                    <span>Cliente</span>
                     <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="/clientes"><i class="fa fa-circle-o"></i> Clientes</a></li>
                  </ul>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class=""></i>
                    <span>Custo</span>
                     <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="/custos"><i class="fa fa-circle-o"></i> Custos</a></li>
                  </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                      <i class=""></i>
                      <span>Receita</span>
                       <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="/receitas"><i class="fa fa-circle-o"></i> Receitas</a></li>
                    </ul>
                  </li>

                  <li class="treeview">
                    <a href="#">
                      <i class=""></i>
                      <span>Plano de Custo</span>
                       <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="/planos"><i class="fa fa-circle-o"></i> Planos</a></li>
                    </ul>
                </li>


              </ul>
            </section>
            <!-- /.sidebar -->
          </aside>





           <!--Contenido-->
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">

            <!-- Main content -->
            <section class="content">

              <div class="row">
                <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">Sistema Fluxo de Caixa</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                          <div class="row">
                              <div class="col-md-12">
                                      <!--Conteudo-->
                                  @yield('conteudo')
                                      <!--Fim Conteudo-->
                               </div>
                            </div>



                              </div>
                          </div><!-- /.row -->
                    </div><!-- /.box-body -->
                  </div><!-- /.box -->
                </div><!-- /.col -->
              </div><!-- /.row -->

            </section><!-- /.content -->
          </div><!-- /.content-wrapper -->
          <!--Fin-Contenido-->
          <footer class="main-footer">
            <div class="pull-right hidden-xs">
              <b></b>
            </div>

          </footer>


        <!-- jQuery 2.1.4 -->
        <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('js/app.min.js')}}"></script>





</body>
</body>
</html>
