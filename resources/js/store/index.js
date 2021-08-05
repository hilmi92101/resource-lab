import Vue from 'vue';
import Vuex from 'vuex';

import currentUser from './modules/currentUser';
import productList from './modules/productList';

import BOSidebar from './modules/backoffice/sidebar';
import BOForm from './modules/backoffice/form';

Vue.use(Vuex);

export default new Vuex.Store({

    modules: {

        currentUser,
        productList,

        BOSidebar,
        BOForm,

    }

});