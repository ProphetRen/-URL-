<template>
  <div class="background">
    <img class="img" src="../assets/bg.png" alt="">
    <div class="Outer">
    <form class='form' action="">
      <img src="../assets/ava.png" alt="">
      <p class="name">Авторизация</p>
      <input class="e-mail" type="text" placeholder="e-mail">
      <input class="password" type="text" placeholder="Пароль">
      <span>
      <button class="btn">Войти</button>
      <a href="">Регистрация</a>
      </span>
    </form>
  </div>
  </div>
</template>

<script>
export default{
  
}

</script>

<style scoped>
.img{
  width: 35vw;
  position: absolute;
  left:44vw;
  top:14vw;
}
.Outer{
  background-color: rgba(0, 0, 0, 0.35);
  width:30%;
  padding: 5vw;
  padding-left: 15vw;
  backdrop-filter: blur(8px);
}
.form{
  padding-top:4vw;
  display: flex;
  flex-direction: column;
  align-items: center;
  background-color: #cccccc;
  width:20vw;
  height: 29.57vw;
  border-radius: 1.7vw;
}
.form img{
  width:7vw;
}
.name{
  color:#ffffff;
  font-size: 2vw;
  margin-top: 1vw;
}
input{
  width:15vw;
  margin-top: 1vw;
  border-radius: 1vw;
  padding: .7vw;
  border: none;
  background-color: #ffffff35;
}
::-webkit-input-placeholder {color:#fff;}
:-moz-placeholder {color:#fff;}
::-moz-placeholder {color:#fff;}
:-ms-input-placeholder {color:#fff;}
span{
  width: 15vw;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-top: .7vw;  
}
.btn{
  width:5vw;
  padding: .4vw;
  border-radius: .8vw;
  border: none;
  background: #67B800;
  color:#ffffff
}
a{
  text-decoration: none;
  color:#ffffff;
}

</style>
