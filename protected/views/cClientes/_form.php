<?php
/* @var $this CClientesController */
/* @var $model MClientes */
/* @var $form CActiveForm */
?>



		<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'mclientes-form',
				'method'=>'POST',
				'htmlOptions' => array('enctype' => 'multipart/form-data'),
				// Please note: When you enable ajax validation, make sure the corresponding
				// controller action is handling ajax validation correctly.
				// There is a call to performAjaxValidation() commented in generated controller code.
				// See class documentation of CActiveForm for details on this.
				'enableAjaxValidation'=>false,
				'enableClientValidation'=>true,
						'clientOptions'=>array(
							'validateOnSubmit'=> true,
							'validateOnChange'=>true,
							'validateOnType'=>true,							
							)
			)); ?>

            <!-- form start -->
            
              <div class="box-body">
              <p class="note">Campos con <span class="required">*</span> son requeridos.</p>
              <!--mostrar foto mini-->
                <?php if(!$model->isNewRecord){?>
	              <div>
	              	<img class="profile-user-img img-responsive img-circle" style="width: 80px;" src="<?php echo Yii::app()->baseUrl.'/images/'.$model->foto ?>" >
	              </div>
              	<?php }?>
                <div class="form-group">
                  	<?php echo $form->labelEx($model,'cedula'); ?>
					<?php echo $form->textField($model,'cedula',
						array("class"=>"form-control",
							"placeholder"=>"Ingresa tu cédula"
					)); ?>
						<?php echo $form->error($model,'cedula',
						array('class'=>'help-block')); ?>			
                </div>
                <div class="form-group">                
                  	<?php echo $form->labelEx($model,'nombre'); ?>
					<?php echo $form->textField($model,'nombre',
						array("class"=>"form-control",
							"placeholder"=>"Ingresa tu nombre"
					)); ?>
					<?php echo $form->error($model,'nombre',
						array('class'=>'help-block')); ?>

                </div>
                <div class="form-group">
					<?php echo $form->labelEx($model,'email'); ?>
					<?php echo $form->textField($model,'email',
						array("class"=>"form-control",
							"placeholder"=>"Ingresa tu correo"
					)); ?>
					<?php echo $form->error($model,'email',
						array('class'=>'help-block')); ?>
                </div>
                <div class="form-group">
                  	<?php echo $form->labelEx($model,'fecha'); ?>
					<?php echo $form->dateField($model,'fecha',
						array("class"=>"form-control",
					)); ?>
					<?php echo $form->error($model,'fecha',
						array('class'=>'help-block')); ?>
                </div>                
                <div class="form-group">
                  	<?php echo $form->labelEx($model,'foto'); ?>
					<?php echo $form->fileField($model,'foto'); ?>
					<?php echo $form->error($model,'foto',
						array('class'=>'help-block')); ?>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                	<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar': 'Actualizar',array(
                		"class"=>"btn btn-primary"
                	)); ?>
              </div>              
            
          </div><!-- /box box-primary -->
     </div><!-- /col-md-6 -->

<?php $this->endWidget(); ?>
</div><!-- /form -->

	  