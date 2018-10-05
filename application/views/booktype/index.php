<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Список тип книги</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('booktype/add'); ?>" class="btn btn-success btn-sm">Добавить</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>№</th>
						<th>Имя</th>
						<th>Код</th>
						<th>Действия</th>
                    </tr>
                    <?php  $i=0; foreach($booktypes as $b){ $i++;?>
                    <tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $b['name']; ?></td>
						<td><?php echo $b['code']; ?></td>
						<td>
                            <a href="<?php echo site_url('booktype/edit/'.$b['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Редактировать</a>
                            <a href="<?php echo site_url('booktype/remove/'.$b['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Удалить</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
