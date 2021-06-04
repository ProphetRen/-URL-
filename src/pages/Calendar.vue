
<template>

<div class='mainOuter'>
  <div class='calendar'>
  
  <functional-calendar
       v-model="calendar"
       v-on:choseDay="clickDay"
       v-on:changeMonth="changeDate"
       v-on:isToday="clickToday"
       :change-month-function="true"
       :change-year-function="true"
       :configs="calendarConfigs"
      
  ></functional-calendar>
  </div>
  <div class="list">
     
  <events :date="date"/>
  </div>
    </div>
      
</template>

<script>
import {FunctionalCalendar} from 'vue-functional-calendar'
import Events from '@/components/Events'

export default {
    components: {
        FunctionalCalendar,
        Events
    },
    data() {
        return {
            calendar: {},
            calendarConfigs: {
                dateFormat: 'dd.mm.yyyy',
                isDatePicker:true,
                sundayStart:false
            },
            date: ''
        }
    },
    methods:{
       clickDay(data) {
         this.date = data.date
      console.log(data); // Get Clicked Day
    },
    changeDate(data) {
      console.log(data); //Click left and right to switch months
    },
    clickToday(data) {
      console.log(data); //Jumped to this month
    },
      
    },

}
</script>
<style scoped>
.mainOuter{
  display: flex;
  justify-content: space-between;
}
.calendar{
  padding: 5vw;
  padding-top:9vw;
  width:30%;
  border-right: 0.01vw solid #DCDCDC;
}
.list{
  height: 27.5vw;
  width: 45%;
  padding: 5vw;
  overflow: scroll;
  overflow-x: hidden;
}

.low_date{
  margin:1vw;
}
</style>