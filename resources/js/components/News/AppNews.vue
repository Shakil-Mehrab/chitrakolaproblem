<template>
  <span>
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
                <h3 style="color:white;font-weight:bold">Our News</h3>
              </div>
              <div class="breadcrumb-menu">
                <ul class="clearfix">
                  <li><a href="/">Home</a></li>
                  <li class="active">News</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <app-news-all />
  </span>
</template>
<script>
import { mapGetters, mapActions } from "vuex";
export default {
  computed: {
    ...mapGetters({
      //   news: "index/news"
    })
  },
  methods: {
    ...mapActions({
      //   getNews: "index/getNews"
    })
  },
  mounted() {
    // this.getNews();
  }
};
</script>
