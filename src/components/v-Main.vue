<template>
  <div class="v-main">
    <div class="time_info">
      <div class = "time_elements first">Сегодня</div>
      <div class = "time_elements">Завтра</div>
      <div class = "time_elements">23</div>
      <div class = "time_elements">24</div>
    </div>
  </div>
</template>

<script>
import {mapActions,mapGetters} from 'vuex'
export default {
  data(){
    return{
      CSI:0
    }
  },computed:{
    ...mapGetters([
      'PRODUCTS',
      ])
   },
   methods:{
     ...mapActions([
       'GET_PRODUCTS_FROM_API',
     ]),
     NextSlide(){
       if(this.CSI > this.PRODUCTS.length - 2){
         this.CSI = 0
         console.log(this.CSI);
       }else{
         this.CSI++
       }
     },
     PrevSlide(){
       if(this.CSI > 0){
         this.CSI--
       }else{
         this.CSI = 4;
         this.CSI--;
       }
     }
  },
}
</script>

<style scoped>
  .time_info{
    display: flex;
    flex-direction: row;
    width: 100%;
    background: #EBEAEA;
    height: 5.48vw;

  }
  .first{
    margin-left: 7.8vw;
  }
  .time_elements{
    text-align: center;
    background: #FFFFFF;
    border-radius: 42px;
    margin-right: 3.4vw;
    margin-top: 1.59vw;
    width: 9.3vw;
    height: 2.7vw;
    background-color:white ;
    padding-top: 0.6vw;
    font-family: Roboto;
    font-size: 1.66vw;
    line-height: 1.94vw;
    color: #000000;
  }

  .time_elements:hover{
    background-color:#67B800;
  }
</style>