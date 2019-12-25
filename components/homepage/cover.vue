<template>
  <section class="cover">
    <div class="cover__container container">
      <div class="cover__wrapper">
        <div class="cover__content">
          <div class="cover__title">Наши знания и опыт<br>управления проектами<br>принесут результат Вашему бизнесу.</div>
          <div class="cover__btn">
            <div class="btn btn-big" @click="openModal=true">Заявка на консультацию</div>
          </div>
        </div>
      </div>
    </div>
    <Modal :open="openModal" @close="openModal=false">
      <Form class="modal__form" :name="true" :email="true" :phone="true"/>
    </Modal>
  </section>
</template>

<script>
import Form from '../form';
import Modal from '../modal';
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
.cover {
  border-bottom: var(--border);
  &__wrapper {
    // display: flex;
    // align-items: center;
    // flex-wrap: wrap;
    // margin: -155px 0 0;
    // height: 100vh;
    padding: 160px 0;
  }

  &__content {
    width: 100%;
  }

  &__title {
    margin: 0 0 100px;
    padding: 0 0 0 100px;
    position: relative;
    font-size: 36px;
    font-weight: bold;

    &::before {
      display: block;
      content: "";
      background: var(--colorBlue);
      border-radius: 50%;
      width: 300px;
      height: 300px;
      position: absolute;
      top: -60px;
      left: 0px;
      z-index: -1;
    }
  }

  &__btn {
    text-align: right;
  }
}
</style>