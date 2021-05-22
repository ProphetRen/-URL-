<template>
<div>
    <div>
      <img  :src=" require('../assets/' + films.image)" alt="">
    </div>
    <div class="title">
      <span>{{films.name}}</span>
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
  }
</style>