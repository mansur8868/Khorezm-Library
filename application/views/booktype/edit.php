<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Редактировать тип книги</h3>
            </div>
			<?php echo form_open('booktype/edit/'.$booktype['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="name" class="control-label"><span class="text-danger">*</span>Имя</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $booktype['name']); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="code" class="control-label"><span class="text-danger">*</span>Код</label>
						<div class="form-group">
							<input type="text" name="code" value="<?php echo ($this->input->post('code') ? $this->input->post('code') : $booktype['code']); ?>" class="form-control" id="code" />
							<span class="text-danger"><?php echo form_error('code');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Сохранять
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>