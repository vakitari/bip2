<?php

/**
 * @var \App\Kernel\View\View $view
 * @var \App\Kernel\Session\Session $session
 * @var \App\Kernel\DataBase\DataBase $db
 * @var \App\Kernel\Auth\Auth $auth
 */
$user = $auth->user();
$view->component('start')
?>
<h1>Таблица Пользователей</h1>
    <table>
            <?php foreach ($db->getAll('user') as $value) {  ?>

                <tr>
                    <td>Имя пользования <?= $value['username']?></td>
                    <td>майл <?= $value['email']?></td>
                    <td>номер телефона <?= $value['number']?></td>
                    <td>роль <?php if ($value['username'] = 1) echo 'admin'; else echo 'user'?></td>
                    <td>
                        <a href="/bas/admin/deleteUser/?id=<?php echo $value['id']; ?>" class="btn btn-danger">удалить пользователя</a>
                    </td>
                </tr>
            <?php } ?>
    </table>
    <h2 style="margin-top: 20px">Таблица товаров</h2>

    <table>

        <?php if ($db->getAll('product') != null) { foreach ($db->getAll('product') as $value) {  ?>

            <tr>
                <td>Название товара <?= $value['title']?></td>
                <td>Цена товара <?= $value['price']?></td>
                <td style="width: 300px">Описание товара <?= $value['description']?></td>
                <td>Количество товара <?= $value['qty']?></td>
                <td>
                    <a href="/bas/admin/deleteProd/?id=<?php echo $value['id']; ?>" class="btn btn-danger">удалить товар</a>
                </td>
            </tr>
        <?php } }  else echo 'товаров нет'?>
    </table>
<?php
$view->component('end')
?>