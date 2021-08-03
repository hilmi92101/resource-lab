const state = {

    products: [

        { name: 'Banana Skin', price: 20, },
        { name: 'Shiny Star', price: 40, },
        { name: 'Green Shells', price: 60, },
        { name: 'Red Shells', price: 80, },

    ],
};
const getters = {

    saleProducts: state => {
        var saleProducts = state.products.map(product => {

            return {
                name: '**' + product.name + '**',
                price: (product.price/2),
            }
        });

        return saleProducts;
    }
};
const actions = {
    // reducePrice: context => {
    //     setTimeout(function(){
    //         context.commit('reducePrice');
    //     }, 2000);
    // }

    reducePrice: (context, payload) => {
        setTimeout(function(){
            context.commit('reducePrice', payload);
        }, 2000);
    }

};
const mutations = {

    // reducePrice: state => {
    //     state.products.forEach(product => {
    //         product.price = product.price - 1;
    //     });
    // }

    reducePrice: (state, payload) => {
        state.products.forEach(product => {
            product.price = product.price - payload;
        });
    }
    
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations,

}
