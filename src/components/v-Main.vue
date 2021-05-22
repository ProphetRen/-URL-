<template>
  <div class="v-main">
    <div class="time_info">
      <div class = "time_elements first">Сегодня</div>
      <div class = "time_elements">Завтра</div>
      <div class = "time_elements">23</div>
      <div class = "time_elements">24</div>
    </div>
    <div class="slider-wrapper">
      <div class="New_kino">Новинки кино</div>
      <vSliderItem
        v-for="film in FILMS" 
        :key="film.name"
        :film_data = "film"/>
    </div>
  </div>
</template>

<script>
import {mapActions,mapGetters} from 'vuex'
import  vSliderItem from "./v-slider"

export default {
  data(){
    return{
      CSI:0
    }
  },
  components:{
    vSliderItem
  },
  computed:{
    ...mapGetters([
      'FILMS',
      ])
   },
   methods:{
     ...mapActions([
       'GET_FILMS_FROM_API',
     ]),
     NextSlide(){
       if(this.CSI > this.FILMS.length - 2){
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
  mounted(){
     this.GET_FILMS_FROM_API()
   }
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

  .slider-wrapper{
    width: 88.68vw;
    height: 44.6vw;
    background: #C4C4C4;
    box-shadow: 0px 26px 43px rgba(0, 0, 0, 0.09);
    border-radius: 32px;
    margin: 5.06vw 5.55vw 5.55vw 5.55vw;
  }
</style>