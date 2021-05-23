<template>
<div>
    <div>
      <img  :src=" require('../assets/' + films.image)" alt="">
    </div>
    <div class="title">
      <span>{{films.name}}</span>
      -
      <span>{{films.type}}</span>
    </div>
    <div class="type">
       
    </div>
  </div>
</template>

<script>
export default {
  props:{
    films:{
      type:Object
    }
  }
  
}
</script>

<style scoped>
  .title{
    text-align: center;
    padding-right: 8vw;
    font-family: Roboto;
    font-size: 1vw;
  }

  .type{
    text-align: center;
    font-family: Roboto;
    font-size: 1vw;
  }
</style>