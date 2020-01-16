<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gestor Winners</title>

    <!-- jQuery Version 1.11.0 -->
    <?php echo $this->Html->script('jquery-1.11.0'); ?>
    <!--script src="js/jquery-1.11.0.js"></script-->

    <!--Mascaras-->
    <?php echo $this->Html->script('jquery.maskedinput.min'); ?>
    <?php echo $this->Html->script('jquery.maskMoney'); ?>
    <?php echo $this->Html->script('mascaras'); ?>


    <?php echo $this->Html->script('funcoes'); ?>


    <!-- Bootstrap Core CSS -->
    <?php echo $this->Html->css('bootstrap.min'); ?>
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- MetisMenu CSS -->
    <?php echo $this->Html->css('plugins/metisMenu/metisMenu.min'); ?>
    <!-- <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet"> -->

    <!-- Timeline CSS -->
    <?php echo $this->Html->css('plugins/timeline'); ?>
    <!-- <link href="css/plugins/timeline.css" rel="stylesheet"> -->

    <!-- Custom CSS -->
    <?php echo $this->Html->css('sb-admin-2'); ?>
    <!-- <link href="css/sb-admin-2.css" rel="stylesheet"> -->

    <!-- Morris Charts CSS -->
    <?php echo $this->Html->css('plugins/morris'); ?>
    <!-- <link href="css/plugins/morris.css" rel="stylesheet"> -->

    <!-- Custom Fonts -->
    <?php echo $this->Html->css('font-awesome/css/font-awesome.min'); ?>
    <!-- <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.css">

    <!--Start of Zopim Live Chat Script-->
    <script type="text/javascript">
    function detectmob() {
       if(window.innerWidth <= 800 && window.innerHeight <= 600) {
         return true;
       } else {
         return false;
       }
    }

    if (detectmob()) {
        window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
        d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
        _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
        $.src='//v2.zopim.com/?29Cgb0x8PWQ3X1FKXZXUNJx4D9TjDD5d';z.t=+new Date;$.
        type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
    }
    </script>
    <!--End of Zopim Live Chat Script-->
    
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />

    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('select').select2();
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.js"></script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-60234652-1', 'auto');
      ga('send', 'pageview');
    </script>
</head>

<body>

    <?php echo $this->Session->flash(); ?>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/dashboard/home">
                <?php 
                    if ($this->Session->read('Usuario') != "") {
                        echo $this->Session->read('Usuario.nome'); 
                    } else {
                        echo "Winners Desenvolvimento";                
                    }
                ?>
                </a>
            </div>
            <?php if ($this->Session->read('Usuario') != "") { ?>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/usuario/meus_dados"><i class="fa fa-gear fa-fw"></i> Configurações</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/usuario/processar_logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <?php } ?>

            <!-- Inclui o menu -->
            <?php include('Menu/menu.ctp'); ?>
            <!-- /.navbar-static-side -->
        </nav>



        <!-- /#wrapper -->

        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <?php echo $this->Html->script('bootstrap.min'); ?>
        <!--script src="js/bootstrap.min.js"></script-->

        <!-- Metis Menu Plugin JavaScript -->
        <?php echo $this->Html->script('plugins/metisMenu/metisMenu.min'); ?>
        <!--script src="js/plugins/metisMenu/metisMenu.min.js"></script-->

        <!-- Morris Charts JavaScript -->
        <!--script src="js/plugins/morris/raphael.min.js"></script>
        <script src="js/plugins/morris/morris.min.js"></script>
        <script src="js/plugins/morris/morris-data.js"></script-->

        <!-- Custom Theme JavaScript -->
        <?php echo $this->Html->script('sb-admin-2'); ?>
        <!--script src="js/sb-admin-2.js"></script-->

        <!-- DataTables JavaScript -->
        <?php echo $this->Html->script('plugins/dataTables/jquery.dataTables'); ?>
        <?php echo $this->Html->script('plugins/dataTables/dataTables.bootstrap'); ?>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->

        <!-- Conteudo -->
        <?php echo $this->fetch('content'); ?>

    </div>

    <script>
        $(document).ready(function() {
            $('#dataTables-cliente').dataTable();
        });
    </script>

    <script type="text/javascript">
        window.smartlook||(function(d) {
        var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
        var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
        c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
        })(document);
        smartlook('init', 'ffbcd0d07f5b3d894b7ee2f30a77b0a513db76ee');
    </script>

</body>

</html>
