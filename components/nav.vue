<template>
  <div class="header__nav nav">
    <div class="nav__item">
      <nuxt-link to="/">Главная</nuxt-link>
    </div>
    <div class="nav__item">
      <nuxt-link to="/#cases">Услуги</nuxt-link>
    </div>
    <div class="nav__item">
      <nuxt-link to="/#team">Команда</nuxt-link>
    </div>
    <div class="nav__item">
      <nuxt-link to="/#contacts">Контакты</nuxt-link>
    </div>
  </div>
</template>

<script>
export default {
    name: 'Nav'
}
</script>

<style lang="scss">
.nav {
    display: flex;
  &__item {
    margin: 0 15px;
    font-size: 16px;
    color: var(--colorBlack);

    a {
      text-decoration: none;
      color: var(--colorBlack);
    }
  }
}
</style>
