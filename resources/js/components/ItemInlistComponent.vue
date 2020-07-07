
<template>
  <!-- //商品表示に使う。 
任意のidの商品情報を表示
  -->

  <div class="c-itemlist__item" v-bind:class="{'c-itemlist__sold':items.is_sold}">
    <div class="c-itemlist__item__pic">
      <img :src="items.pic" alt="item" />
    </div>

    <div class="c-itemlist__item__text">
      <ul>
        <li>
          <span class="title">商品名</span>
          <span>：{{ items.item_name }}</span>
        </li>
        <li>
          <span class="title">定価(税抜)</span>
          <span>：{{ items.regular_price.toLocaleString() }}円</span>
        </li>
        <li>
          <span class="title">販売価格(税抜)</span>
          <span>：{{ items.discount_price.toLocaleString() }}円</span>
        </li>
        <li>
          <span class="title">賞味期限</span>
          <span>：{{ items.best_before }}</span>
        </li>
      </ul>
    </div>
    <div class="c-itemlist__item__buttons">
      <a :href="'/itemdetail/'+items.id" class="c-item-button">詳細を見る</a>

      <!-- 既に購入されている場合、「売り切れ」を表示してクリック不可にする -->
      <a class="c-item-button-sold" v-if="items.is_sold == true">売り切れ</a>
      <a href="item" class="c-item-button-sub-accent" v-else>編集する</a>
    </div>
  </div>
</template>

<script>
export default {
  name: "ItemInlistComponent",
  props: {
    items: Object
  }
};
</script>
