<template>
  <div>
    <div class="p-home__h2-showlink">
      <h2>
        <span class="u-small-by-h2">新着商品</span>
      </h2>
      <!-- TODO:うしろにidつけて、searchページ開く -->
    </div>
    <div class="c-item-row">
      <div class="c-item-row__panel" v-for="(newitem,index) of newitems" :key="index">
        <div class="c-item-row__panel__header">
          <div>{{ newitem.prefecture }}</div>
          <div>{{ newitem.shop_name }}</div>
          <div>{{ newitem.branch_name }}</div>
        </div>
        <div class="c-item-row__panel__pic">
          <img :src="newitem.pic" alt="item" />
        </div>
        <div class="c-item-row__panel__footer">
          <div class="c-item-row__panel__footer__text">{{ newitem.item_name }}</div>

          <div class="c-item-row__panel__footer__price">
            <div class="u-line-through">{{ newitem.regular_price.toLocaleString() }}円</div>
            <div class="c-item-row__panel__big-price">
              {{ newitem.discount_price.toLocaleString() }}
              <span class="c-item-row__panel__yen">円</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ItemRowComponent",
  props: {
    newitem: Object,
    category: Object
  }
};
</script>
