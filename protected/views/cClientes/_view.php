<?php
/* @var $this CClientesController */
/* @var $data MClientes */
?>



    <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username"><?php echo CHtml::encode($data->nombre); ?>
              </h3>
              <h5 class="widget-user-desc"><?php echo CHtml::link(CHtml::encode($data->cedula), array('view', 'id'=>$data->cedula)); ?></h5>
            </div>
            <div class="widget-user-image">
              <!--<img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">-->
              <img class="img-circle" src="<?php echo Yii::app()->baseUrl.'/images/'.$data->foto ?>" style="width: 100px; height: 100px;">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Correo</h5>
                    <span class="description-text"><?php echo CHtml::encode($data->email); ?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                 <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">Nacimieto</h5>
                    <span class="description-text"><?php echo CHtml::encode($data->fecha); ?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>

 
