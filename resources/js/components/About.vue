<template>   
    <div>  
        <h1>About</h1>  
        <router-link :to="{ name: 'home'}" class="btn btn-primary">Home</router-link>
        <router-link :to="{ name: 'about'}" class="btn btn-primary">About</router-link>

        <h1> {{ showName }}</h1>


    </div>   
</template>   
<script>   

    import {mapActions} from 'vuex';
    import {mapGetters} from 'vuex';

    export default {   
        components: {   
        },   
        props: {   
        },  
    	data() {   
            return {   
                   
            }   
        },    
        created() {   
        },   
    	methods: {   
              
        },   
        computed: {   

            ...mapGetters('currentUser', [
                'showName',
                'showEmail',
            ]),
        },   
        filters: {   
              
        }   
           
    }   
</script>