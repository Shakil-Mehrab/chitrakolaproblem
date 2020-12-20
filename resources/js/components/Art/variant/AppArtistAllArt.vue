<template>
  <section class="gallery-area">
    <div class="container">
      <div class="sortable-masonry">
        <!--Filter-->
        <div class="filters text-center clearfix">
          <ul class="filter-tabs filter-btns clearfix">
            <li
              class="active filter"
              data-role="button"
              data-filter=".all"
              v-if="arts.length"
            >
              Artworks Of {{ arts[0].artist }}
            </li>
            <li
              v-else
              class="active filter"
              data-role="button"
              data-filter=".all"
            >
              Artists's Artwork not Exists.
            </li>
          </ul>
        </div>
        <div class="row items-container clearfix">
          <div
            class="col-xl-4 col-lg-6 col-md-6 col-sm-12 masonry-item all art insta"
            v-for="art in arts"
            :key="art.id"
          >
            <div class="single-art-box-style2 marbtm50">
              <div class="img-holder">
                <!-- <img :src="art.image" alt="Awesome Image" /> -->
                <div
                  class="exh-cover-img"
                  style="min-height:400px"
                  :style="{
                    backgroundImage: 'url(' + art.image + ')',
                    backgroundColor: '#f7f7f7',
                    backgroundPosition: 'center',
                    backgroundRepeat: 'no-repeat',
                    backgroundSize: 'contain'
                  }"
                ></div>
                <div class="overlay-content">
                  <div class="zoom-button">
                    <a
                      class="lightbox-image"
                      data-fancybox="gallery"
                      :href="art.image"
                    >
                      <i class="fa fa-search-plus" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="text-holder" style="padding:0">
                <h3>
                  <a :href="`/art/detail/${art.id}`">{{ art.name }}</a>
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="view-more-button text-center">
        <a class="btn-two" href="#">View More</a>
      </div> -->
    </div>
  </section>
</template>
<script>
export default {
  props: {
    arts: {
      required: true,
      type: Array
    }
  }
};
</script>
<style>
.exh-cover-img {
  min-height: 280px;
}
</style>
