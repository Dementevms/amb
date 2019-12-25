<template>
  <section id="cases" class="cases">
    <div class="container">
      <div class="cases__title">Задачи бизнеса, которые мы решаем</div>
        <div class="case-box">
          <div class="case-box__title">Персонал</div>
          <ul class="case-box__list">
            <li>Формирование команды под задачи бизнеса</li>
            <li>Построение всех HR-процессов</li>
            <li>Сопровождение, обучение и адаптация персонала и процессов</li>
            <li>Постановка стратегических целей</li>
            <li>Каскадирование целей до уровня задач/должностей</li>
            <li>Разработка системы мотивации</li>
          </ul>
          <div class="case-box__btn">
            <div class="btn btn-medium" @click="openModal=true">Заявка на консультацию</div>
          </div>
        </div>
        <div class="case-box">
          <div class="case-box__title">Продажи</div>
          <ul class="case-box__list">
            <li>Аудит системы продаж</li>
            <li>Постановка системы продаж</li>
            <li>Разработка программ лояльности</li>
            <li>Подготовка компании к выходу в регионы</li>
            <li>Постановка системы сервиса на прелприятиях</li>
            <li>Постановка системы обучения на предприятиях</li>
          </ul>
          <div class="case-box__btn">
            <div class="btn btn-medium" @click="openModal=true">Заявка на консультацию</div>
          </div>
        </div>
        <div class="case-box">
          <div class="case-box__title">Маркетинг</div>
          <ul class="case-box__list">
            <li>Создание рекламных кампаний</li>
            <li>Создание эффектных рекламных проектов</li>
            <li>Дизайн и продвижение сайтов</li>
            <li>Разработка креативных концепций продвижения</li>
            <li>Графический дизайн и разработка фирменного стиля</li>
            <li>SMM стратегия и сопровождение социальных сетей</li>
          </ul>
          <div class="case-box__btn">
            <div class="btn btn-medium" @click="openModal=true">Заявка на консультацию</div>
          </div>
        </div>
        <div class="case-box">
          <div class="case-box__title">Финансы</div>
          <ul class="case-box__list">
            <li>Постановка и сопровождение бухгалтерского учёта</li>
            <li>Расчёт точки безубыточности</li>
            <li>Формирование финансового результата</li>
            <li>Автоматизация управленческого учета</li>
            <li>Кредитование</li>
            <li>Оптимизация финансовых процессов</li>
          </ul>
          <div class="case-box__btn">
            <div class="btn btn-medium" @click="openModal=true">Заявка на консультацию</div>
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
.cases {
  // border-bottom: var(--border);
  padding: 0 0 60px;

  &__title {
    background: var(--colorGrey);
    padding: 30px 0;
    font-size: 30px;
    text-align: center;
    text-transform: uppercase;
    color: var(--colorBlack);
  }
}

.case-box {
  margin: 60px 0 0;

  &__title {
    margin: 0 0 60px;
    font-size: 18px;
    font-weight: bold;
    text-align: center;
    text-transform: uppercase;
    color: var(--colorBlack);
  }

  &__list {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    list-style: none;
    margin: 0 auto;
    padding: 0;
    width: 100%;

    li {
      box-sizing: border-box;
      margin: 15px 0;
      padding: 0 0 0 20px; 
      width: calc(50% - 15px);
      height: 40px;
      position: relative;
      font-size: 20px;
      color: var(--colorBlack);

      &::before {
        display: block;
        content: "";
        background: var(--colorGreen);
        width: 2px;
        height: 40px;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
      }
    }
  }

  &__btn {
    margin: 60px 0 0;
    text-align: center;
  }
}
</style>