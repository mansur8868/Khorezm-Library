<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Добавить</h3>
            </div>
            <?php echo form_open('user/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="fname" class="control-label"><span class="text-danger">*</span>имя</label>
						<div class="form-group">
							<input type="text" name="fname" value="<?php echo $this->input->post('fname'); ?>" class="form-control" id="fname" />
							<span class="text-danger"><?php echo form_error('fname');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lname" class="control-label"><span class="text-danger">*</span>Фамилия</label>
						<div class="form-group">
							<input type="text" name="lname" value="<?php echo $this->input->post('lname'); ?>" class="form-control" id="lname" />
							<span class="text-danger"><?php echo form_error('lname');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="passport" class="control-label"><span class="text-danger">*</span>пасспорт</label>
						<div class="form-group">
							<input type="text" name="passport" value="<?php echo $this->input->post('passport'); ?>" class="form-control" id="passport" />
							<span class="text-danger"><?php echo form_error('passport');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="birthdate" class="control-label"><span class="text-danger">*</span>День рождения</label>
						<div class="form-group">
							<input type="text" name="birthdate" value="<?php echo $this->input->post('birthdate'); ?>" class="has-datepicker  form-control" id="birthdate" />
							<span class="text-danger"><?php echo form_error('birthdate');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tel" class="control-label"><span class="text-danger">*</span>Tel</label>
						<div class="form-group">
							<input type="text" name="tel" value="<?php echo $this->input->post('tel'); ?>" class="form-control" id="tel" />
							<span class="text-danger"><?php echo form_error('tel');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="address" class="control-label"><span class="text-danger">*</span>Адрес</label>
						<div class="form-group">
							<input type="text" name="address" value="<?php echo $this->input->post('address'); ?>" class="form-control" id="address" />
							<span class="text-danger"><?php echo form_error('address');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="educationorwork" class="control-label">учиться или работать</label>
						<div class="form-group">
							<input type="text" name="educationorwork" value="<?php echo $this->input->post('educationorwork'); ?>" class="form-control" id="educationorwork" />
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

