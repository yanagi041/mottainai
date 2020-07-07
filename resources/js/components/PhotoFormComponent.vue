<template>
  <div class="photo-form">
    <form class="c-form">
      <input class="c-form__item" type="file" @change="onFileChange" />
      <output class="form__output" v-if="preview">
        <img :src="preview" alt="item" />
      </output>
    </form>
  </div>
</template>

<script>
export default {
  name: "PhotoFormComponent",
  data: function() {
    return {
      preview: null
    };
  },
  methods: {
    //画像のプレビュー
    //参考：https://www.hypertextcandy.com/vue-laravel-tutorial-submit-photo-part-2/
    onFileChange(event) {
      //フォームでファイルが選択されたら実行

      //何も選択されていなかったら中断
      if (event.target.files.length === 0) {
        this.reset();
        return false;
      }

      //ファイルが画像以外の場合、中断
      if (!event.target.files[0].type.match("image.*")) {
        this.reset();
        return false;
      }

      //FileReaderクラスのインスタンスを取得
      const reader = new FileReader();

      //ファイルを読み込み終わったタイミングで実行する処理
      reader.onload = e => {
        //previewに読み込み結果(URL)を代入する
        //previewに値が入ると<output>につけたv-ifがtrueと判定される
        //また<output>内部の<img>のsrc属性はpreviewに値を参照しているので、結果、画像が表示される
        this.preview = e.target.result;
      };

      //ファイルを読み込む
      //読み込まれたファイルはデータURL形式で受け取れる(上記onload参照)
      reader.readAsDataURL(event.target.files[0]);
    },

    //画像選択時、「キャンセル」を押したときにプレビューもリセットする
    reset() {
      this.preview = "";
      this.$el.querySelector('input[type="file"]').value = null;
    }
  }
};
</script>
