<template>   
    <v-app>
        <Banner></Banner>
        <Card></Card>

    </v-app>   
</template>   
<script>   

    import Banner from './_Banner'; 
    import Card from './_Card'; 

    export default {   
        components: { 
            Banner,  
            Card,  
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