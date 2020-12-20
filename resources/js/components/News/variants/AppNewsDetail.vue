<template>
  <fragment>
    <section
      class="breadcrumb-area"
      style="
        max-height: 100px;
        background-image: url('/front-asset/images/breadcrumb/breadcrumb-4.jpg');
      "
    >
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="inner-content clearfix">
              <div class="title">
                <h3 style="color:white;font-weight:bold">News Detail</h3>
              </div>
              <div class="breadcrumb-menu">
                <ul class="clearfix">
                  <li><a href="/">Home</a></li>
                  <li class="active">News Detail</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="events-single-area">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="events-single-image-box" style="margin-bottom:5px">
              <img :src="newsDetail.image" alt="Awesome Image" />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12">
            <div class="events-single-text-box">
              <h3>{{ newsDetail.created_at }}</h3>
              <h2 style="margin-top:0px;margin-bottom:0px">
                {{ newsDetail.heading }}
              </h2>
              <div v-html="nDescrip"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </fragment>
</template>
<script>
import { mapGetters, mapActions } from "vuex";
export default {
  computed: {
    ...mapGetters({
      newsDetail: "detail/newsDetail"
    }),
    urlWithId() {
      return `/api/news/detail/${this.$route.params.id}`;
    },
    nDescrip() {
      return this.newsDetail.description;
    }
  },
  methods: {
    ...mapActions({
      getNewsDetail: "detail/getNewsDetail"
    }),
    loadNews() {
      this.getNewsDetail(this.urlWithId);
    }
  },
  mounted() {
    this.loadNews();
    console.log(this.newsDetail.description);
  }
};
</script>
