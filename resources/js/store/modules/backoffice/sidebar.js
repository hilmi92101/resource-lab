const state = {

    links: [
        {
            title: 'Form',
            router: 'home',
            icon: 'fas fa-edit',
        },
        {
            title: 'Table',
            router: 'about',
            icon: 'fas fa-table',
        },
        {
            title: 'Lazy Loading',
            router: 'about',
            icon: 'fas fa-spinner',
        },
        {
            title: 'Gallery',
            router: 'about',
            icon: 'far fa-image',
        },
        {
            title: 'Dropzone',
            router: 'about',
            icon: 'fas fa-upload',
        },

        
    ],
};
const getters = {

    links: state => {

        return state.links;
    }
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
