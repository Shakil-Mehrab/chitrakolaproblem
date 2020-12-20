<template>
  <!-- <div class="row">
        <div class="col-xl-12">
          <ul class="styled-pagination text-center">
            <li class="prev">
              <a href="#"><span class="fa fa-angle-left"></span></a>
            </li>
            <li class="count"><a href="#">1</a></li>
            <li class="count"><a href="#">2</a></li>
            <li class="count"><a href="#" class="active">3</a></li>
            <li class="count"><a href="#">4</a></li>
            <li class="count last"><a href="#">5</a></li>
            <li class="next">
              <a href="#"><span class="fa fa-angle-right"></span></a>
            </li>
          </ul>
        </div>
      </div> -->
  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li
        class="page-item"
        v-bind:class="{ disabled: pagination.current_page === 1 }"
      >
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>

      <li
        class="page-item"
        v-for="page in parseInt(pagination.last_page)"
        :key="page.id"
        v-bind:class="{ active: pagination.current_page === page }"
      >
        <a class="page-link" href="#" @click.prevent="switchPage(page)">{{
          page
        }}</a>
      </li>

      <li
        class="page-item"
        v-bind:class="{
          disabled: pagination.current_page === pagination.last_page
        }"
      >
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>
</template>
<script>
export default {
  data() {
    return {
      pag: null
    };
  },
  props: {
    pagination: {
      required: true,
      type: Object
    }
  },
  methods: {
    switchPage(page) {}
  }
};
</script>
