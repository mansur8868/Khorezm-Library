<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Редактировать номер книги</h3>
            </div>
			<?php echo form_open('booksinn/edit/'.$booksinn['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="books_id" class="control-label"><span class="text-danger">*</span>Книга</label>
						<div class="form-group">
							<select name="books_id" class="form-control">
								<option value="">--выбрать книгу--</option>
								<?php 
								foreach($all_books as $book)
								{
									$selected = ($book['id'] == $booksinn['books_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$book['id'].'" '.$selected.'>'.$book['name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('books_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="inn" class="control-label"><span class="text-danger">*</span>Номер</label>
						<div class="form-group">
							<input type="text" name="inn" value="<?php echo ($this->input->post('inn') ? $this->input->post('inn') : $booksinn['inn']); ?>" class="form-control" id="inn" />
							<span class="text-danger"><?php echo form_error('inn');?></span>
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