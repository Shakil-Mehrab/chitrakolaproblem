<template>
  <section class="latest-blog-style3-area blog-page">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="top">
            <div class="sec-title pdbtm42 text-center">
              <div class="big-title">
                <h2>Latest Art News</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <app-news-single
          v-for="newsOne in news"
          :key="newsOne.id"
          :newsOne="newsOne"
        />
      </div>
      <nav
        aria-label="Page navigation example"
        v-if="showPagination"
        style="text-align:center"
      >
        <ul class="pagination" v-if="meta.last_page !== 1">
          <li :class="{ disabled: meta.current_page === 1 }">
            <a href="#" @click.prevent="switched(meta.current_page - 1)">
              <span>&laquo;</span>
            </a>
          </li>
          <li
            class="page-item"
            v-for="page in meta.last_page"
            :key="page"
            :class="{ active: meta.current_page === page }"
          >
            <a class="page-link" @click.prevent="switched(page)" href="#">{{
              page
            }}</a>
          </li>

          <li :class="{ disabled: meta.current_page === meta.last_page }">
            <a href="#" @click.prevent="switched(meta.current_page + 1)">
              <span>&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </section>
</template>
<script>
import axios from "axios";

export default {
  data() {
    return {
      meta: null,
      page: 1,
      lastPage: 1,
      news: []
    };
  },
  props: {
    url: {
      required: false,
      type: String,
      default: "/api/news"
    },

    showPagination: {
      required: false,
      type: Boolean,
      default: true
    },

    perPage: {
      required: false,
      type: String,
      default: "16"
    }
  },
  methods: {
    async loadNews() {
      let response = await axios.get(
        `${this.url}?per-page=${this.perPage}&page=${this.page}`
      );

      this.news = response.data.data;
      this.meta = response.data.meta;
    },

    switched(page) {
      if (this.pageIsOutOfBounds(page)) {
        return;
      }

      this.page = page;

      this.loadNews();
    },

    pageIsOutOfBounds(page) {
      return page <= 0 || page > this.meta.last_page;
    }
  },
  mounted() {
    this.loadNews();
  }
};
</script>
