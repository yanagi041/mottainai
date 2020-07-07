<template>
  <header class="l-header">
    <div>
      <div class="logo">
        <h1>
          <a href="/mypage">Haiki Share</a>
        </h1>
      </div>

      <div class="l-header__searchbox"></div>
    </div>

    <div class="pc">
      <div class="l-header__menu">
        <div class="l-header__menu__list" v-if="this.authcheck">
          <ul>
            <li>
              <a href="/mypage">マイページ</a>
            </li>
            <li v-on:click="doLogout">ログアウト</li>
          </ul>
        </div>
        <div class="l-header__menu__list" v-else>
          <ul>
            <li>
              <a href="/login/convini">コンビニ会員ログイン</a>
            </li>
            <li>
              <a href="/register/convini">コンビニ会員登録</a>
            </li>
          </ul>
        </div>

        <div class="l-header__menu__list" v-if="this.authcheck">
          <ul>
            <li>
              <a href="/mypage">マイページ</a>
            </li>
            <li v-on:click="doLogout">ログアウト</li>
          </ul>
        </div>
        <div class="l-header__menu__list" v-else>
          <ul>
            <li>
              <a href="/login/user">ユーザーログイン</a>
            </li>
            <li>
              <a href="/register/user">ユーザー登録</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- https://www.markernet.co.jp/blog/2019/08/19/vue-js-hamburger-menu/ -->
    <div class="l-header__spmenu">
      <div class="sp">
        <div class="l-header__spmenu__line" @click="naviOpen" :class="{'active': active}">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <transition name="navi">
          <nav class="navi" v-show="navi">
            <div class="navi__wrap">
              <div class="l-header__menu__list" v-if="this.authcheck">
                <ul>
                  <li>
                    <a href="/mypage">マイページ</a>
                  </li>
                  <li v-on:click="doLogout">ログアウト</li>
                </ul>
              </div>
              <div class="l-header__menu__list" v-else>
                <ul>
                  <li>
                    <a href="/login/convini">コンビニ会員ログイン</a>
                  </li>
                  <li>
                    <a href="/register/convini">コンビニ会員登録</a>
                  </li>
                  <li>
                    <a href="/login/user">ユーザーログイン</a>
                  </li>
                  <li>
                    <a href="/register/user">ユーザー登録</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </transition>
      </div>
    </div>
  </header>
</template>

<!-- エラー通知用：vue-toasted のCDN -->
<script src="https://unpkg.com/vue-toasted"></script>

<script>
export default {
  name: "HeaderComponent",
  data: function() {
    return {
      //ハンバーガーメニュー用
      active: false,
      navi: false
    };
  },
  props: {
    authcheck: Boolean,
    logout: String
  },
  methods: {
    //ログアウト機能
    doLogout: function() {
      //axios使ってlogoutをPOST送信する
      axios
        .post(this.logout)
        .then(function(response) {
          window.location.href = "/";
        })
        .catch(function(error) {
          if (error.response.status === 401 || error.response.status === 500) {
            //認証エラーかシステムエラーの時
            self.$toasted.global.my_error(
              "エラー(" +
                error.response.status +
                "):" +
                error.response.data.message
            );
          } else {
            console.log(console.error.response);
            self.$toasted.global.my_error("エラーが発生しました");
          }
        });
    },

    //ハンバーガーメニュー
    naviOpen: function() {
      //クリックすると状態が変更される
      //メニューアイコンが「三本線」or「×」
      this.active = !this.active;
      //メニューの「表示」or「非表示」
      this.navi = !this.navi;
    }
  }
};
</script>
