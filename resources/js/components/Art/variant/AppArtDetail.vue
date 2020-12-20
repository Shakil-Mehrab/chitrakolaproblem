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
                <h3 style="color:white;font-weight:bold">Art Detail</h3>
              </div>
              <div class="breadcrumb-menu">
                <ul class="clearfix">
                  <li><a href="/">Home</a></li>
                  <li class="active">Art Detail</li>
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
          <div class="col-md-6">
            <div class="events-single-image-box">
              <a :href="artDetail.image" target="_blank">
                <img :src="artDetail.image" alt="Awesome Image"
              /></a>
            </div>
            <div class="events-single-text-box">
              <!-- <h3>{{ artDetail.name }}</h3> -->
              <!-- <h5>{{ artDetail.created_at | timeformat }}</h5> -->
              <!-- {{ artDetail }} -->
              <div v-html="nDescrip" style="text-align:justify"></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="events-single-image-box">
              <ul>
                <li>
                  <h3>Code : {{ artDetail.code }}</h3>
                </li>
                <li>
                  <h3>Title : {{ artDetail.name }}</h3>
                </li>
                <li v-if="artDetail.artist_name !== 'Default'">
                  Artist : {{ artDetail.artist_name }}
                </li>
                <!-- <li>Code : {{ artDetail.code }}</li> -->
                <li>Size : {{ artDetail.size }}</li>
                <li>Media : {{ artDetail.media }}</li>
                <li>Year : {{ artDetail.year }}</li>
                <li>Price : {{ artDetail.price }}</li>
              </ul>
              <br />
              <ul>
                <li>
                  <h3>Payment System :</h3>
                </li>
                <li>
                  1. Cash on Delivary / Payment through
                  <strong> BKash</strong> / Through the bank account of
                  <strong> Chitrakola Gallery </strong>
                </li>
                <li>2. Free home delivary within Dhaka</li>
                <li>
                  3. <strong>Shipping cost</strong> will be added with artwork
                  price for
                  <strong>international / out of Dhaka buyer's</strong>
                </li>
              </ul>
              <br />
              <h2>To Buy this artwork</h2>
              <h3>Please Fill up the informations</h3>
              <form @submit.prevent="submit">
                <div class="form-group">
                  <label>Code</label>
                  <input
                    type="text"
                    class="form-control"
                    name="code"
                    id="code"
                    v-model="form.code"
                    required
                    disabled
                  />
                </div>
                <div class="form-group" style="display:none">
                  <input
                    type="text"
                    class="form-control"
                    name="art_name"
                    id="art_name"
                    v-model="form.art_name"
                    required
                    disabled
                  />
                </div>
                <div class="form-group">
                  <label>Name</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Enter Name"
                    name="name"
                    id="name"
                    v-model="form.name"
                    required
                  />
                </div>
                <div class="form-group">
                  <label>Phone</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Enter Phone"
                    name="phone"
                    id="phone"
                    v-model="form.phone"
                    required
                  />
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Enter Email"
                    name="email"
                    id="email"
                    v-model="form.email"
                    required
                  />
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <textarea
                    type="text"
                    class="form-control"
                    placeholder="Enter Address"
                    name="address"
                    id="address"
                    v-model="form.address"
                    required
                  ></textarea>
                </div>
                <div class="reset-button">
                 <button v-show="!isLoading" type="submit" class="btn btn-success btn-block">
                    Submit
                  </button>
                  <button v-show="isLoading" type="button" class="btn btn-secondary btn-block" disabled>
                    Loading...
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </fragment>
</template>
<script>
import axios from "axios";
import { mapGetters, mapActions } from "vuex";
export default {
  data() {
    return {
        isLoading: false,
      form: {
        code: "",
        art_name: "",
        name: "",
        phone: "",
        email: "",
        address: ""
      }
    };
  },
  computed: {
    ...mapGetters({
      artDetail: "detail/artDetail"
    }),
    urlWithId() {
      return `/api/art/detail/${this.$route.params.id}`;
    },
    nDescrip() {
      return this.artDetail.description;
    }
  },
  methods: {
    ...mapActions({
      getArtDetail: "detail/getArtDetail"
    }),
    loadArt() {
      this.getArtDetail(this.urlWithId);
    },
    async submit() {
        this.isLoading = true;
      await axios
        .post("/api/client/store", this.form)
        .then(response => {
          this.form.name = "";
          this.form.phone = "";
          this.form.email = "";
          this.form.address = "";
          swal("Your information is submitted successfully.Thank you");
          this.isLoading = false;
        })
        .catch(() => {
            this.isLoading = false;
        });
    }
  },
  watch: {
    "artDetail.code"() {
      this.form.code = this.artDetail.code;
    },
    "artDetail.name"() {
      this.form.art_name = this.artDetail.name;
    }
  },
  mounted() {
    this.loadArt();
  }
};
</script>
<style scoped>
.form-group {
  display: flex;
}
label {
  width: 20%;
}
ul li {
  color: #195273;
}
</style>
