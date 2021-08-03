const state = {

    user: {
        name: 'Hilmi',
        email: 'hilmi@gmail.com',
    }
};
const getters = {

    showName: state => {
        
        return state.user.name;
    },
    
    showEmail: state => {
        
        return state.user.email;
    },
};
const actions = {

    changeName: (context, payload) => {

        state.user.name = payload;
        
    },

    loadDb: (context, payload) => {

        let data = {
            name: payload,
        }
        let config = {
            headers: {
                'Accept': 'application/json',
            }
        }

        axios.post('/landing/data', data, config)
        .then(function (response) {
            console.log(payload);
            console.log(response.data);
            console.log('---------------------');

            context.commit('loadDb', response.data);
            
            
        })
        .catch(function (error) {
        });
        
    },


};
const mutations = {

    loadDb: (state, payload) => {
        console.log(state);
        console.log(payload);
        state.user = payload.user;
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations,

}
