<?php
/* @var $this CClientesController */
/* @var $model MClientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Clientes', 'url'=>array('index')),
	array('label'=>'Administrar Clientes', 'url'=>array('admin')),
);?>
<style type="text/css">
  .help-block{
    color: red;
  }
</style>
<div class="form">
 <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ingresar Nuevo Cliente</h3>
            </div>
            <!-- /.box-header -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>