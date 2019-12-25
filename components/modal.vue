<template>
  <div class="modal" :class="[{open: open}]" @click="close">
    <div ref="wrapper" class="modal__wrapper">
      <slot></slot>
    </div>
  </div>
</template>

<script>
// import Form from './form';
export default {
  components: {
    // Form
  },
  props: {
    open: {
      type: Boolean,
      default: false
    }
  },
  watch: {
    open(value) {
      value
      ? document.body.style.overflow = 'hidden'
      : document.body.style.overflow = 'inherit';
      return value;
    }
  },
  methods: {
    close(e){
      if(e.target === this.$refs.wrapper){
        this.$emit('close');
      }
    }
  }
};
</script>

<style lang="scss">
.modal {
  display: none;
  background: rgba($color: #FFF, $alpha: 0.75);
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;

  &__wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
  }

  &__form {
    box-sizing: border-box;
    background: var(--colorGrey);
    padding: 30px;
    text-align: center;
  }

  &.open {
    display: block;
  }
}
</style>
