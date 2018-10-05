<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Список</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('booksinn/add'); ?>" class="btn btn-success btn-sm">Добавить</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>№</th>
						<th>Книга</th>
						<th>Номер</th>
						<th>Действия</th>
                    </tr>
                    <?php $i=0; foreach($booksinn as $b){ $i++; ?>
                    <tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $b['bookname']; ?></td>
						<td><?php echo $b['inn']; ?></td>
						<td>
                            <a href="<?php echo site_url('booksinn/edit/'.$b['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Редактировать</a>
                            <a href="<?php echo site_url('booksinn/remove/'.$b['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Удалить</a>
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
