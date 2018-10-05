<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Карта пользователь</h3>
            </div>
            <form method="post" action="<?=base_url()?>card/save/<?=$user_id?>">
                <div class="box-body">
                    <div class="row clearfix">
                        <div class="col-md-3 ">
                            <select name="booktypes_id" class="form-control" id="booktypes_id"  onchange="loadbooks()">
                                <option value="">--Тип книги--</option>
                                <?php
                                foreach($all_booktypes as $booktype)
                                {
                                    $selected = ($booktype['id'] == $this->input->post('booktypes_id')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$booktype['id'].'" '.$selected.'>'.$booktype['name'].'</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-3 " id="books"></div>
                        <div class="col-md-3 " id="booksinn"></div>
                        <div class="col-md-3 " id="bookok"></div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>

    function loadbooks() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange=function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("books").innerHTML = this.responseText;
            }
        };
        var booktypes_id=document.getElementById('booktypes_id').value;
        if(booktypes_id!==""){
            xhttp.open("GET", "<?=base_url()?>book/getbooks/"+booktypes_id, true);
            xhttp.send();
        }
    }

    function loadbooksinn() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange=function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("booksinn").innerHTML = this.responseText;
            }
        };
        var booktypes_id=document.getElementById('bookss').value;
        if(booktypes_id!==""){
            xhttp.open("GET", "<?=base_url()?>Booksinn/getbooksinn/"+booktypes_id, true);
            xhttp.send();
        }
    }

    function loadbooksok() {
        document.getElementById('bookok').innerHTML="<button type='submit' class='btn btn-success btn-sm ad-click-event'>Сохранять</button>"
    }
</script>