<template>
  <div class="c-itemdetail">
    <div class="c-itemdetail__item-info">
      <div class="c-itemdetail__item-info__pic">
        <img :src="item.pic" alt="item" />
      </div>
      <div>
        <div class="c-itemdetail__item-info__detail">
          <table>
            <tr>
              <th>商品名</th>
              <td>{{ item.item_name }}</td>
            </tr>
            <tr>
              <th>カテゴリー</th>
              <td>{{ category.category_name }}</td>
            </tr>
            <tr>
              <th>価格(税抜)</th>
              <td>{{ item.regular_price.toLocaleString() }}円</td>
            </tr>
            <tr>
              <th>賞味期限</th>
              <td>{{ item.best_before }}</td>
            </tr>
          </table>
        </div>

        <div class="c-itemdetail__shop-info">
          <table>
            <tr>
              <th>店舗名</th>
              <td>{{ shop.shop_name }} {{ shop.branch_name }}</td>
            </tr>
            <tr>
              <th>場所</th>
              <td>{{ shop.address }}</td>
            </tr>
          </table>
        </div>
      </div>
    </div>

    <div class="c-form">
      <div class="c-form__group">
        <div class="c-single-button-group">
          <button type="submit" class="c-button-main">購入する</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ItemdetailComponent",
  props: {
    item: Object,
    shop: Object,
    category: Object
  }
};
</script>
