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
        
    }
};
const mutations = {};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations,

}
