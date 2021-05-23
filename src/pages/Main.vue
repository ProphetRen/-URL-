<template>
  <div class="v-main">
    <div class="time_info">
      <div class = "time_elements first">Сегодня</div>
      <div class = "time_elements">Завтра</div>
      <div class = "time_elements">23</div>
      <div class = "time_elements">24</div>
    </div>
    <div class="slider-wrapper" >
      <div class="New_kino">Новинки</div>
      <vSlider/>
    </div>
  </div>
</template>

<script>
import vSlider from "../components/Slider"
import {mapActions,mapGetters} from 'vuex'

export default {
  data(){
    return{
    }
  },
  components:{
    vSlider
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
    height: 4.2vw;
    align-self: center;

  }
  .first{
    margin-left: 7.8vw;
  }
  .time_elements{
    text-align: center;
    align-items: center;
    background: #FFFFFF;
    border-radius: 42px;
    margin-right: 3.4vw;
    margin-top: 1.59vw;
    width: 9.3vw;
    height: 1.5vw;
    background-color:white ;
    padding-top: 0.6vw;
    font-family: Roboto;
    font-size: 1.3vw;
    line-height: 1.94vw;
    color: #000000;
    padding-bottom: 0.3vw;
  }

  .time_elements:hover{
    background-color:#67B800;
  }

  .slider-wrapper{
    display: flex;
    flex-direction: column;
    max-width: 88.68vw;
    height: 44.6vw;
    background: #C4C4C4;
    box-shadow: 0px 26px 43px rgba(0, 0, 0, 0.09);
    border-radius: 32px;
    margin: 5.06vw 5.55vw 5.55vw 5.55vw;
    justify-content: center;
    align-items: center;
    align-self: center;
  }

  .New_kino{
    font-family:Roboto;
    font-size: 5vw;
    margin-bottom:10vw;
    margin-right: 4vw;
  }
</style>