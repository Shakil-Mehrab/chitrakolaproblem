<template>
  <section class="events-area">
    <div class="container">
      <div class="sec-title">
        <div class="big-title">
          <h2 class="text-center">Upcoming Exhibitions</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="" style="display:block">
            <carousel>
              <slide
                v-for="exibition in upcommingExibitions"
                :key="exibition.id"
              >
                <div
                  class="single-event-box"
                  style="margin-right:20px"
                  v-if="exibition.status == 0 && exibition.slug !== 'default'"
                >
                  <div class="img-holder">
                    <div class="inner">
                      <img :src="exibition.image" alt="Awesome Image" />
                      <div class="overlay-style-one bg2"></div>
                    </div>
                    <!-- <div class="date-box">
                        <div class="left">30</div>
                        <div class="right">
                            <h6>November</h6>
                            <h3>SATURDAY</h3>
                        </div>
                        </div> -->
                  </div>
                  <div class="title-holder" style="margin-top:0">
                    <div class="inner">
                      <span>{{ exibition.name }}</span>
                      <h3>
                        <a
                          href="#"
                          v-if="exibition.artist.name !== 'Default'"
                          >{{ exibition.artist.name }}</a
                        ><i
                          class="fa fa-angle-double-right"
                          aria-hidden="true"
                        ></i>
                      </h3>
                    </div>
                    <!-- <div class="bottom">
                        <div class="text">
                            November 30, 2019 - November 28, 2020
                        </div>
                        <div class="button">
                            <a href="#">Find More</a>
                        </div>
                        </div> -->
                  </div>
                </div>
                <!-- <div class="text-holder">
                    <div class="post-date">
                        <span>January 12, 2019</span>
                    </div>
                    <h3 class="blog-title">
                        <a href="blog-single.html"
                        >Scenes from Stepan Hawkin’s World</a
                        >
                    </h3>
                    </div> -->
              </slide>
            </carousel>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
export default {
  props: {
    upcommingExibitions: {
      required: true,
      type: Object / Array
    }
  }
};
</script>
