<template>
  <div class="slider-item">
    <img :src=" require('../assets/Images/' + film_data.image)">
  </div>
</template>

<script>

export default {
  porps:{
    film_data:{
      type:Object
    }
  }
}
</script>

<style scoped>

</style>
