<?php
/* @var $this CClientesController */
/* @var $model MClientes */


$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->cedula,
);

$this->menu=array(
	array('label'=>'Listar Clientes', 'url'=>array('index')),
	array('label'=>'Crear Cliente', 'url'=>array('create')),
	array('label'=>'Editar Cliente', 'url'=>array('update', 'id'=>$model->cedula)), 
  array('label'=>'Eliminar Cliente', 'url'=>"#", 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cedula),'confirm'=>'En realidad desea eliminarlo?')),
	array('label'=>'Administrar Clientes', 'url'=>array('admin')),
);
?>

  <h1>Detalle de Cliente CC <?php echo $model->cedula; ?></h1>



  <div class="box box-primary">
  <div class="box-body box-profile">  
    <img class="profile-user-img img-responsive img-circle" style="width: 200px;" src="<?php echo Yii::app()->baseUrl.'/images/'.$model->foto ?>" >

    <h3 class="profile-username text-center"><?php echo $model->nombre; ?></h3>

    <p class="text-muted text-center"><?php echo $model->cedula; ?></p>

    <ul class="list-group list-group-unbordered">
      <li class="list-group-item">
        <b>Correo</b> <a class="pull-right"><?php echo $model->email; ?></a>
      </li>
      <li class="list-group-item">
        <b>Nacimiento</b> <a class="pull-right"><?php echo $model->fecha; ?></a>
      </li>
      <li class="list-group-item">
        <b>Nombre de la Foto</b> <a class="pull-right"><?php echo $model->foto; ?></a>
      </li>
    </ul>
  </div>
  <!-- /.box-body -->
  </div>
