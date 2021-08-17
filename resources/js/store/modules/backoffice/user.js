const state = {

    user: {
        email: '',
        password: '',
    },
    accessToken: '',
    errors: [],
};
const getters = {

    user: state => {
        return state.user;
    },

    accessToken: state => {
        return state.accessToken;
    },

    errors: state => {
        return state.errors;
    },
};
const actions = {

    updateUserState: (context, payload) => {
        context.commit('updateUserState', payload);
    },

};
const mutations = {

    updateUserState: (state, payload) => {
        state.user = payload.user;
        state.accessToken = payload.access_token;
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations,

}
