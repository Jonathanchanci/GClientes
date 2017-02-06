<?php
/* @var $this CClientesController */
/* @var $model MClientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->cedula=>array('view','id'=>$model->cedula),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Clientes', 'url'=>array('index')),
	array('label'=>'Crear Cliente', 'url'=>array('create')),
	array('label'=>'Ver Clientes', 'url'=>array('view', 'id'=>$model->cedula)),
	array('label'=>'Administrar Clientes', 'url'=>array('admin')),
);
?>

<h1>Editar Cliente <?php echo $model->cedula; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>