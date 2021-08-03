<template>   
    <div>  
        <h1>Home</h1>  

        <router-link :to="{ name: 'home'}" class="btn btn-primary">Home</router-link>
        <router-link :to="{ name: 'about'}" class="btn btn-primary">About</router-link>
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
        },   
        filters: {   
              
        }   
           
    }   
</script>