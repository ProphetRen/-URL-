<template>
    <div class="section">
        <h1 class="name"> Кино </h1>
        <div v-for="(index, i) in eventInformatioList" :key="i+'block'">
            <div class="line_date" >
                <p class="date">{{index.date}}</p>
                <p class="line"></p>
            </div>
            <div class="event_information">
                <event-information class="content" v-for="(item, i) in index.movies" :key="i+'img'" :dataArr="item"/>
            </div>
        </div>
    </div>
</template>

<script>
import EventInformation from '@/components/EventInformation'
export default {
  name: 'App',
  components:{
      EventInformation
  },
  data () {
      return {
        eventInformatioList: [
            {
                date: '01.01.2020',
                movies : [
                    {   
                        name: 'Кино',
                        event_name: 'Боль',
                        age_limit: '+6',
                        time: [
                            '12.00', '13.00', '17:00',
                        ],
                        price: '1200 руб.',
                        date: '12.12.2012'
                    },
                    {
                        name: 'Кино',
                        event_name: 'Страдание',
                        age_limit: '+12',
                        time: [
                            '12.00', '13.00', '17:00'
                        ],
                        price: '1200 руб.',
                        date: '12.12.2012'
                    },
                    {
                        name: 'Кино',
                        event_name: 'Паника',
                        age_limit: '+18',
                        time: [
                            '12.00', '13.00', '17:00'
                        ],
                        price: '1200 руб.',
                        date: '12.12.2012'
                    }
                ]
            },
            {
                date: '01.01.2020',
                movies : [
                    {   
                        name: 'Кино',
                        event_name: 'Боль',
                        age_limit: '+6',
                        time: [
                            '12.00', '13.00', '17:00',
                        ],
                        price: '1200 руб.',
                        date: '12.12.2012'
                    },
                    {
                        name: 'Кино',
                        event_name: 'Страдание',
                        age_limit: '+12',
                        time: [
                            '12.00', '13.00', '17:00'
                        ],
                        price: '1200 руб.',
                        date: '12.12.2012'
                    },
                    {
                        name: 'Кино',
                        event_name: 'Паника',
                        age_limit: '+18',
                        time: [
                            '12.00', '13.00', '17:00'
                        ],
                        price: '1200 руб.',
                        date: '12.12.2012'
                    }
                ]
            }
            
        ]
    }
  }
}
</script>

<style scoped>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.line {
    flex: auto;
    padding: .05rem;
    background: 0,01vw #C4C4C4;
    height: 0.03vw;
}
.event_information {
    display: flex;
    
}
.line_date {
    display: flex;
    align-items: flex-end;
    margin: 0 3.75vw;
}
.date{
font-size: 1.67vw;
line-height: 1.94vw;
color: #C4C4C4;
}
.name {
    font-size: 5vw;
    line-height: 5.83vw;
    margin: 1.53vw 0 1.53vw 3.54vw;
}
</style>