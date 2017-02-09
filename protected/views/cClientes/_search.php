<?php
/* @var $this CClientesController */
/* @var $model MClientes */
/* @var $form CActiveForm */
?>

<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); ?>




	<!-- search-form -->


    <div class="box box-info">
        <div class="box-header with-border">
              <h3 class="box-title">Consulte perzonalizadamente</h3>
        </div>
            <!-- /.box-header -->
            <!-- form start -->

           <form class="form-horizontal">
             <div class="box-body">
             <h6 style="padding: 0;">Si desea ver todos los clientes limpie los campos y luego buscar</h6>
  	              <div class="form-group">                  
  	                  <?php echo $form->label($model,'cedula',array(
  	                  	"class"=>"col-sm-2 control-label"
  	                  )); ?>

  	                  <div class="col-sm-10">
  	                  	<?php echo $form->textField($model,'cedula',array(
  	                  		"class"=>"form-control",
                          "placeholder"=>'Ingrese alguna cedula'
  	                  	)); ?>
  	                  </div>
  	              </div>
  				        <div class="form-group">                  
                    <?php echo $form->label($model,'nombre',array(
                    	"class"=>"col-sm-2 control-label"
                    )); ?>

                    <div class="col-sm-10">
                    	<?php echo $form->textField($model,'nombre',array(
                    		"class"=>"form-control",
                        'placeholder'=>'Ingrese algun nombre'
                    	)); ?>
                    </div>
                  </div>
                  <div class="form-group">                  
                    <?php echo $form->label($model,'email',array(
                    	"class"=>"col-sm-2 control-label"
                    )); ?>
                    <div class="col-sm-10">
                    	<?php echo $form->textField($model,'email',array(
                    		"class"=>"form-control",
                        'placeholder'=>'Ingrese algun correo'
                    	)); ?>
                    </div>
                  </div>
                  <div class="form-group">                  
                    <?php echo $form->label($model,'fecha',array(
                    	"class"=>"col-sm-2 control-label"
                    )); ?>
                    <div class="col-sm-10">
                    	<?php echo $form->textField($model,'fecha',array(
                    		"class"=>"form-control",
                        'placeholder'=>'Ingrese cualquier fecha'
                    	)); ?>
                    </div>
                  </div>
                  <div class="form-group">                  
                    <?php echo $form->label($model,'foto',array(
                    	"class"=>"col-sm-2 control-label"
                    )); ?>

                    <div class="col-sm-10">
                    	<?php echo $form->textField($model,'foto',array(
                    		"class"=>"form-control",
                        'placeholder'=>'Ingrese algun nombre de foto'
                    	)); ?>
                    </div>
                  </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              	<?php echo CHtml::submitButton('Buscar',array(
              		"class"=>"btn btn-info pull-right"
              		)); ?>
              </div>
            
              <!-- /.box-footer -->
            </form>
    </div>

        <?php $this->endWidget(); ?>
 
</div>