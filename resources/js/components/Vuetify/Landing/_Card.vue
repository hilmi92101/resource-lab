<template>   

    <div>

        <v-container>
    
            <v-row>
                <v-col
                    md="4"
                    sm="6"
                    v-for="i in 6"
                    :key="i"
                   
                >
                    <v-card
                        class=""
                    >
                        <v-img
                            class="white--text align-end"
                            height="200px"
                            src="https://cdn.vuetifyjs.com/images/cards/docks.jpg"
                        >
                            <v-card-title>Top 10 Australian beaches</v-card-title>
                        </v-img>

                        <v-card-subtitle class="pb-0">
                            Number 10
                        </v-card-subtitle>

                        <v-card-text class="text--primary">
                            <div>Whitehaven Beach</div>
                            <div>Whitsunday Island, Whitsunday Islands</div>
                        </v-card-text>

                        <v-card-actions>
                            <v-btn
                                color="orange"
                                text
                            >
                                Share
                            </v-btn>

                            <v-btn
                                color="orange"
                                text
                            >
                                Explore
                            </v-btn>
                        </v-card-actions>
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