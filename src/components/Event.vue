<template>
    <div class="block_event">
        <img :src="require(`@/assets/${dataArr.image}`)" class="picture">
        <div class="information_block">
            <p class="listTitle">{{dataArr.title}}</p>
            <p class="IsDate">{{dataArr.IsDate}}</p>
            <div class="information">
                <p class="time" v-for="(item, i) in dataArr.time" :key="i+'img'">{{item}}</p>
            </div>
        </div>  
    </div>
</template>

<script>
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
    margin-bottom: 4vw;
}
.information_block {
    margin: 5.21vw 0 0 4.86vw;
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
.listTitle{
    font-size: 2.5vw;
    margin-bottom: 1vw;
}
.time {
    padding: .2vw .9vw;
    margin-right: 1vw;
    border-radius: 0.9vw;
    background-color: #C4C4C4;
    font-style: normal;
    font-weight: normal;
    font-size: 1.67vw;
    line-height: 1.94vw;
    color: #FFFFFF;
}
.IsDate{
    display: none;
}
</style>