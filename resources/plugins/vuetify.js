import Vue from 'vue';
import Vuetify, { VLayout, VToolbar, VNavigationDrawer } from 'vuetify/lib';

Vue.use(Vuetify, {
  components: { VLayout, VToolbar, VNavigationDrawer },
})

const opts = {}

export default new Vuetify(opts)