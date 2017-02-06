<?php
/* @var $this CClientesController */
/* @var $model MClientes */

$this->breadcrumbs=array(
	'Clientes'=>array('Inicio'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Clientes', 'url'=>array('index')),
	array('label'=>'Administrar Clientes', 'url'=>array('admin')),
);
?>

<h1>Ingresar Nuevo Cliente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>