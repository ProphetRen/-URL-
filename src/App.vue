<template>
  <div id="app">
    <vHeader/>
    <keep-alive>
      <router-view>
      </router-view>
    </keep-alive>
  </div>
</template>


<script>
import 'vue-slick-carousel/dist/vue-slick-carousel.css'
import vHeader from "./components/header"
export default{
  components:{
    vHeader
  }
}
</script>


<style lang="scss">
  #App{
    display: flex;
    flex-direction: column;
    margin: 0;
    padding: 0;
  }
</style>
