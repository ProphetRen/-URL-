<template>
    <div class="block_event">
        <section>
            <div class="information_block">
                <p class="event_name">{{dataArr.event_name}}</p>
                <p class="age_limit">{{dataArr.age_limit}}</p>
            </div>
            <div class="times">
                <p class="time" v-for="(item, i) in dataArr.time" :key="i+'img'">{{item}}</p>
            </div>
            <p class="price">{{dataArr.price}}</p>
        </section>
    </div>
</template>

<script>
//import EventInformation from '@/components/EventInformation'
export default {
    props: {
        dataArr: {
            type: Object
        }
    },
    data() {
        return {
        }
    }
 }
</script>

<style scoped>
.block_event {
    display: flex;
    justify-content: space-between;
    margin: 4.86vw 4vw 4.03vw 7.01vw;
}
.information_block {
    width: 21.18vw;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
img {
    width: 9.93vw;
    height: 13.33vw;
    border-radius: 2.08vw;
}
.information {
    display: flex;
    justify-content: space-between;
}
.time {
    border-radius: 1.11vw;
    background-color: #C4C4C4;
    font-style: normal;
    font-weight: normal;
    font-size: 1.67vw;
    line-height: 1.94vw;
    color: #FFFFFF;
    margin-right: 0.76vw;
    padding: 0.56vw 1.11vw;
}
.price {
    border-radius: 1.11vw;
    background: #67B800;
    font-style: normal;
    font-weight: normal;
    font-size: 1.67vw;
    line-height: 1.94vw;
    color: #FFFFFF;
    padding: 0.56vw 1.11vw;
    display: inline-flex;
}
.times
{
    display: flex;
}
.event_name {
    font-size: 1.67vw;
    line-height:1.94vw;
}
.age_limit
{
    font-size: 1.67vw;
    line-height:1.94vw;
    border: 0.07vw solid #000000;
    box-sizing: border-box;
    height: 3.61vw;
    width: 3.61vw;
    text-align: center;
    padding-top: 0.8vw;
}
</style>