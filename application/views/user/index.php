<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Список</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm">Добавить</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>№</th>
						<th>имя</th>
						<th>Фамилия</th>
						<th>пасспорт</th>
						<th>день рождения</th>
						<th>Tel</th>
						<th>Адрес</th>
						<th>учиться или работать</th>
						<th>Действия</th>
                    </tr>
                    <?php foreach($users as $u){ ?>
                    <tr>
						<td><?php echo $u['id']; ?></td>
						<td><?php echo $u['fname']; ?></td>
						<td><?php echo $u['lname']; ?></td>
						<td><?php echo $u['passport']; ?></td>
						<td><?php echo $u['birthdate']; ?></td>
						<td><?php echo $u['tel']; ?></td>
						<td><?php echo $u['address']; ?></td>
						<td><?php echo $u['educationorwork']; ?></td>
						<td>
                            <a href="<?php echo site_url('card/index/'.$u['id']); ?>" class="btn btn-success btn-xs"><span class="fa fa-bookmark"></span> Карта</a>
                            <a href="<?php echo site_url('card/history/'.$u['id']); ?>" class="btn btn-warning btn-xs"><span class="fa fa-folder-open"></span> История</a>
                            <a href="<?php echo site_url('user/edit/'.$u['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Редактировать</a>
                            <a href="<?php echo site_url('user/remove/'.$u['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Удалить</a>
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
