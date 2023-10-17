<template>
  <div>
    <LikeHeader>
      <template v-slot:title="slotProps">
        <h2>こんにちは</h2>
        <h2>{{ slotProps }}</h2>
      </template>
      <template v-slot:number>
        <p>{{ number }}</p>
      </template>
    </LikeHeader>
    <LikeNumber :totalNumber="number" @my-click="incrementNumber"></LikeNumber>
    <LikeNumber :totalNumber="number" @my-click="incrementNumber"></LikeNumber>
  </div>
</template>

<script>
import LikeHeader from "./components/LikeHeader.vue";

export default {
  data() {
    return {
      number: 14
    };
  },
  components: {
    LikeHeader
  },
  methods: {
    incrementNumber(value) {
      this.number = value;
    }
  }
}
</script>

<style scoped>
div {
  border: 1px solid blue;
}
</style>
