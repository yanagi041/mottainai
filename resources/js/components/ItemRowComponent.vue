<template>
  <a :href="'/itemdetail/'+newitems.id" class="c-item-row__panel">
    <div class="c-item-row__panel__header">
      <div>{{ newitems.prefecture }}</div>
      <div>{{ newitems.shop_name }}</div>
      <div>{{ newitems.branch_name }}</div>
    </div>
    <div class="c-item-row__panel__pic">
      <img :src="newitems.pic" alt="item" />
    </div>
    <div class="c-item-row__panel__footer">
      <div class="c-item-row__panel__footer__text">{{ newitems.item_name }}</div>

      <div class="c-item-row__panel__footer__price">
        <div class="u-line-through">{{ newitems.regular_price.toLocaleString() }}円</div>
        <div class="c-item-row__panel__big-price">
          {{ newitems.discount_price.toLocaleString() }}
          <span class="c-item-row__panel__yen">円</span>
        </div>
      </div>
    </div>
  </a>
</template>

<script>
export default {
  name: "ItemRowComponent",
  props: {
    newitems: Object
  }
};
</script>
