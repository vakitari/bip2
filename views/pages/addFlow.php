<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .modal {
    display: none; /* Скрываем модальное окно по умолчанию */
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
    }

    .modal-content {
      background-color: #fefefe;
      margin: 9% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 50%;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;

    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <button id="registerBut">123</button>
<div id="registerM" class="modal">
  <!-- Форма регистрации -->

  <div id="registerForm" class="modal-content">
    <div> <span class="close">&times;</span></div>
    <form action="">
      <p>Фото</p>
      <input type="file">
      <p>название</p>
      <input type="text">
      <p>цена</p>
      <input type="text">
      <p>описание</p>
      <input type="text">
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
</body>
</html>