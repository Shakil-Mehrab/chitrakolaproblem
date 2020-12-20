<template>
  <nav>
    <ul class="pagination">
      <li :class="{ disabled: meta.current_page === 1 }">
        <a href="#" @click.prevent="switched(meta.current_page - 1)">
          <span>&laquo;</span>
        </a>
      </li>
      <template v-if="section > 1">
        <li><a href="#" @click.prevent="switched(1)">1</a></li>
        <li><a href="#" @click.prevent="goBackwardASection">...</a></li>
      </template>
      <li
        v-for="page in pages"
        :class="{ active: meta.current_page === page }"
        :key="page"
      >
        <a href="#" @click.prevent="switched(page)">{{ page }}</a>
      </li>
      <template v-if="section < sections">
        <li><a href="#" @click.prevent="goForwardASection">...</a></li>
        <li>
          <a href="#" @click.prevent="switched(meta.last_page)">{{
            meta.last_page
          }}</a>
        </li>
      </template>
      <li :class="{ disabled: meta.current_page === meta.last_page }">
        <a href="#" @click.prevent="switched(meta.current_page + 1)">
          <span>&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  props: {
    meta: {
      type: Object,
      required: true
    }
  },

  data() {
    return {
      numbersPerSection: 7
    };
  },

  computed: {
    section() {
      return Math.ceil(this.meta.current_page / this.numbersPerSection);
    },
    sections() {
      return Math.ceil(this.meta.last_page / this.numbersPerSection);
    },
    lastPage() {
      let lastPage =
        (this.section - 1) * this.numbersPerSection + this.numbersPerSection;

      if (this.section == this.sections) {
        lastPage = this.meta.last_page;
      }

      return lastPage;
    },
    pages() {
      return _.range(
        (this.section - 1) * this.numbersPerSection + 1,
        this.lastPage + 1
      );
    }
  },

  mounted() {
    if (this.meta.current_page > this.meta.last_page) {
      this.switched(this.meta.last_page);
    }
  },

  methods: {
    async switched(page) {
      if (this.pageIsOutOfBounds(page)) {
        return;
      }
      await this.$router.replace({
        query: Object.assign({}, this.$route.query, { page: page })
      });
      await this.$emit("pagination:switched", page);
    },
    pageIsOutOfBounds(page) {
      return page <= 0 || page > this.meta.last_page;
    },
    async goBackwardASection() {
      this.switched(this.firstPageOfSection(this.section - 1));
    },
    async goForwardASection() {
      this.switched(this.firstPageOfSection(this.section + 1));
    },
    firstPageOfSection(section) {
      return (section - 1) * this.numbersPerSection + 1;
    }
  }
};
</script>


<style>
.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 20px 0;
  border-radius: 4px;
}
.pagination > li {
  display: inline;
}
.pagination > li > a,
.pagination > li > span {
  position: relative;
  float: left;
  padding: 6px 12px;
  margin-left: -1px;
  line-height: 1.42857143;
  color: #337ab7;
  text-decoration: none;
  background-color: #fff;
  border: 1px solid #ddd;
}
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  z-index: 2;
  color: #23527c;
  background-color: #eeeeee;
  border-color: #ddd;
}
.pagination > li:first-child > a,
.pagination > li:first-child > span {
  margin-left: 0;
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
.pagination > li:last-child > a,
.pagination > li:last-child > span {
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  z-index: 3;
  color: #fff;
  cursor: default;
  background-color: #337ab7;
  border-color: #337ab7;
}
.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  color: #777777;
  cursor: not-allowed;
  background-color: #fff;
  border-color: #ddd;
}
.pagination-lg > li > a,
.pagination-lg > li > span {
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
}
.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span {
  border-top-left-radius: 6px;
  border-bottom-left-radius: 6px;
}
.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
  border-top-right-radius: 6px;
  border-bottom-right-radius: 6px;
}
.pagination-sm > li > a,
.pagination-sm > li > span {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
}
.pagination-sm > li:first-child > a,
.pagination-sm > li:first-child > span {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
.pagination-sm > li:last-child > a,
.pagination-sm > li:last-child > span {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
</style>
