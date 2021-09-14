import Vue from 'vue'; 
import VueRouter from 'vue-router'; 
import routes from './routes';
import store from './store';

import Vuetify from '../plugins/vuetify';


require('./vuetify-bootstrap');

Vue.component('vuetify-app', require('./components/Vuetify/App.vue').default);
Vue.component('test-app', require('./components/Vuetify/Test.vue').default);

Vue.use(VueRouter);  

let app = new Vue({ 
    el: '#app', 
    store,
    vuetify: Vuetify,
    router: new VueRouter(routes) 
});