<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
  <title>Document</title>

  <style>
    body, html{
      height: 100%;
      font-family: "Dancing Script", cursive;
      color: #333333;
    }
   

    input,
    textarea {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    .payment{
      margin-top: 20px;
    }
    .pay-page{
      display: flex;
      justify-content: space-between;
    }

    .prof-row{
      display: flex;
      margin-top: 1%;
    }
    .prof-inf{
      margin-left: 20px;
      margin-top: 2%;

    }

    .prof-container {
        position: relative;
        width: 300px;
        height: 300px;
        padding: 0;
        margin: 0;
    }

    .overlay {
        position: absolute;
        top: 0%;
        left: 1%;
        width: 100%;
        height: 100%;
    }
    .overlay img{
      position: absolute;
      top:75px;
      left: 75px;
    }
    .a_buy{
      display: flex;
      align-items: flex-end
    }

    .buyInf {
      margin-left: 1%;
      display: flex;
      flex-direction: column;
      font-size: 20px;
    }

    .buyMini {
      display: flex;

    }

    .buy-div {
      border: outset;
      border-radius: 15px;
      margin-top: 15px;
      padding-top: 10px;
      font-size: 20px;
    }
    .buy-div a{
      font-size: 20px;

    }

    .pError a {
      margin-left: 7px;
    }

    .pError {
      display: flex;
      justify-content: center;
      margin-top: 5%;
      font-size: 25px;
    }

    .div-nav {
      display: flex;
      align-items: center;

    }

    .div-nav p {
      padding: 0px;
      margin: 0px;
      padding: 1%;

    }

    .navbar-brand {
      font-size: 50px;
    }

    .prod-home {
      display: inline-block;
      margin-top: 20px;
      margin-left: 50px;
    }

    .p_b {
      display: flex;
      justify-content: center;
    }

    .p_b a {
      margin: 10px;
    }

    .prod-div {
      padding: 10px;
      border: outset;
      border-color: seagreen;
      width: 300px;
      margin-left: 50px;
      margin-right: 50px;
      margin-top: 20px;
      display: inline-block;
      flex-direction: column;
      border-radius: 15px;
    }

    .prod-div img {
      width: 100%;
    }

    .pp {
      margin-bottom: 0rem;
    }

    .prod-div p {
      margin-top: 5px;
      font-size: 25px;
      padding-left: 15px;
    }

    .home-inf {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .inf-div {
      border: dotted;
      border-color: seagreen;
      text-align: center;
      height: 300px;
      width: 300px;
      margin-left: 50px;
      margin-right: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      border-radius: 15px;
    }

    .inf-div h2 {
      font-size: 100px;
    }

    .inf-div p {
      font-size: 25px;
    }

    .d-flex p {
      margin-top: 10px;
      font-size:20px
    }

    .home-div {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      height: 200px;
      border-radius: 15px;
      margin-top: 15px;
    }

    .home-div p {
      text-align: center;
      font-size: 50px;
      width: 80%;
    }

    .text {
      display: flex;
      flex-direction: row;
    }

    .imgReg img {
      width: 100%;
      height: 100%;
    }

    .imgReg::before {
      content: "Регистрация позволит нам отслеживать ваши покупки и лучше разбираться в ваших вкусах, спасибо что выбираете Flower. ";
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 24px;
      text-align: center;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      box-sizing: border-box;
      padding-top: 50%;
      padding-left: 10%;
      padding-right: 10%;
    }

    .imgReg {
      position: relative;
      margin-left: 10px;
    }

    .imgLog img {
      width: 100%;
      height: 100%;

    }

    .imgLog::before {
      content: "Авторизуйтесь на нашем сайте для того чтобы иметь возможность продавать свои товары и мы бы могли подбирать цветы специально для вас ";
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 24px;
      text-align: center;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      box-sizing: border-box;
      padding-top: 50%;
      padding-left: 10%;
      padding-right: 10%;
    }

    .imgLog {
      position: relative;
      margin-left: 10px;
    }
  </style>
</head>

<body>

  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/bas/home">Flower</a>
      <form class="d-flex" role="search">

        <p ><a href="/bas/register" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover me-2">Зарегистрироваться</a></p>
        <p><a href="/bas/login" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover me-2">Войти</a></p>
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Поиск</button>
      </form>
    </div>
  </nav>
  <div class="div-nav" style="background-color: #FDE7E7 ;">
    <div style="width: 100%; display: flex; margin-left:15%;font-size:20px">
      <p>Все цветы</p>
      <p>Доставка</p>
      <p>Контакты</p>
      <p>О нас</p>
    </div > <label style="margin-right:15%;font-size:20px;display:flex;"><a href="/bas/profile" style="color: black;"> профиль</a>  <a href="/bas/basket" style="margin-left: 20px;color: black;"> Корзина</a>  </label>
  </div>

  </div>
  <div class="container">
    <div class="row">

