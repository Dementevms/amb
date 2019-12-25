<template>
  <div class="form">
    <div v-if="!success" class="form__fields">
      <div v-if="name" class="form__field">
        <div v-if="errorName" class="form__error">Укажите имя</div>
        <input v-model="valName" class="form__input" :class="[{error: errorName}]" id="name" type="text" name="name" placeholder="Имя" />
      </div>
      <div v-if="phone" class="form__field">
        <div v-if="errorPhone" class="form__error">Укажите телефон</div>
        <input v-model="valPhone" class="form__input" :class="[{error: errorPhone}]" id="phone" type="tel" name="phone" placeholder="Телефон"/>
      </div>
      <div v-if="email" class="form__field">
        <div v-if="errorEmail" class="form__error">Укажите E-mail</div>
        <input v-model="valEmail" class="form__input" :class="[{error: errorEmail}]" id="email" type="email" name="email" placeholder="E-mail"/>
      </div>
      <div class="form__submit btn btn-medium" @click="submit">{{ submitText }}</div>
      <div class="form__agreement">
        <nuxt-link to="/snopd">Согласие на обработку персональных данных</nuxt-link>
      </div>
    </div>
    <div v-if="success" class="form__success">Форма успешна отправлена</div>
  </div>
</template>

<script>
import axios from 'axios';
export default {
  props: {
    name:{
      type: Boolean,
      default: false
    },
    email:{
      type: Boolean,
      default: true
    },
    phone:{
      type: Boolean,
      default: false
    },
    submitText: {
      type: String,
      default: 'Отправить'
    }
  },
  data(){
    return {
      valName: null,
      valEmail: null,
      valPhone: null,
      errorName: false,
      errorEmail: false,
      errorPhone: false,
      success: false
    }
  },
  methods: {
    async submit(){
      // console.log('this.valName', this.valName);
      this.errorName = false;
      this.errorEmail = false;
      this.errorPhone = false;

      if(!this.valName){
        this.errorName = true;
      }
      if(!this.valEmail){
        this.errorEmail = true;
      }
      if(!this.valPhone){
        this.errorPhone = true;
      }

      if(!this.errorName && !this.errorEmail && !this.errorPhone) {
        const response = await axios({
          method: "post",
          url: "http://kwork.dementevms.ru/ajax.php",
          data: {
            name: this.valName,
            email: this.valEmail,
            phone: this.valPhone
          }
        });
        // console.log('response', response);
        this.success = true;
      }


    },
    validateEmail(email) {
      var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    }
  }
}
</script>

<style lang="scss">
.form {
  margin: 0 auto;
  width: 360px;

  &__field {
    margin: 0 0 20px;
    position: relative;
  }

  &__error {
    position: absolute;
    top: -14px;
    left: 0;
    font-size: 12px;
    color: var(--colorRed);
  }

  &__input {
    box-sizing: border-box;
    background: var(--colorWhite);
    border: 1px solid transparent;
    outline: none;
    padding: 10px;
    width: 100%;
    font-size: 18px;
    color: var(--colorBlack);

    &.error {
      border-color: var(--colorRed);
    }
  }

  &__submit {
    margin: 20px 0;
    width: 100%;
  }
}
</style>