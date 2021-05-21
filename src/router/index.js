import Vue from 'vue'
import VueRouter from 'vue-router'
import vCalendar from '../components/v-Calendar'
import vEvents from '../components/v-Events'
import vMain from '../components/v-Main'

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
    }
  ]
})

export default router
