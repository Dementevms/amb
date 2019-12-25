<template>
  <div class="team-page">
    <Header />
    <section class="unit">
      <div class="container">
        <div class="unit__wrapper">
          <div class="unit__column">
            <div class="unit__title">Антонова Елена</div>
            <div class="unit__skill">Управление персоналом</div>
            <div class="unit__desc">
              Директор по персоналу, тренер, спикер обучающих программ
            </div>
            <div class="unit__exp">20 лет успешного практического опыта</div>
            <div class="unit__text">
              <p>
                Master of Business Administration 2013г., высшее образование по
                специализации педагогика и социально экономические дисциплины,
                дополнительное образование по управлению персоналом.
              </p>
              <p>
                Собственный успешный бизнес с 1998 года, с 2005 года ТОП
                менеджер в крупных компаниях, с 2010 года опыт в международных
                компаниях с оборотом от 1 млр руб . (Tele2. X5 Retail Group,
                промышленные холдинги с численностью от 3 000 человек персонала)
              </p>
              <p>
                Успешный практический опыт в области построения процессов по
                управлению персонала, разработки матрицы компетенций, создание
                HR службы и адаптации под запрос бизнеса, антикризисное
                управление (оптимизация и высвобождение персонала).
              </p>
              <p>
                Создание команды под ключ. Реализация и сопровождение
                консалтинговых проектов. Организация и проведение тренингов.
              </p>
            </div>
            <div class="unit__industry">отрасли специализации:</div>
            <div class="industry">
              <div class="industry__item type-a">
                гражданское и промышленное строительство
              </div>
              <div class="industry__item type-a">розничный бизнес</div>
              <div class="industry__item type-b">отельный бизнес</div>
              <div class="industry__item type-a">недвижимость</div>
              <div class="industry__item type-b">
                частная медицина индустрия красоты
              </div>
            </div>
          </div>
          <div class="unit__column">
            <div class="unit__image">
              <img src="/user02.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="unit silver">
      <div class="container">
        <div class="unit__wrapper">
          <div class="unit__column">
            <div class="unit__title">Меньшикова Анастасия</div>
            <div class="unit__skill">Управление маркетингом и рекламой</div>
            <div class="unit__desc">
              директор по маркетингу, эксперт брендингу, рекламе и дизайну
            </div>
            <div class="unit__exp">
              8 лет успешного опыта в практическом маркетинге
            </div>
            <div class="unit__text">
              <p>
                Высшее образование в сфере маркетинга и PR, дополнительное
                образование в сфере графического дизайна и брендинга,
                дополнительное образование в сфере цифровых технологий, с 2014
                года ТОП-менеджер в крупных организациях с инвестиционными
                проектами стоимостью более 1,5 млрд. руб.
              </p>
              <p>
                Успешный опыт создания и запуска рекламных проектов от создания
                креативной идеи до полной реализации проекта, разработки плана и
                запуска рекламных кампаний, управление репутацией бренда,
                практический опыт в создании продающих сайтов, организация
                специальных рекламных мероприятий, разработка фирменного стиля
                компании.
              </p>
            </div>
            <div class="unit__industry">отрасли специализации:</div>
            <div class="industry">
              <div class="industry__item type-a">продажа недвижимости</div>
              <div class="industry__item type-b">
                промышленное и гражданско строительство
              </div>
              <div class="industry__item type-b">
                аренда строительной техники
              </div>
              <div class="industry__item type-a">частная медицина</div>
              <div class="industry__item type-a">индустрия красоты</div>
            </div>
          </div>
          <div class="unit__column">
            <div class="unit__image">
              <img src="/user02.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="unit">
      <div class="container">
        <div class="unit__wrapper">
          <div class="unit__column">
            <div class="unit__title">Меньшикова Лариса</div>
            <div class="unit__skill">Управление финансами</div>
            <div class="unit__desc">
              Финансовый директор, главный бухгалтер, эксперт в области
              финансов, бухгалтерского учета и налогообложения
            </div>
            <div class="unit__exp">
              25 лет успешного практического опыта
            </div>
            <div class="unit__text">
              <p>
                Высшее экономическое образование, собственный бизнес с 2013
                года, ТОПменеджер в крупных организациях с оборотом до 3 млрд.
                руб в год.
              </p>
            </div>
            <div class="unit__industry">отрасли специализации:</div>
            <div class="industry">
              <div class="industry__item type-a">продажа недвижимости</div>
              <div class="industry__item type-b">
                промышленное и гражданско строительство
              </div>
              <div class="industry__item type-b">
                аренда строительной техники
              </div>
              <div class="industry__item type-a">частная медицина</div>
              <div class="industry__item type-a">индустрия красоты</div>
            </div>
          </div>
          <div class="unit__column">
            <div class="unit__image">
              <img src="/user02.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <Contacts class="team-page__contacts" />
    <Feedback />
  </div>
</template>

<script>
import "../assets/main.scss";
import Header from "../components/header";
import Contacts from "../components/contacts";
import Feedback from "../components/feedback";

export default {
  name: "Team",
  components: {
    Header,
    Contacts,
    Feedback
  }
};
</script>

<style lang="scss">
.team-page {
  &__contacts {
    padding: 60px 0;
  }
}
.unit {
  padding: 60px 0;

  &__wrapper {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -15px;
  }
  &__column {
    box-sizing: border-box;
    padding: 0 15px;
    width: 50%;
  }
  &__title {
    margin: 0 0 30px;
    font-size: 36px;
    font-weight: bold;
    color: var(--colorBlack);
  }
  &__skill {
    margin: 0 0 30px;
    font-size: 18px;
    text-transform: uppercase;
    color: var(--colorBlack);
  }
  &__desc {
    margin: 0 0 30px;
    font-size: 18px;
    color: var(--colorBlack);
  }
  &__exp {
    margin: 0 0 30px;
    font-size: 18px;
    color: var(--colorBlack);
  }
  &__text {
    p {
      margin: 0 0 30px;
      line-height: 28px;
      font-size: 18px;
      color: var(--colorBlack);
    }
  }
  &__image {
    img {
      width: 100%;
    }
  }
  &__industry {
    margin: 30px 0;
    font-size: 18px;
    font-weight: bold;
    color: var(--colorBlack);
  }

  &.silver {
    background: var(--colorDirtyWhite);
  }
}

.industry {
  &__item {
    display: flex;
    align-items: center;
    margin: 0 0 20px;

    &::before {
      display: block;
      content: "";
      margin: 0 10px 0 0;
      width: 20px;
      height: 20px;
    }

    &.type-a {
      &::before {
        background: var(--colorDarkGrey);
      }
    }

    &.type-b {
      &::before {
        background: var(--colorSilver);
      }
    }
  }
}
</style>
