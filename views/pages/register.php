<?php
/**
 * @var \App\Kernel\View\View $view
 * @var \App\Kernel\Session\Session $session
 */
$view ->component('start');
?>
<div class="text">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Регистрация</h3>
                </div>
                <div class="panel-body">
                    <form method="post" action="/bas/reg" enctype="multipart/form-data">

                        <div class="form-group">
                            <input type="file" name="image">
                            <label>Логин</label>
                            <input type="text" class="form-control"  placeholder="Введите Логин" name="username">
                            <?php if ($session->has('login')) {?>
                                <ul>
                                    <?php foreach ($session->getFlash("login") as $error) {?>
                                        <li>
                                            <?php echo $error;  ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </div>
                        <div class="form-group">

                            <label for="exampleInputPassword1">Пароль</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль" name="password">
                            <?php if ($session->has('password')) {?>
                                <ul>
                                    <?php foreach ($session->getFlash("password") as $error) {?>
                                        <li>
                                            <?php echo $error;  ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                            <label for="exampleInputPassword1">Mail</label>
                            <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Введите емайл" name="email">
                            <?php if ($session->has('email')) {?>
                                <ul>
                                    <?php foreach ($session->getFlash("email") as $error) {?>
                                        <li>
                                            <?php echo $error;  ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                            <label for="exampleInputPassword1">Номер телефона</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Введите номер телефона" name="number">
                            <?php if ($session->has('number')) {?>
                                <ul>
                                    <?php foreach ($session->getFlash("number") as $error) {?>
                                        <li>
                                            <?php echo $error;  ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>

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