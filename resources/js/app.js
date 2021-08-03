import Vue from 'vue'; 
import VueRouter from 'vue-router'; 
import routes from './routes';
import store from './store';

require('./bootstrap');

Vue.use(VueRouter);  
let app = new Vue({ 
    el: '#app', 
    store,
    router: new VueRouter(routes) 
});