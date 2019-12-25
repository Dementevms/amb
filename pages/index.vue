<template>
  <div>
    <Header/>
    <Cover/>
    <Credo/>
    <Cases/>
    <Team/>
    <Advantages/>
    <Contacts/>
    <Feedback/>
  </div>
</template>

<script>
import '../assets/main.scss';
import Header from '../components/header';
import Cover from '../components/homepage/cover';
import Credo from '../components/homepage/credo';
import Cases from '../components/homepage/cases';
import Team from '../components/homepage/team';
import Advantages from '../components/homepage/advantages';
import Contacts from '../components/contacts';
import Feedback from '../components/feedback';

export default {
  name: 'Index',
  components: {
    Header,
    Cover,
    Credo,
    Cases,
    Team,
    Advantages,
    Contacts,
    Feedback
  }
}
</script>