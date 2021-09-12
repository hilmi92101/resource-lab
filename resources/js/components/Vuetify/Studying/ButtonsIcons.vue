<template>   
    <div>  
        
        <h1>Buttons & Icons</h1>
        
        <v-btn class="pink white--text">Click Me</v-btn>
        <v-btn color="pink">Click Me</v-btn>
        <v-btn dark color="pink">Click Me</v-btn>
        <v-btn depressed dark color="pink">Click Me (depressed)</v-btn>
        <v-btn text color="pink">Hover this button (text prop)</v-btn>
        
        
        <v-btn depressed class="pink white--text mt-4">
            <v-icon left>people</v-icon>
            <span>Email me</span>
        </v-btn>

        <v-btn small depressed class="pink white--text mt-4">
            <v-icon left>people</v-icon>
            <span>Email me (small)</span>
        </v-btn>

        <v-btn small depressed class="pink white--text mt-4">
            <v-icon left small>people</v-icon>
            <span>Email me (small) (small icon)</span>
        </v-btn>

        <v-btn large depressed class="pink white--text mt-4">
            <v-icon left>people</v-icon>
            <span>Email me (large)</span>
        </v-btn>

        <v-btn large depressed class="pink white--text mt-4">
            <span>Email me (large) (large icon)</span>
            <v-icon right large>people</v-icon>
        </v-btn>

        <v-btn depressed small dark class="purple">
            <v-icon>favorite</v-icon>
        </v-btn>

        <v-btn fab depressed small dark class="purple">
            <v-icon>favorite</v-icon>
        </v-btn>

        <v-btn
            color="blue-grey"
            class="ma-2 white--text"
        >
            Upload
            <v-icon
                right
                dark
            >
            cloud_upload
            </v-icon>
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