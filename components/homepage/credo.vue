<template>
  <section class="credo">
    <div class="container">
      <div class="credo__title">Мы не учим, мы делаем результат вместе с вами</div>
      <div class="credo__subtitle">Вам нужно Агентство Управления Бизнесом, если Вы </div>
      <div class="credo__wrapper">
        <ul class="credo__list">
          <li>Хотите повысить эффективность команды и уйти из операционной деятельности в стратегию;</li>
          <li>Устали терять время в поиске эффективных сотрудников;</li>
          <li>Не хотите совершать ошибок и терять время на их исправлении;</li>
          <li>Готовы взять лучший практический опыт и применить его;</li>
          <li>Хотите перейти на новый уровень, двигаясь в одном потоке с командой.</li>
        </ul>
      </div>
    </div>
  </section>
</template>

<style lang="scss">
.credo {
  // border-bottom: var(--border);
  padding: 60px 0;

  &__title {
    font-size: 30px;
    text-align: center;
    text-transform: uppercase;
    color: var(--colorBlack);
  }
  &__subtitle {
    margin: 30px 0 60px;
    font-size: 24px;
    text-align: center;
    text-transform: uppercase;
    color: var(--colorBlack);
  }
  &__list {
    list-style: none;
    list-style-type: disc;
    margin: 0 auto;
    padding: 0;
    width: 100%;
    max-width: 640px;
    
    li {
      margin: 20px 0;
      font-size: 18px;
      color: var(--colorBlack);
    }
  }
}
</style>