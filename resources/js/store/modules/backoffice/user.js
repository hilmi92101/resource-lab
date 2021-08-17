const state = {

    user: {
        email: '',
        password: '',
    },
    errors: [],
};
const getters = {

    user: state => {
        return state.user;
    },

    errors: state => {
        return state.errors;
    },
};
const actions = {


};
const mutations = {

};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations,

}
