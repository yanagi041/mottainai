<template>
  <!-- TODO:検索用フォーム。後で作る -->
  <div class="c-search__sidebar">
    <div class="c-sidebar__menu-item">価格</div>
    <div class="c-sidebar__menu-item">都道府県</div>
    <div class="c-sidebar__menu-item">賞味期限</div>
  </div>
</template>

<script>
export default {
  name: "SearchSidebarComponent",
  props: {
    pref: Array
  },
  data: {
    //現在のページ
    page: 1,
    //ページごとに表示する商品データ
    items: []
  },
  methods: {
    //ページネーション表示関数
    getItems() {
      {
        const url = "/ajax/pagination?page=" + this.page;
        axios.get(url).then(response => {
          this.items = response.data;
        });
      }
    }
  },
  //ページが読み込まれたらgetItems()を呼ぶ
  mounted() {
    this.getItems();
  }
};
</script>
