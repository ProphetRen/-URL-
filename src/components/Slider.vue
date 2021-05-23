<template>
  <div class="">
    <VueSlickCarousel class="slider_main"
    v-bind="settings">
      <SliderItem v-for="film in this.films" 
        :key="film.name"
        :films = "film">
      </SliderItem>
    </VueSlickCarousel>
  </div>
</template>

<script>
import SliderItem from "../components/SliderItem"
import VueSlickCarousel from 'vue-slick-carousel'
import 'vue-slick-carousel/dist/vue-slick-carousel.css'
import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css'
export default {
  data(){
    return{
        films:[
        {
          image:"1.png",
          name:"Логотип Vue",
          price:"100",
          article:"T1",
          available:true,
          type:"Кино",
        },
        {
          image:"2.png",
          name:"Закат",
          price:"120",
          article:"T2",
          available:true,
          type:"Кино",
        },
        {
          image:"3.png",
          name:"Охуевший кот",
          price:"130",
          article:"T3",
          available:true,
          type:"Кино",
        }, 
        {
          image:"4.png",
          name:"Кавказ",
          price:"140",
          article:"T4",
          available:true,
          type:"Кино",
        }
      ],
  settings:{
  dots: true,
  focusOnSelect: true,
  infinite: true,
  speed: 500,
  slidesToShow: 3,
  slidesToScroll: 3,
  touchThreshold: 5,
  autoplay: true,
  autoplaySpeed: 6000,
  cssEase: "linear",
  responsive: [
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
    },
  ]
  },
  }
  },
  components:{
    SliderItem,
    VueSlickCarousel
  }
}
</script>

<style scoped>
  .slider_main{
    width: 60vw;
    height: 20vw;
  }
</style>