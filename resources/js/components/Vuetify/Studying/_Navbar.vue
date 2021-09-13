<template>   
    <nav>  
        
        
        <v-app-bar app>
            <v-app-bar-nav-icon 
                @click.stop="drawer = !drawer"
                class="grey--text"
            >
            </v-app-bar-nav-icon>
            
            <v-toolbar-title flat class="text-uppercase grey--text">
                Todo
                <span class="font-weight-bold">Ninja</span>
            </v-toolbar-title>

            <v-spacer></v-spacer>

            <v-btn text color="grey">
                <span>Sign Out</span>
                <v-icon right>logout</v-icon>
            </v-btn>
        </v-app-bar>

        <v-navigation-drawer app  v-model="drawer" class="indigo">
            test
        </v-navigation-drawer>



    </nav>   
</template>   
<script>   

   

    export default {   
        components: {   
        },   
        props: {   
        },  
    	data() {   
            return {   
                drawer: false,
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