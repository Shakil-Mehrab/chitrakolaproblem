<template>
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
    <div
      class="single-blog-post style3 wow fadeInLeft"
      data-wow-delay="0ms"
      data-wow-duration="1500ms"
    >
      <div class="img-holder" style="visibility:initial">
        <!-- <img :src="newsOne.image" alt="Awesome Image" /> -->
        <div
          class="exh-cover-img"
          style="min-height:200px"
          :style="{
            backgroundImage: 'url(' + newsOne.image + ')',
            backgroundColor: '#f7f7f7',
            backgroundPosition: 'center',
            backgroundRepeat: 'no-repeat',
            backgroundSize: 'contain'
          }"
        ></div>
        <div class="overlay-style-one bg1"></div>
      </div>
      <div class="text-holder" style="visibility:initial">
        <div class="border-botton"></div>
        <div class="post-date">
          <span>{{ newsOne.created_at }}</span>
        </div>
        <h3 class="blog-title">
          <a :href="`/news/detail/${newsOne.id}`"> {{ newsOne.heading }}</a>
        </h3>
        <p class="text" style="text-align:justify">
          {{ newsOne.short_description }}
        </p>
        <div class="button-box">
          <a :href="`/news/detail/${newsOne.id}`">Read More</a>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: {
    newsOne: {
      required: true,
      type: Object
    }
  }
};
</script>
