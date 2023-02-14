<template>
    <div class="wrapper">
      <div class="v-carusel" :style="{'margin-left':'-'+(1600*currentSlideIndex)+'px'}">
      <v-carusel-item
        v-for="item in carusel_data"
        :key="item.id"
        :item_data="item"
      />
      </div>
      <button @click="PrevSlide">Prev</button>
      <button @click="NextSlide">Next</button>
    </div>
</template>

<script>

import vCaruselItem from './v-carusel-item'
export default {
  name:'v-carusel',
  components:{
    vCaruselItem
  },
  props:{
    carusel_data:{
        type:Array,
        default:()=>[]
    },
    interval:{
      type:Number,
      default:0
    },
  },
  methods:{
    PrevSlide(){
      if(this.currentSlideIndex>0){

        this.currentSlideIndex--
      }
    },
    NextSlide(){
      if(this.currentSlideIndex>=this.carusel_data.length-1){
        this.currentSlideIndex=0  
      }
      else{
        this.currentSlideIndex++
      }
    }

  },
  mounted(){
    if(this.interval>0){
      let vm=this;
      setInterval(function(){
        vm.NextSlide();
      },vm.interval)
    }
  },
  data(){
    return{
      currentSlideIndex:0,
    }
  }, 
  computed:{} 
}
</script>
<style scoped lang="scss">
  .wrapper{
    overflow:hidden;
    .v-carusel{
    display:flex;
    transition: all ease 1.5s;
    img
      {
        min-width:100%;
        
      }
  }
  }
  
 
</style>