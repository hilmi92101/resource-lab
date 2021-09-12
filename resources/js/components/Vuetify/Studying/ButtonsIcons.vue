<template>   
    <div>  
        
        <h1>Buttons & Icons</h1>
        
        <v-btn class="pink white--text">Click Me</v-btn>
        <v-btn color="pink">Click Me</v-btn>
        <v-btn dark color="pink">Click Me</v-btn>
        <v-btn depressed dark color="pink">Click Me (depressed)</v-btn>
        <v-btn text color="pink">Hover this button (text prop)</v-btn>

        <v-btn depressed class="pink white--text">
            <v-icon>mdi-email</v-icon>
        </v-btn>

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