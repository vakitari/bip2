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
    </div>
</div>

<div class="prof-product">
  Товары марии
  <hr>
  <?php 
  if (false) {?>

    <p>пока что мария не выставляла товар</p>
  <?php } else{ for ($i=0; $i < 5; $i++) {  ?>

    <div><img src="views/components/img/sunflower.png" style="width: 50px;margin-bottom:20px" alt="123"><a href="/bas/buyFlow"> Название: желтолист</a></div>

  <?php } }
  ?>
</div>
<?php
$view->component('end')
?>