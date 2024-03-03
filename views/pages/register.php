<?php
$view ->component('start')
?>
<div class="text">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Регистрация</h3>
                </div>
                <div class="panel-body">
                    <form  method="post" action="/bas/post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Логин</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Введите Логин" name="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Пароль</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль" name="password">
                        </div>
                        <button type="submit" id="button_in" class="btn btn-success mt-3">Зарегистрироваться</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="imgReg"><img src="views/components/img/flower1.jpg" alt="12312"></div>
        </div>
        
        <?php
$view ->component('end')
?>