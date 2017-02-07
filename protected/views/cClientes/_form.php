<?php
/* @var $this CClientesController */
/* @var $model MClientes */
/* @var $form CActiveForm */
?>



			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'mclientes-form',
				'method'=>'POST',
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
							'htmlOptions' => array('enctype' => 'multipart/form-data'),
							)
			)); ?>

            <!-- form start -->
            <form role="form" >
              <div class="box-body">
              <p class="note">Campos con <span class="required">*</span> son requeridos.</p>
                <div class="form-group">
                  	<?php echo $form->labelEx($model,'cedula'); ?>
					<?php echo $form->textField($model,'cedula',
						array("class"=>"form-control",
							"placeholder"=>"Ingresa tu cédula"
					)); ?>
					<?php echo $form->error($model,'cedula'); ?>
                </div>
                <div class="form-group">                
                  	<?php echo $form->labelEx($model,'nombre'); ?>
					<?php echo $form->textField($model,'nombre',
						array("class"=>"form-control",
							"placeholder"=>"Ingresa tu nombre"
					)); ?>
					<?php echo $form->error($model,'nombre'); ?>

                </div>
                <div class="form-group">
					<?php echo $form->labelEx($model,'email'); ?>
					<?php echo $form->textField($model,'email',
						array("class"=>"form-control",
							"placeholder"=>"Ingresa tu correo"
					)); ?>
					<?php echo $form->error($model,'email'); ?>
                </div>
                <div class="form-group">
                  	<?php echo $form->labelEx($model,'fecha'); ?>
					<?php echo $form->dateField($model,'fecha',
						array("class"=>"form-control",
					)); ?>
					<?php echo $form->error($model,'fecha'); ?>
                </div>
                <div class="form-group">
                  	<?php echo $form->labelEx($model,'foto'); ?>
					<?php echo $form->fileField($model,'foto'); ?>
					<?php echo $form->error($model,'foto'); ?>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                	<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar': 'Actualizar',array(
                		"class"=>"btn btn-primary"
                	)); ?>
              </div>
            </form>
          </div>
         </div>

<?php $this->endWidget(); ?>

</div><!-- form -->

	  