<template>   
    <v-app id="inspire">
        <v-navigation-drawer
            v-model="drawer"
            app
        >
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

        <v-app-bar app>
            <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>
            <v-toolbar-title>Application</v-toolbar-title>
        </v-app-bar>

        <v-main>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam mollitia ea recusandae adipisci, id repudiandae temporibus necessitatibus quia dolor consectetur odio distinctio at perferendis, qui iure. Praesentium inventore aliquam sint?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam mollitia ea recusandae adipisci, id repudiandae temporibus necessitatibus quia dolor consectetur odio distinctio at perferendis, qui iure. Praesentium inventore aliquam sint?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam mollitia ea recusandae adipisci, id repudiandae temporibus necessitatibus quia dolor consectetur odio distinctio at perferendis, qui iure. Praesentium inventore aliquam sint?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam mollitia ea recusandae adipisci, id repudiandae temporibus necessitatibus quia dolor consectetur odio distinctio at perferendis, qui iure. Praesentium inventore aliquam sint?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam mollitia ea recusandae adipisci, id repudiandae temporibus necessitatibus quia dolor consectetur odio distinctio at perferendis, qui iure. Praesentium inventore aliquam sint?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam mollitia ea recusandae adipisci, id repudiandae temporibus necessitatibus quia dolor consectetur odio distinctio at perferendis, qui iure. Praesentium inventore aliquam sint?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam mollitia ea recusandae adipisci, id repudiandae temporibus necessitatibus quia dolor consectetur odio distinctio at perferendis, qui iure. Praesentium inventore aliquam sint?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam mollitia ea recusandae adipisci, id repudiandae temporibus necessitatibus quia dolor consectetur odio distinctio at perferendis, qui iure. Praesentium inventore aliquam sint?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam mollitia ea recusandae adipisci, id repudiandae temporibus necessitatibus quia dolor consectetur odio distinctio at perferendis, qui iure. Praesentium inventore aliquam sint?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam mollitia ea recusandae adipisci, id repudiandae temporibus necessitatibus quia dolor consectetur odio distinctio at perferendis, qui iure. Praesentium inventore aliquam sint?</p>
        </v-main>
    </v-app>
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
                    {
                        icon:'work',
                        text:'Projects',
                        route:'/vuetify/studying/projects',
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