<template>
  <div class="container-fluid">
    <carousel
      class="home-slider"
      :per-page="1"
      :autoplayTimeout="3000"
      :loop="true"
      :navigationEnabled="true"
      :fade="true"
      :autoplay="true"
    >
      <slide v-for="slide in slides" :key="slide.id">
        <div>
          <img
            class="img-responsive"
            :src="slide.image"
            alt="Awesome Image"
            style="width:100%"
          />
        </div>
      </slide>
    </carousel>
  </div>
</template>

<script>
export default {
  props: {
    slides: {
      required: true,
      type: Object / Array
    }
  }
};
</script>

<style>
.home-slider .VueCarousel-navigation-button {
  color: tomato;
}
.home-slider .VueCarousel-navigation-prev {
  left: 30px;
}
.home-slider .VueCarousel-navigation-next {
  right: 50px;
}
.slide_heading {
  z-index: 9999;
  position: absolute;
  bottom: 20px;
  left: 0;
  right: 0;
  margin: auto;
}
.slide_heading h1,
.slide_heading p {
  color: white;
}
</style>
