<template>
    <div class="section" >
        <event class="content" v-for="(item, i) in results" :key="i" :dataArr="item" ref="fuck"/>
        <p @click="qwe">{{date}}</p>
        <p v-show="is">НЕТ</p>
    </div>
</template>

<script>
import Event from '@/components/Event'
export default {
    props:{
        date: {
            type: String
        }
},
  data () {
      
      return {
          
        eventList : [
            {
                image: 'image7.png',
                title: '1',
                time: [
                    '12.00', '13.00'
                ],
                IsDate:'1.6.2021'
            },
             {
                image: 'image7.png',
                title: '2',
                time: [
                    '12.00', '13.00'
                ],
                IsDate:'12.6.2021'
            },
            {
                image: 'image7.png',
                title: '3',
                time: [
                    '12.00', '13.00'
                ],
                IsDate:'22.6.2021'
            }
        ],
        is:false,
        ytn:false,
        results:[

        ]
      }
  },

  methods:{
     qwe:function(){ 
        let dateq = this.date
        let result = this.eventList.filter(function(v) {
            return v.IsDate === dateq   
        })
        this.ytn = true
        this.is = false
        this.results = result
        console.log(result) 
        if(this.results.length === 0){
            this.ytn = false
            this.is = true
        }
     }
  },
    components: {
        Event
    },
    
  }
</script>

<style scoped>
    .visible{
        display: flex;
    }

    .notvisible{
        display: none;
    }
</style>