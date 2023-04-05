<template>
    <div class="v-carusel-item">
        <img :src=item_data.img>
    </div>
</template>

<script>


export default {
  name:'v-carusel-item',
  props:{
    item_data:{
      type:Object,
      default:()=>{}
    }
  },
  
  data(){
    return{}
  }, 
  computed:{
    itemImage() {
      if (!this.item_data.img) {
        return
      }
      const fileName = this.item_data.img;
      return require(`/images/${fileName}`);
    }
  } 
}
</script>