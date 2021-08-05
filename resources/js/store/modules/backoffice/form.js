const state = {

    form: {
        username: '',
        password: '',
        status: '1',
        personalDetail: [],
        workWithOthers: '1',
    },
    errors: [],
};
const getters = {

    form: state => {
        return state.form;
    },

    errors: state => {
        return state.errors;
    },
};
const actions = {

    createUser: (context, payload) => {

        let data = {
            form: state.form,
        }
        console.log('------');
        console.log(data);
        console.log('------');
        let config = {
            headers: {
                'Accept': 'application/json',
            }
        }
        axios.post('/api/form/create/user', data, config)
        .then(function (response) {
            console.log(response.data);
            //context.commit('loadDb', response.data);

            if(response.data.hasOwnProperty('errors')){ 
                context.commit('errorCreateUser', response.data.errors);
            }
        })
        .catch(function (error) {
        });
        
    },

};
const mutations = {

    errorCreateUser: (state, payload) => {
        state.errors = payload;
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations,

}
