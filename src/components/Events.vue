<template>
    <div class="section" >
        <event class="content" v-for="(item, i) in eventList" :key="i+'img'" :dataArr="item" v-show="date===eventList[i].IsDate"/> 
    </div>
</template>

<script>
import Event from '@/components/Event'
export default {
  name: 'App',
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
                title: 'sgfdh',
                time: [
                    '12.00', '13.00'
                ],
                IsDate:'22/5/2021'
            },
             {
                image: 'image7.png',
                title: 'hghvvgh',
                time: [
                    '12.00', '13.00'
                ],
                IsDate:'12/5/2021'
            },
            {
                image: 'image7.png',
                title: 'hghvvgh',
                time: [
                    '12.00', '13.00'
                ],
                IsDate:'28/5/2021'
            }
        ]
      }
  },
  methods:{
  },
  components: {
    Event
  }
}
</script>