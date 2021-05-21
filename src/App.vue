<template>
  <div id="app">
    <vHeader/>
  </div>
</template>


<script>
import vHeader from "./components/v-header"
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
