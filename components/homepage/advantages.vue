<template>
  <section class="advantages">
    <div class="container">
      <div class="advantages__title">Работать вместе с нами надежно и выгодно<br>для вашего бизнеса</div>
        <div class="advantages__items">
          <div class="advantages__item">
            <div class="advantages__item-wrapper">Индивидуальный подход к каждому проекту</div>
          </div>
          <div class="advantages__item"><div class="advantages__item-wrapper">Экономия фот компании</div></div>
          <div class="advantages__item"><div class="advantages__item-wrapper">Проверенные технологии для внедрения</div></div>
          <div class="advantages__item"><div class="advantages__item-wrapper">Сопровождение проекта от аналитики до результата</div></div>
          <div class="advantages__item"><div class="advantages__item-wrapper">Комплексный подход к решению задач</div></div>
          <div class="advantages__item"><div class="advantages__item-wrapper">Реальные результаты работы</div></div>
        </div>
    </div>
  </section>
</template>

<style lang="scss">
.advantages{
  // border-bottom: var(--border);
  padding: 0 0 60px 0;

  &__title {
    background: var(--colorRed);
    padding: 30px 0;
    font-size: 30px;
    text-align: center;
    text-transform: uppercase;
    color: var(--colorBlack);
  }

  &__items {
    display: flex;
    flex-wrap: wrap;
    margin: 60px -15px -30px;
  }

  &__item {
    display: flex;
    box-sizing: border-box;
    margin: 0 0 30px;
    padding: 0 15px;
    width: calc(100%/3);
  }

  &__item-wrapper {
    background: var(--colorGrey);
    padding: 20px;
    font-size: 18px;
    line-height: 28px;
    text-align: center;
    text-transform: uppercase;
    color: var(--colorBlack);
  }
}
</style>