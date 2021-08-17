const state = {

    user: {
        email: '',
        password: '',
    },
    accessToken: '',
    accessTokenName: 'authToken',
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

    state: state => {
        return state;
    },
};
const actions = {

    updateUserState: (context, payload) => {
        context.commit('updateUserState', payload);
    },

    setCookie: (context, payload) => {

        var cname = "authToken";
        var cvalue = context.state.accessToken;
        
        var now = new Date();
        var hours = 1;
        now.setTime(now.getTime() + hours * 3600 * 1000);
        var expires = "expires="+ now.toUTCString();

        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";

    },

    getCookie: (context, payload) => {

        var cname = context.state.accessTokenName;

        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i <ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                context.commit('browserCookieToken', c.substring(name.length, c.length));
                return false;
            }
        }
        context.commit('browserCookieToken', "");
    },

    destroyCookie: (context, payload) => {
        document.cookie = context.state.accessTokenName+'=; Max-Age=-99999999;';  
    },

};
const mutations = {

    updateUserState: (state, payload) => {
        state.user = payload.user;
        state.accessToken = payload.access_token;
    },
    browserCookieToken: (state, payload) => {
        state.accessToken = payload;
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations,

}
