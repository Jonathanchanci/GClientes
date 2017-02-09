<?php
/* @var $this CClientesController */
/* @var $model MClientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Clientes', 'url'=>array('index')),
	array('label'=>'Crear Cliente', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});
$('.search-form form').submit(function(){
	$('#mclientes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

	<h1>Administración de Clientes</h1>

	<!--<p>
	You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
	or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
	</p>-->

	<!--<?php echo CHtml::link('Consulta Avanzada','#',array('class'=>'search-button')); ?>-->

<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div style="overflow-x: auto;">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mclientes-grid',
	'dataProvider'=>$model->search(),
	#'filter'=>$model,
	'columns'=>array(
		'cedula',
		'nombre',
		'email',
		'fecha',
		'foto',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>





