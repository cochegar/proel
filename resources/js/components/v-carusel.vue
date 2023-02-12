<template>
    <div class="wrapper">
      <div class="v-carusel">
      <v-carusel-item
        v-for="item in carusel_data"
        :key="item.id"
        :item_data="item"
      />
      </div>
      <button>Prev</button>
      <button>Next</button>
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
    }
  },
  data(){
    return{}
  }, 
  computed:{} 
}
</script>
<style scoped lang="scss">
  .wrapper{
    overflow:hidden;
    .v-carusel{
    display:flex;
    img
      {
        min-width:100%;
        
      }
  }
  }
  
 
</style>