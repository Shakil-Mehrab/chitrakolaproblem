<template>
  <div
    class="col-xl-4 col-lg-6 col-md-6 col-sm-6 wow fadeInUp"
    style="visibility:initial"
  >
    <div class="single-exhibition-box" style="visibility:initial">
      <div class="img-holder">
        <img :src="exibition.image" :alt="exibition.name" />
        <!-- <div
          class="exh-cover-img"
          :style="{
            backgroundImage: 'url(' + exibition.image + ')',
            backgroundColor: '#f7f7f7',
            backgroundPosition: 'center',
            backgroundRepeat: 'no-repeat',
            backgroundSize: 'contain'
          }"
        ></div> -->
        <div class="overlay-style-one bg1">
          <div class="zoom-button">
            <a
              class="lightbox-image"
              data-fancybox="gallery"
              :href="exibition.image"
            >
              <i class="fa fa-search-plus" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="text-holder text-center pt-0">
        <h6>
          <a
            :href="`exibition/${exibition.id}`"
            style="color: #655b5b;font-weight:bold"
          >
            <span style="color:#193f48">{{ exibition.name }}</span></a
          >
        </h6>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: {
    exibition: {
      required: true,
      type: Object
    }
  }
};
</script>

<style>
.exh-cover-img {
  min-height: 180px;
}
</style>
