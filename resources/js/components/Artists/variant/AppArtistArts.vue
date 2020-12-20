<template>
  <fragment>
    <section
      class="breadcrumb-area"
      style="max-height: 100px;background-image: url('/front-asset/images/breadcrumb/breadcrumb-4.jpg');"
    >
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="inner-content clearfix">
              <div class="title" style="max-width:420px">
                <h3 style="color:white;font-weight:bold">Art Of Artist</h3>
              </div>
              <div class="breadcrumb-menu">
                <ul class="clearfix" style="max-width:420px">
                  <li><a href="/">Home</a></li>
                  <li><a href="/artists">Artist</a></li>
                  <li class="active">Arts</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <app-artist-all-art :arts="arts" />

    <br />
  </fragment>
</template>
<script>
import { mapGetters, mapActions } from "vuex";
export default {
  computed: {
    ...mapGetters({
      arts: "index/arts"
    }),
    urlWithId() {
      return `/api/artist/${this.$route.params.id}`;
    }
  },
  methods: {
    ...mapActions({
      getArtistArts: "index/getArtistArts"
    }),
    loadArts() {
      this.getArtistArts(this.urlWithId);
    }
  },
  mounted() {
    this.loadArts();
    console.log(this.$route.params.id);
  }
};
</script>

