<template>
  <fragment>
    <section
      class="breadcrumb-area"
      style=" max-height: 100px; background-image: url('/front-asset/images/breadcrumb/breadcrumb-4.jpg');"
    >
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="inner-content clearfix">
              <div class="title">
                <h3 style="color:white;font-weight:bold">Our Artists</h3>
              </div>
              <div class="breadcrumb-menu">
                <ul class="clearfix">
                  <li><a href="/">Homes</a></li>
                  <li class="active">Artists</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <app-artist-all />
  </fragment>
</template>
<script>
import { mapGetters, mapActions } from "vuex";
export default {
  computed: {
    ...mapGetters({
      //   artists: "index/artists"
    })
  },
  methods: {
    ...mapActions({
      //   getArtists: "index/getArtists"
    })
  },
  mounted() {
    // this.getArtists();
  }
};
</script>



