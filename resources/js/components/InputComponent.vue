<template>
  <div class="c-form__group">
    <label :for="title">{{ jaTitle }}</label>
    <div>
      <!-- titleがemailのときはtypeをemailにする。-->
      <div v-if="title === 'email'">
        <input :id="title" type="email" :placeholder="jaTitle" :name="title" required autofocus />
      </div>
      <!-- titleがそれ以外のとき、typeをtextにする -->
      <div v-else>
        <input :id="title" type="text" :placeholder="jaTitle" :name="title" required autofocus />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "InputComponent",
  props: {
    title: String,
    jaTitle: String
  }
};
</script>
