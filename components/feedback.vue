<template>
  <section class="feedback">
    <div class="container">
      <div class="feedback__title">Если у Вас возникли вопросы - оставьте заявку и мы свяжемся с Вами.</div>
      <From class="feedback__form" :name="true" :email="true" :phone="true"/>
    </div>
  </section>
</template>

<script>
import From from './form';
export default {
  components: {
    From
  }
}
</script>

<style lang="scss">
.feedback {
  background: var(--colorGrey);
  padding: 60px 0;

  &__title {
    margin: 0 0 60px;
    font-size: 30px;
    text-align: center;
    text-transform: uppercase;
    color: var(--colorBlack);
  }

  &__form {
    margin: 0 auto;
    width: 360px;
    text-align: center;
  }
}
</style>