<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Добавить книги</h3>
            </div>
            <?php echo form_open('book/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="booktypes_id" class="control-label"><span class="text-danger">*</span>Тип книги</label>
						<div class="form-group">
							<select name="booktypes_id" class="form-control">
								<option value="">--Тип книги--</option>
								<?php 
								foreach($all_booktypes as $booktype)
								{
									$selected = ($booktype['id'] == $this->input->post('booktypes_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$booktype['id'].'" '.$selected.'>'.$booktype['name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('booktypes_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label"><span class="text-danger">*</span>Имя</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="publishdate" class="control-label"><span class="text-danger">*</span>Дата публикации</label>
						<div class="form-group">
							<input type="text" name="publishdate" value="<?php echo $this->input->post('publishdate'); ?>" class="has-datepicker form-control" id="publishdate" />
							<span class="text-danger"><?php echo form_error('publishdate');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="publishhouse" class="control-label"><span class="text-danger">*</span>Публикация</label>
						<div class="form-group">
							<input type="text" name="publishhouse" value="<?php echo $this->input->post('publishhouse'); ?>" class="form-control" id="publishhouse" />
							<span class="text-danger"><?php echo form_error('publishhouse');?></span>
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