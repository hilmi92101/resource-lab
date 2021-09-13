<template>   
    <v-app>
        <Navbar></Navbar>
        <v-main class="grey lighten-4">
            <router-view></router-view>  
        </v-main>
    </v-app>
</template>   
<script>   

    import Navbar from './Studying/_Navbar'; 

    export default {   
        components: { 
            Navbar,  
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