<?php
$view ->component('start')

?>
<div class="text">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Авторизация</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="../index.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Логин</label>
                            
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Пароль</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                        </div>
                        <button type="button" id="button_in" class="btn btn-success">Авторизоваться</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="imgLog"><img src="views/components/img/flower1.jpg" alt="12312"></div>
        <div>
            

        </div>
        </div>
        <?php
$view ->component('end')

?>