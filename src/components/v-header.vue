<template>
  <div class="v-header">
    <header>
      <nav class="v-header__elements">
        <router-link :to="{name:'Main'}">
          <img src="../assets/images/Logo.png" alt="">
        </router-link>
        <router-link class="links" :to="{name:'Main'}">Главная</router-link>
        <router-link class="links" :to="{name:'Calendar'}">Календарь событий</router-link>
        <router-link class="links" :to="{name:'Events'}">Мероприятия
          <span>&#9660;</span>
          </router-link>
        <input type="text">
        <button type="submit" value=""></button>
      </nav>
    </header>
  </div>
</template>

<script>

export default {

}
</script>

<style scoped>
.v-header{
  background-color:#c4c4c4;
  width: 100%;
  height: 10.625VW;
  display: flex;
  flex-direction: row;
  align-items: center;
  }

.v-header__elements{
  display: flex;
  flex-direction: row;
  margin-left:3.54vw;
  align-items: center;
}

.links{
  text-decoration: none;
  font-family: Roboto;
  font-size: 1.66vw;
  line-height: 1.94vw;
  color: #FFFFFF;
  margin-left: 6.1vw;
}

input{
  margin-left: 12.6vw;
  width: 23.5VW;
  height: 3.47vw;
  border-radius: 34px  0 0 34px ;
  border:none;
  outline: none;
  padding-left:30px;
  font-size: 1.66vw;
  line-height: 1.94vw;
  color: #000000;
}

button{
  width:2.1vw;
  height:3.45vw ;
  border-radius:0  34px 34px 0;
  border:none;
  background-color:white ;
  background-image: url(../assets/images/Vector.png);
  background-repeat: no-repeat;
  background-position: center;
  cursor: pointer;
  outline: none;
}
span{
  font-size: 0.7vw;
}
</style>
