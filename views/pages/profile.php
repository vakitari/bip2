<?php
$view->component('start')
?>
<div class="prof-row">
  <div class="prof-container">
    <img style="width: 100%; height: 100%;" src="views/components/img/sunflower.png" alt="12312">

    <div class="overlay">
      <img style="width: 50%; height: 50%;border-radius:100px;" src="views/components/img/Rectangle.png" alt="12312">
    </div>
  </div>
  <div class="prof-inf">
    <p>имя: мария</p>
    <p>майл: щгрвапзпршврывфоаррвпфршщ</p>
    <p>номер: 123123123123123</p>
    <a href="#" id="registerBut" class="btn btn-success">Добавить товар</a>

  </div>
</div>
<div class="prof-product">
  Товары марии
  <hr>
  <?php
  if (false) { ?>

    <p>пока что мария не выставляла товар</p>
    <?php } else {
    for ($i = 0; $i < 5; $i++) {  ?>

      <div><img src="views/components/img/sunflower.png" style="width: 50px;margin-bottom:20px" alt="123"><a href="/bas/buyFlow"> Название: желтолист</a></div>

  <?php }
  }
  ?>
</div>

<div id="registerM" class="modal">
  <!-- Форма регистрации -->

  <div id="registerForm" class="modal-content">
    <div> <span class="close">&times;</span></div>
    <form style="display: flex; flex-direction: column;" action="">
      <p>Фото</p>
      <input class="form-control" type="file">
      <p>название</p>
      <input class="form-control" type="text">
      <p>цена</p>
      <input class="form-control" type="text">
      <p>описание</p>
      <textarea class="form-control" type="text"></textarea>
      <button type="submit" class="btn btn-success">Добавить товар</button>
    </form>

  </div>
</div>
<script>
  // Получаем элементы кнопки и модального окна
  var registerButtons = document.getElementById("registerBut");
  var registerModal = document.getElementById("registerM");
  var closeButton = document.getElementsByClassName("close")[0];


    registerButtons.onclick = function() {
      registerModal.style.display = "block";

    };
  
  // Когда пользователь нажимает на кнопку, открываем модальное окно


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