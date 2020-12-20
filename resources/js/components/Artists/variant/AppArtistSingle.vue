<template>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
    <div
      class="single-blog-post style3 wow fadeInLeft"
      data-wow-delay="0ms"
      data-wow-duration="1500ms"
      style="visibility:initial"
    >
      <div class="img-holder" style="visibility:initial">
        <img :src="artist.image" alt="Awesome Image" />
        <div class="overlay-style-one bg1"></div>
      </div>
      <a :href="`/artist/${artist.id}`" style="visibility:initial">
        <div
          style="
                    position: absolute;
                    bottom: 25px;
                    left: 0;
                    right: 0;
                    margin: auto;
                    color: white;
                    width: 90%;
                    text-align: center;
                    z-index:9999;
                    line-height:1.3;
                    "
        >
          {{ artist.name }}
        </div>
      </a>
    </div>
  </div>
</template>
<script>
export default {
  props: {
    artist: {
      required: true,
      type: Object
    }
  }
};
</script>
