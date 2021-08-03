<template>   
    <div>  
        <h1>Home</h1>  

        <router-link :to="{ name: 'home'}" class="btn btn-primary">Home</router-link>
        <router-link :to="{ name: 'about'}" class="btn btn-primary">About</router-link>

        <h1>{{ user.name }}</h1>

        
    </div>   
</template>   
<script>   
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

            user: {
                get() {
                    return this.$store.state.currentUser.user;
                }
            }
        },   
        filters: {   
              
        }   
           
    }   
</script>