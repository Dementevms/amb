<template>
  <section id="contacts" class="contacts">
    <div class="container">
      <div class="contacts__title">Контакты</div>
      <div class="contacts__subtitle">Свяжитесь с нам любым удобным для Вас способом</div>
      <div class="contacts__wrapper">
        <div class="contacts__items">
          <div class="contacts__item">
            <div class="contacts__item-title">Пишите нам и мы оперативно ответим Вам!</div>
            <div class="contacts__item-value">agentstvoupravlenia@gmail.com</div>
            <div class="contacts__item-btn btn">Написать</div>
          </div>
          <div class="contacts__item">
            <div class="contacts__item-title">Звоните или пишите!</div>
            <div class="contacts__item-value">+ 7 902 603 603 9,<span class="spacer"></span>+7 919 115 15 30</div>
            <div class="contacts__item-btn btn">Позвонить</div>
          </div>
        </div>
        <div class="contacts__callback btn btn-medium btn-blue" @click="openModal=true">Заказать звонок</div>
      </div>
      <Modal :open="openModal" @close="openModal=false">
        <Form class="modal__form" :name="true" :email="false" :phone="true"/>
      </Modal>
    </div>
  </section>
</template>

<script>
import Form from './form';
import Modal from './modal';
export default {
  components: {
    Form,
    Modal
  },
  data(){
    return {
      openModal: false
    }
  }
}
</script>

<style lang="scss">
.contacts {
  border-bottom: var(--border);
  padding: 0 0 60px;

  &__title {
    background: var(--colorGrey);
    padding: 30px 0;
    font-size: 30px;
    text-align: center;
    text-transform: uppercase;
    color: var(--colorBlack);
  }

  &__subtitle {
    margin: 30px 0 60px;
    font-size: 24px;
    text-align: center;
    // text-transform: uppercase;
    color: var(--colorBlack);
  }

  &__wrapper {
    // display: flex;
    margin: 0 auto;
    width: 100%;
    // max-width: 640px;
    text-align: center;
  }

  &__items {
    // width: 50%;
    display: flex;
    justify-content: space-between;
  }

  &__item {
    margin: 0 0 30px;
  }

  &__item-title {
    font-size: 18px;
    color: var(--colorBlack);
  }

  &__item-value {
    margin: 20px 0;
    font-size: 24px;
    font-weight: bold;
    color: var(--colorBlack);
  }

  &__callback {
    // width: 50%;
  }
}
</style>