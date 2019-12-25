<template>
 <section id="team" class="team">
    <div class="container">
      <div class="team__title">Команда агентства</div>
        <div class="team__items">
          <div class="team__item">
            <div class="team__item-image">
              <img src="/user02.jpg" alt="">
            </div>
            <div class="team__item-title">Меньшикова Анастасия </div>
            <div class="team__item-skill">Управление маркетингом</div>
            <div class="team__item-desc">Директор по маркетингу, эксперт брендингу, рекламе и дизайну</div>
          </div>
          <div class="team__item">
            <div class="team__item-image">
              <img src="/user02.jpg" alt="">
            </div>
            <div class="team__item-title">Антонова Елена</div>
            <div class="team__item-skill">Управление персоналом</div>
            <div class="team__item-desc">Директор по персоналу, тренер, спикер обучающих программ</div>
          </div>
          <div class="team__item">
            <div class="team__item-image">
              <img src="/user02.jpg" alt="">
            </div>
            <div class="team__item-title">Меньшикова Лариса</div>
            <div class="team__item-skill">Управление финансами</div>
            <div class="team__item-desc">Финансовый директор, главный бухгалтер, эксперт в области финансов, бухгалтерского учета и налогообложения</div>
          </div>
        </div>
      <div class="team__btn">
        <div class="btn btn-blue btn-medium">
          <nuxt-link to='/team'>Узнать о команде больше</nuxt-link>
        </div>
      </div>
    </div>
  </section> 
</template>

<style lang="scss">
.team {
  // border-bottom: var(--border);
  padding: 0 0 60px;

  &__title {
    font-size: 30px;
    text-align: center;
    text-transform: uppercase;
    color: var(--colorBlack);
  }

  &__items {
    display: flex;
    flex-wrap: wrap;
    margin: 60px 0;
  }

  &__item {
    box-sizing: border-box;
    padding: 0 15px;
    width: calc(100%/3);
  }

  &__item-image {
    img {
      width: 100%;
    }
  }

  &__item-title {
    margin: 10px 0 0;
    font-size: 24px;
    text-align: center;
    color: var(--colorBlack);
  }
  
  &__item-skill {
    margin: 20px 0;
    font-size: 24px;
    font-weight: bold;
    text-align: center;
    text-transform: uppercase;
    color: var(--colorBlack);
  }

  &__item-desc {
    box-sizing: border-box;
    background: var(--colorGrey);
    padding: 20px;
    height: 110px;
    font-size: 16px;
    color: var(--colorWhite);
  }

  &__btn {
    text-align: center;
    a {
      text-decoration: none;
      color: var(--colorWhite);
    }
  }
}
</style>