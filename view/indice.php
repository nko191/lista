<?php
if(isset($page)){
    switch ($page) {
        case 'index':
            $title="Dashboard";
            $title2="ver y agregar";
            $destino='dashboard.php';
            break;
        
        default:
            $title="CONTENIDO";
            $title2="texto explicativo";            
            break;
    }
}

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title;?>
        <small><?php echo $title2;?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>  
        <?php echo $title ;?></a></li>
        <li class="active">Here</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">

      <?php
    if(isset($destino)){ 
    include 'include/'.$destino;
    }else{
        echo "Contacte a su administrador de sistemas";
    }
    ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  