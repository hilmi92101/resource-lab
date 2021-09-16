<template>   
    <div>  
        <v-subheader class="subtitle-1 grey--text">Home</v-subheader>

        <v-container class="my-5">
            <v-row>
                <v-col cols="12" sm="12" md="6" lg="4">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut pariatur explicabo, odio dolor illo laborum beatae velit nulla quam praesentium, corporis eligendi quis expedita eveniet animi quasi architecto enim voluptatum.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut pariatur explicabo, odio dolor illo laborum beatae velit nulla quam praesentium, corporis eligendi quis expedita eveniet animi quasi architecto enim voluptatum.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut pariatur explicabo, odio dolor illo laborum beatae velit nulla quam praesentium, corporis eligendi quis expedita eveniet animi quasi architecto enim voluptatum.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut pariatur explicabo, odio dolor illo laborum beatae velit nulla quam praesentium, corporis eligendi quis expedita eveniet animi quasi architecto enim voluptatum.</p>
                </v-col>
            </v-row>

            <v-row no-gutters>
                <v-col
                    v-for="n in 3"
                    :key="n"
                    cols="12"
                    sm="6"
                >
                    <v-card
                        class="pa-2"
                        outlined
                        tile
                    >
                        One of three columns
                    </v-card>
                </v-col>
            </v-row>


            
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