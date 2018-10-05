<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Список</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('book/add'); ?>" class="btn btn-success btn-sm">Добавить</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>№</th>
						<th>Тип книги</th>
						<th>Имя</th>
						<th>Дата публикации</th>
						<th>Публикация</th>
						<th>Действия</th>
                    </tr>
                    <?php $i=0; foreach($books as $b){ $i++; ?>
                    <tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $b['typename']; ?></td>
						<td><?php echo $b['name']; ?></td>
						<td><?php echo $b['publishdate']; ?></td>
						<td><?php echo $b['publishhouse']; ?></td>
						<td>
                            <a href="<?php echo site_url('book/edit/'.$b['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Редактировать</a>
                            <a href="<?php echo site_url('book/remove/'.$b['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Удалить</a>
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
