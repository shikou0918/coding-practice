import Vue from 'vue'
import App from './App.vue'
import LikeNumber from './components//LikeNumber.vue'
import store from './store.js'

Vue.config.productionTip = false
Vue.component('LikeNumber', LikeNumber);

new Vue({
  store,
  render: h => h(App),
}).$mount('#app')
