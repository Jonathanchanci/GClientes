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
	array('label'=>'Eliminar Cliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cedula),'confirm'=>'En realidad desea eliminarlo?')),
	array('label'=>'Administrar Clientes', 'url'=>array('admin')),
);
?>

<h1>Detalle de Cliente CC <?php echo $model->cedula; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cedula',
		'nombre',
		'email',
		'fecha',
		'foto',
	),
)); ?>
