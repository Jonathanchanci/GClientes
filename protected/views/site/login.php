<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Ingresar',
);
?>


<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	 <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Login</h3>
            </div>
            <!-- /.box-header -->
             <!-- form start -->
            <form role="form" >
              <div class="box-body">
              <p class="note">Campos con <span class="required">*</span> son requeridos.</p>
                <div class="form-group">
                  	<?php echo $form->labelEx($model,'Usuario'); ?>
					<?php echo $form->textField($model,'username',
						array("class"=>"form-control",
							"placeholder"=>"Ingresa tu usuario"
					)); ?>
					<?php echo $form->error($model,'username'); ?>
                </div>
                <div class="form-group">                
                  	<?php echo $form->labelEx($model,'Clave'); ?>
					<?php echo $form->textField($model,'password',
						array("class"=>"form-control",
							"placeholder"=>"Ingresa tu contraseña"
					)); ?>
					<?php echo $form->error($model,'password'); ?>
                </div>

              </div>
              <!-- /.box-body -->  
				<div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">                      
                        <?php echo $form->checkBox($model,'rememberMe'); ?>
                        <?php echo $form->label($model,'rememberMe'); ?>
                        <?php echo $form->error($model,'rememberMe'); ?>
                    </div>                    
                  </div>
                </div>

              <div class="box-footer">
                	<?php echo CHtml::submitButton('Ingresar',array(
                		"class"=>"btn btn-primary"
                	)); ?>
              </div>
            </form>
          </div>
         </div>

<?php $this->endWidget(); ?>
</div><!-- form -->
