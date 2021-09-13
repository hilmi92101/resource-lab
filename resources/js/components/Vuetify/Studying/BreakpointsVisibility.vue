<template>   
    <div>  
        
        <h1>Breakpoints & Visibility</h1>
        
        <v-btn class="hidden-md-and-down">click me (hidden-md-and-down) (will disappear <1263)</v-btn>
        <v-btn class="hidden-md-and-up">click me (hidden-md-and-up) (will disappear >959)</v-btn>
        <v-btn class="hidden-sm-only">click me (hidden-sm-only) (600px > < 960px)</v-btn>


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