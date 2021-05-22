import Vue from 'vue'
import VueRouter from 'vue-router'
import vCalendar from '../pages/v-Calendar'
import vEvents from '../components/v-Events'
import vMain from '../pages/v-Main'
import vConcerts from '../components/v-Concerts'
import vKino from '../components/v-Kino'
import vVistavki from '../components/v-Vistavki'
import vYarmarki from '../components/v-Yarmarki'
import vStandUp from '../components/v-StandUp'

Vue.use(VueRouter)



const router = new VueRouter({
  routes:[
    {
      path:"/",
      name:'Main',
      component:vMain
    },
    {
      path:"/Calendar",
      name:'Calendar',
      component:vCalendar
    },
    {
      path:"/Events",
      name:'Events',
      component:vEvents
    },
    {
      path:"/Concerts",
      name:'Concerts',
      component:vConcerts
    },
    {
      path:"/Kino",
      name:'Kino',
      component:vKino
    },
    {
      path:"/Vistavki",
      name:'Vistavki',
      component:vVistavki
    },
    {
      path:"/Yarmarki",
      name:'Yarmarki',
      component:vYarmarki
    },
    {
      path:"/StandUp",
      name:'StandUp',
      component:vStandUp
    }
  ]
})

export default router
