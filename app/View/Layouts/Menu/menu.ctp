

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">
            <?php 
                if ($this->Session->read('Usuario') != "") {
                    echo substr($this->Session->read('Usuario.nome'), 0, 12);
                    
                    if (strlen($this->Session->read('Usuario.nome') > -1)) { 
                        echo '...'; 
                    } else {
                        echo '';
                    } 
                } else {
                    echo "Winners Desenvolvimento";                
                }
            ?>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
    <a class="nav-link" href="/dashboard/home">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Módulos
    </div>

    <?php
        foreach ($modulos as $i => $valor) {
            echo '<li class="nav-item">';
                echo '<a class="nav-link" href="/'.$valor['modulo'].'/'.$valor['funcao'].'">';
                echo '<i class="fas fa-fw ' . $valor['icone'] . '"></i>';
                echo '<span>' . utf8_encode($valor['nome']) . '</span></a>';
            echo '</li>';
        }
    ?> 

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->