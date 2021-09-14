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

        <v-navigation-drawer app  v-model="drawer" class="">
            <v-list dense>
                <v-subheader>REPORTS</v-subheader>
                <v-list-item-group
                    v-model="selectedItem"
                    color="primary"
                >
                    <v-list-item
                        v-for="(link, i) in links"
                        :key="i"
                        router
                        exact
                        :to="link.route"
                    >
                        <v-list-item-icon>
                            <v-icon>{{ link.icon }}</v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                            <v-list-item-title>
                                {{ link.text }}
                            </v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>



                    
                </v-list-item-group>
            </v-list>
            

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
                selectedItem: false,
                links: [
                    {
                        icon:'language',
                        text:'Website',
                        route:'/vuetify',
                    },
                    {
                        icon:'home',
                        text:'Home',
                        route:'/vuetify/studying',
                    },
                    {
                        icon:'title',
                        text:'Text & Color',
                        route:'/vuetify/studying/text-color',
                    },
                    {
                        icon:'insert_emoticon',
                        text:'Buttons & Icons',
                        route:'/vuetify/studying/buttons-icons',
                    },
                    {
                        icon:'desktop_windows',
                        text:'BreakPoints & Visibility',
                        route:'/vuetify/studying/breakpoints-visibility',
                    },
                    
                    
                ],
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