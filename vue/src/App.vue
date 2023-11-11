<template>
  <div>
    <LikeHeader>
        <h3>はじめまして</h3>
    </LikeHeader>
    <LikeNumber :totalNumber="number" @my-click="incrementNumber"></LikeNumber>
    <button @click="currentComponent = 'Home'">Home</button>
    <button @click="currentComponent = 'About'">About</button>
    <keep-alive>
      <component :is="currentComponent"></component>
    </keep-alive>
  </div>
</template>

<script>
import LikeHeader from "./components/LikeHeader.vue";
import Home from "./components/Home.vue";
import About from "./components/About.vue";

export default {
  data() {
    return {
      number: 14,
      currentComponent: "Home"
    };
  },
  components: {
    LikeHeader,
    Home,
    About
  },
  methods: {
    incrementNumber() {
      this.number++;
    }
  }
};

</script>

<style scoped>
div {
  border: 1px solid blue;
}
</style>
