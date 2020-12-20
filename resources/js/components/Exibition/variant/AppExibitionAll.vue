<template>
  <section class="exhibitions-area" style="padding-top:5px;padding-bottom:5px">
    <div class="container">
      <div class="sec-title">
        <div class="big-title">
          <h2 style="text-align: center">Art Exhibitions</h2>
        </div>
      </div>
      <div class="row masonary-layout">
        <app-exibition-single
          v-for="exibition in exibitions"
          :key="exibition.id"
          :exibition="exibition"
        />
      </div>
      <nav
        aria-label="Page navigation example"
        v-if="showPagination"
        style="text-align:center"
      >
        <ul class="pagination" v-if="meta.last_page != 1">
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
      meta: {},
      page: 1,
      lastPage: 1,
      exibitions: []
    };
  },
  props: {
    url: {
      required: false,
      type: String,
      default: "/api/exibitions"
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
    async loadExibitions() {
      let response = await axios.get(
        `${this.url}?per-page=${this.perPage}&page=${this.page}`
      );

      this.exibitions = response.data.data;
      this.meta = response.data.meta;
    },

    switched(page) {
      if (this.pageIsOutOfBounds(page)) {
        return;
      }

      this.page = page;

      this.loadExibitions();
    },

    pageIsOutOfBounds(page) {
      return page <= 0 || page > this.meta.last_page;
    }
  },
  mounted() {
    this.loadExibitions();
  }
};
</script>
