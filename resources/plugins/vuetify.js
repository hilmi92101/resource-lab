import Vue from 'vue';
import Vuetify, { VLayout } from 'vuetify/lib';

Vue.use(Vuetify, {
    components: { VLayout },
    

})

const opts = {
    // theme: {
    //     themes: {
    //         light: {
    //             success: '#000',
    //             primary: '#fff',
    //             secondary: '#b0bec5',
    //             accent: '#8c9eff',
    //             error: '#b71c1c',
    //         },
    //     },
    // }

}

export default new Vuetify(opts)