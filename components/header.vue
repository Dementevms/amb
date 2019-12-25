<template>
  <div class="header">
    <div class="container">
      <div class="header__wrapper">
        <div class="header__logo">
          <img src="/logo.jpg" alt="" />
        </div>
        <Nav class="header__nav" />
        <div class="header__contacts">
          <div class="header__contacts-email">{{ email }}</div>
          <div class="header__contacts-phones">{{ phone01 }}, {{ phone02 }}</div>
          <div class="header__contacts-btn btn">{{ textBtn }}</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Nav from "./nav";
export default {
  name: "Header",
  components: {
    Nav
  },
  data(){
    return {
      email: 'agentstvoupravlenia@gmail.com',
      phone01: '+7 902 603 60 39',
      phone02: '+7 919 115 15 30',
      textBtn: 'позвонить'
    }
  }
};
</script>

<style lang="scss">
.header {
  border-bottom: 1px solid #CCC;
  padding: 30px 0;
  &__wrapper {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  &__logo {
  }
  &__nav {
  }
  &__contacts {
    text-align: right;
  }
  &__contacts-email {
  }
  &__contacts-phones {
    margin: 10px 0;
    font-weight: bold;
  }
  &__contacts-btn {
  }
}
</style>
