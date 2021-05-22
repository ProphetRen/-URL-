<template>
  <div class="v-header" @click.self="outside">
    <header>
      <nav class="v-header__elements">
        <router-link :to="{name:'Main'}">
          <img src="../assets/Logo.png" alt="">
        </router-link>
        <router-link class="links" @click.self="outside" :to="{name:'Main'}">Главная</router-link>
        <router-link class="links" :to="{name:'Calendar'}">Календарь событий</router-link>
        <div class="menu_list">
          <span class="links menu" v-if="!show"
          @click="show = !show"
          key="menu"
          >
            Мероприятия
            <span>
              &#9660;
            </span>
          </span>
          <span class="links clear" v-else @click="show = !show"
          key="clear"
          >
            Мероприятия
            <span>
              &#9658;
            </span>
          </span>
          <div class="li"
          v-if="show"
          >
            <router-link class="menu_links"
              @click.self="outside"
              :to="{name:'Kino'}">Кино</router-link>
            <router-link class="menu_links" 
              @click.self="outside"
              :to="{name:'Concerts'}">Концерты</router-link>
            <router-link class="menu_links" 
              @click.self="outside"
              :to="{name:'Vystavki'}"> Выставки</router-link>
            <router-link class="menu_links" 
              @click="outside"
              :to="{name:'Yarmarki'}">Ярмарки</router-link>
            <router-link class="menu_links" 
              @click.self="outside"
              :to="{name:'StandUp'}">СтендАп</router-link>
        </div>
        </div>
        <input type="text" @click.self="outside">
        <button type="submit" @click.self="outside" value=""></button>
      </nav>
    </header>
  </div>
</template>

<script>

export default {
  data(){
    return{
      show:false
    }
    
  },
  methods: {
    outside: function(){
      this.show = false;
      return this.show
    },
}
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
  margin-left:3vw;
  align-items: center;
}

.links{
  text-decoration: none;
  font-family: Roboto;
  font-size: 1.66vw;
  color: #FFFFFF;
  margin-left: 4vw;
  height: 1.94vw;
  cursor: pointer;
}

input{
  margin-left: 9vw;
  width: 21VW;
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
  width:2.4vw;
  height:3.45vw ;
  border-radius:0  34px 34px 0;
  border:none;
  background-color:white ;
  background-image: url(../assets/Vector.png);
  background-repeat: no-repeat;
  background-position: center;
  cursor: pointer;
  outline: none;
}
span{
  font-size: 0.5vw;
  padding-top: 0.13vw;
}

.menu_list{
  display: flex;
  flex-direction: column;
}

.li{
  padding-left: 2.36vw;
  text-decoration: none;
  display: flex;
  flex-direction: column;
  position: absolute;
  width: 37.7vw;
  height: 34.7vw;
  margin-top: 6.25VW;
  color: #FFFFFF;
  background: rgba( 0.3);
  background: rgba(81, 81, 81, 0.74); 
  backdrop-filter: blur(8px);
}

.li>a{
  font-family: Roboto;
  font-size: 1.66vw;
  line-height: 1.94vw;
  padding-top: 2.63vw;
}

.menu_links{
  color: #FFFFFF;
  text-decoration: none;
  font-size: 1.66vw;
  line-height: 1.94vw;
}
</style>
