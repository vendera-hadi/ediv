<template>
  <carousel :scrollPerPage="true" :perPage="1" :autoplay="true" :paginationPadding="3" :navigationEnabled="true">
    <slide v-for="(image, index) in images" v-bind:key="index">
      <img v-bind:src="image.path" v-bind:title="image.title" v-bind:alt="image.title" class="img-fluid">
      <div class="slider-overlay text-left text-white" v-if="image.title">
        <h2 class="text-custom3">{{image.title}}</h2>
        <p class="text-custom3">{{image.desc}}</p>
      </div>
    </slide>
  </carousel>
</template>

<script>
import { Carousel, Slide } from 'vue-carousel';

export default {
  props: ['images'],
  components: {
    Carousel,
    Slide
  }
};
</script>
