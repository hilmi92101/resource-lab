<template>   
    <div class="projects">  
        
        <v-subheader class="subtitle-1 grey--text">Cards</v-subheader>

        <v-container class="my-5">
           <v-card
                elevation="2"
                class="mb-12"
            >
                <v-card-title class="display-1">Cafe Badilico</v-card-title>

                <v-card-text>
                    <v-row
                        align="center"
                        class="mx-0"
                    >
                        <v-rating
                        :value="4.5"
                        color="amber"
                        dense
                        half-increments
                        readonly
                        size="14"
                        ></v-rating>

                        <div class="grey--text ms-4">
                            4.5 (413)
                        </div>
                    </v-row>

                    <div class="my-4 text-subtitle-1">
                        $ • Italian, Cafe
                    </div>

                    <div>Small plates, salads & sandwiches - an intimate setting with 12 indoor seats plus patio seating.</div>
                </v-card-text>
            </v-card>


            <v-card
                elevation="2"
            >
                <v-card-title class="display-1">Table</v-card-title>

                <v-container class="my-5">
                    <v-simple-table
                        fixed-header
                        height="300px"
                    
                    >
                        <template v-slot:default>
                            <thead>
                                <tr>
                                    <th class="text-left">
                                        Name
                                    </th>
                                    <th class="text-left">
                                        Calories
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="item in desserts"
                                    :key="item.name"
                                >
                                    <td>{{ item.name }}</td>
                                    <td>{{ item.calories }}</td>
                                </tr>
                            </tbody>
                        </template>
                    </v-simple-table>
                </v-container>
                

                
            </v-card>
        </v-container>


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

                desserts: [
                    {
                        name: 'Frozen Yogurt',
                        calories: 159,
                    },
                    {
                        name: 'Ice cream sandwich',
                        calories: 237,
                    },
                    {
                        name: 'Eclair',
                        calories: 262,
                    },
                    {
                        name: 'Cupcake',
                        calories: 305,
                    },
                    {
                        name: 'Gingerbread',
                        calories: 356,
                    },
                    {
                        name: 'Jelly bean',
                        calories: 375,
                    },
                    {
                        name: 'Lollipop',
                        calories: 392,
                    },
                    {
                        name: 'Honeycomb',
                        calories: 408,
                    },
                    {
                        name: 'Donut',
                        calories: 452,
                    },
                    {
                        name: 'KitKat',
                        calories: 518,
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