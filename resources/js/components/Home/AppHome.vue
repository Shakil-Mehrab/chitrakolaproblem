<template>
  <fragment>
    <HomeCarousel :slides="slides" />

    <app-exibition-all />
    <app-artist-all />
    <app-upcomming-home-carousel :upcommingExibitions="upcommingExibitions" />
    <br />
  </fragment>
</template>
<script>
import { mapGetters, mapActions } from "vuex";

export default {
  data() {
    return {
      page: 1,
      lastPage: 1
    };
  },
  computed: {
    ...mapGetters({
      upcommingExibitions: "index/upcommingExibitions",
      slides: "index/slides"
    })
  },
  methods: {
    ...mapActions({
      getUpcommingExibitions: "index/getUpcommingExibitions",
      getSlides: "index/getSlides"
    })
  },
  mounted() {
    this.getSlides();
    this.getUpcommingExibitions();
  }
};
</script>

