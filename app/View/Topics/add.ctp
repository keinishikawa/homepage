<div class="row">
	<div class="col-xs-10 col-xs-offset-1 col-sm-7 col-sm-offset-1">
		<h2>記事追加</h2>
		<div class="form">
		<?php echo $this->Form->create('Topic');?>
		<div class="form-group">
		<?php echo $this->Form->input('title',array('type'=>'text','class'=>'form-control'));?>
		</div>
		<div class="form-group">
		<?php echo $this->Form->input('body',array('type'=>'textarea','class'=>'form-control'));?>
		</div>
		<div class="form-group">
		<?php echo $this->Form->submit('追加',array('class'=>'form-control'));?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('category_id',array('type'=>'select','class'=>'form-control'));?>
		</div>
		<?php echo $this->Form->end();?>
		</div>
	</div>
</div>
