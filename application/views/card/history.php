<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Карта история пользователь</h3>
            </div>

            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-3 " style="font-size: larger">
                        <b>Имя : </b><?=$user['fname']?><br>
                        <b>Фамилия : </b><?=$user['lname']?><br>
                        <b>пасспорт : </b><?=$user['passport']?><br>
                        <b>день рождения : </b><?=$user['birthdate']?><br>
                        <b>Tel : </b><?=$user['tel']?><br>
                        <b>Адрес : </b><?=$user['address']?><br>
                        <b>учиться или работать : </b><?=$user['educationorwork']?><br>
                    </div>
                    <div class="col-md-9 ">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>№</th>
                                <th>Книга</th>
                                <th>Номер книги</th>
                                <th>Дата получения</th>
                                <th>Дата возврашения</th>
                                <th>Сумма аренды</th>
                            </tr>
                            <?php $i=1;$allsum=0;
                            foreach ($cards as $v){
                                $arr = explode('-', $v['takedate']);
                                $cur = explode('-', $v['returndate']);
                                $days=($cur[0]-$arr[0])*365+($cur[1]-$arr[1])*30+($cur[2]-$arr[2]);
                                $allsum+=$days*500;
                                ?>
                                <tr>
                                    <th><?=$i?></th>
                                    <th><?=$v['bookname']?></th>
                                    <th><?=$v['inn']?></th>
                                    <th><?=$v['takedate']?></th>
                                    <th><?=$v['returndate']?></th>
                                    <th><?=number_format($days*500,0,'.',' ')?> сум</th>
                                </tr>

                                <?php
                                $i++; }

                            ?>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>