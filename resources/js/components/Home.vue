<template>   
    <div>  
        <h1>Home</h1>  

        <router-link :to="{ name: 'home'}" class="btn btn-primary">Home</router-link>
        <router-link :to="{ name: 'about'}" class="btn btn-primary">About</router-link>

        <h1>{{ showName }}</h1>
        <h1>{{ showEmail }}</h1>

        <button class="btn btn-success" @click="changeName('Maryam')">Change Name</button>

        
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

            ...mapActions('currentUser', [
                'changeName'
            ]),
              
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