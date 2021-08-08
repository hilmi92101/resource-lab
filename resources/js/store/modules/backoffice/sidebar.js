const state = {

    links: [
        {
            title: 'Form',
            router: 'backoffice-form',
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
            title: 'Tabs',
            router: 'about',
            icon: 'fas fa-folder-open',
        },
        {
            title: 'Gallery',
            router: 'backoffice-gallery',
            icon: 'far fa-image',
        },
        {
            title: 'Dropzone',
            router: 'backoffice-dropzone',
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
