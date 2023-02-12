<template>
  <div class="carusel">
      
      <v-carusel
        :carusel_data="SliderItems"
      />
      
  </div>
</template>
<script>

import vCarusel from './v-carusel';
export default {
  name:'slider',
  components:{
    vCarusel
  },
  data(){
    return{
        SliderItems:[
            {id:1,name:'img1',img:'/images/slider1.png'},
            {id:2,name:'img2',img:'/images/slider2.png'},
            {id:3,name:'img3',img:'/images/slider3.png'},
        ]
    }

  },  
}
</script>