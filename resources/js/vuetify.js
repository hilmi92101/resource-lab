import Vue from 'vue'; 
import VueRouter from 'vue-router'; 
import routes from './routes';
import store from './store';

import Vuetify from '../plugins/vuetify';


require('./vuetify-bootstrap');

Vue.use(VueRouter);  

let app = new Vue({ 
    el: '#app', 
    store,
    vuetify: Vuetify,
    router: new VueRouter(routes) 
});