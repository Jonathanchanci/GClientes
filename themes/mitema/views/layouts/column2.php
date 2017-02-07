<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>

    <aside class="control-sidebar control-sidebar-dark">    
    <!-- Tab panes  --> 
    <div class="tab-content">
        <?php
      $this->beginWidget('zii.widgets.CPortlet');
    ?>
    <h3 class="control-sidebar-heading">Navegación</h3>
    <?php
      $this->widget('zii.widgets.CMenu', array(
        'items'=>$this->menu,
        'htmlOptions'=>array('class'=>'operations'),
      ));
      $this->endWidget();
    ?>   
    </div>   
  </aside>


<?php $this->endContent(); ?> 
  