<template>
  <div class="slides">
    <div class="mn">
    <div>
       <img class="slider" :src=" require('../assets/' + product_data.image)" alt="">
    </div>
    <div><span>{{product_data.title}}</span></div>
    </div>
  </div>
</template>

<script>
export default {
  props:{
    product_data:{
      type:Object,
      default:()=>[]
    }
  }
}
</script>

<style scoped>
  .slides{
    display: flex;
    flex-direction: column;
    text-align: center;
  }

  .mn{
    display: flex;
    flex-direction: column;
  }

  .slider{
    width: 200px;
    height: 200px;
  }
</style>