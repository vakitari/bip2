<?php

/**
 * @var \App\Kernel\View\View $view
 * @var \App\Kernel\Session\Session $session
 * @var \App\Kernel\Auth\Auth $auth
 * @var \App\Kernel\DataBase\DataBase $db
 * @var \App\Kernel\Storage\Storage $storage
 */
$user = $auth->user();
$view->component('start')
?>
<div class="prof-row">
  <div class="prof-container">
    <img style="width: 100%; height: 100%;" src="views/components/img/sunflower.png" alt="12312">

    <div class="overlay">
      <img style="width: 50%; height: 50%;border-radius:100px;" src="<?php echo $storage->url($user->avatar()); ?>" alt="12312">
    </div>
  </div>
  <div class="prof-inf">
    <p>имя: <?php echo $user->username(); ?></p>
    <p>майл: <?php echo $user->email(); ?></p>
    <p>номер: <?php echo $user->number(); ?></p>
    <button type="button" id="registerBut" class="btn btn-success">Добавить товар</button>

  </div>
</div>
<div class="prof-product">
  Товары марии
  <hr>
  <?php
  if (!$db->first('product', ['user_id' => $user->id()])) {  ?>

    <p>пока что мария не выставляла товар</p>
    <?php } else {
    foreach ($db->get('product', ['user_id' => $user->id()]) as $value) {   ?>

      <div><img src="<?php echo $storage->url($value['avatar']); ?>" style="width: 50px;margin-bottom:20px" alt="123"><a href="/bas/buyFlow/?id=<?php echo $value['id'];
                                                                                                                                    ?>"> Название: </a><?php echo $value['title'];
                                                                                                                                                        ?></div>

  <?php }
  }
  ?>
</div>

<div id="registerM" class="modal" >
  <!-- Форма регистрации -->

  <div id="registerForm" class="modal-content">
    <div> <span class="close">&times;</span></div>
    <form style="display: flex; flex-direction: column;" method="post" action="/bas/addFlow" enctype="multipart/form-data">
      <input class="form-control" type="hidden" name="user_id" value="<?php echo $user->id(); ?>">
      <p>название</p>
      <input class="form-control" type="text" name="title">
      <p>цена</p>
      <input class="form-control" type="text" name="price">
      <p>Количество</p>
      <input class="form-control" type="text" name="qty">
      <p>описание</p>
      <textarea class="form-control" type="text" name="description"></textarea>
      <input class="form-control" type="file" name="avatar">

      <button type="submit" class="btn btn-success">Добавить товар</button>
    </form>

  </div>
</div>
<script>
  // Получаем элементы кнопки и модального окна
  var registerButtons = document.getElementById("registerBut");
  var registerModal = document.getElementById("registerM");
  var closeButton = document.getElementsByClassName("close");


  // Когда пользователь нажимает на кнопку, открываем модальное окно
  registerButtons.onclick = function() {
    registerModal.style.display = "block";
    console.log('pid')
  };



  // Когда пользователь нажимает на кнопку закрытия, закрываем модальное окно
  closeButton.onclick = function() {
    registerModal.style.display = "none";
  }

  // Когда пользователь щелкает вне модального окна, закрываем его
  window.onclick = function(event) {
    if (event.target == registerModal) {
      registerModal.style.display = "none";
    }
  }
</script>
<?php
$view->component('end')
?>