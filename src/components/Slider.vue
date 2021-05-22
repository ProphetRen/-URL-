<template>
  <div class ="main_sl">
    <div :style="{'margin-left':'-' + (102 * CSI) + '%'}" class="sl-m">
      <SliderItem class="slides"
        v-for="(product, i) in this.Image" 
        :key="i+1+'imgSlider'"
        :product_data = "product"
      />
    </div>
    <div>
      <button class="buttons" @click="PrevSlide">Предыдущая</button>
      <button class="buttons" @click="NextSlide">Следующая</button>
    </div>
     
  </div> 
</template>

<script>
import SliderItem from '../components/SliderItem'
export default {
  data(){
    return{
      Image:[
        {
          image:"1.png",
          name:"1",
          title:"Кровь"
        },
        {
          image:"2.png",
          name:"2",
          title:"Меч"
        },
        {
          image:"3.png",
          name:"3",
          title:"Говяжий"
        },
        {
          image:"4.png",
          name:"4",
          title:"Анус"
        },
        {
          image:"5.png",
          name:"5",
          title:"Кровь"
        },
        {
          image:"6.png",
          name:"6",
          title:"Меч"
        },
        {
          image:"7.png",
          name:"7",
          title:"Говяжий"
        },
        {
          image:"8.png",
          name:"8",
          title:"Анус"
        } ,{
          image:"9.png",
          name:"9",
          title:"Кровь"
        },
        {
          image:"10.png",
          name:"10",
          title:"Меч"
        },
        {
          image:"11.png",
          name:"11",
          title:"Говяжий"
        },
        {
          image:"12.png",
          name:"12",
          title:"Анус"
        }        
      ],
      CSI:0
    }  
  },
  components:{
    SliderItem
  },
   methods:{
     NextSlide(){
       if(this.CSI> this.Image.length/8){
         this.CSI = 0
         console.log(this.CSI);
       }else{
         this.CSI++
       }
     },
     PrevSlide(){
       if(this.CSI > 0 ){
         this.CSI --
       }else{
         this.CSI = 5;
         this.CSI--
       }
     }
  },
  
}
</script>

<style scoped>
.slides{
  display: flex;
  flex-direction: row;
  padding-right: 4vw;
}

.main_sl{
  display: flex;
  flex-direction: column;
  overflow: hidden;
  width: 70vw;
}

.sl-m{
  overflow: hidden;
  display: flex;
  flex-direction: row;
}
</style>