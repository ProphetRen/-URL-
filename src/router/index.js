import Vue from 'vue'
import VueRouter from 'vue-router'
import vCalendar from '../pages/Calendar'
import vMain from '../pages/Main'
import vConcerts from '../pages/Concerts'
import vKino from '../pages/SectionEventInformation'
import vVistavki from '../pages/Vistavki'
import vSpektakli from '../pages/Spektakli'
import vStandUp from '../pages/Authorisation'

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
      path:"/Spektakli",
      name:'Spektakli',
      component:vSpektakli
    },
    {
      path:"/Authorisation",
      name:'Authorisation',
      component:vStandUp
    }
  ]
})

export default router
