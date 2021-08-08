<template>   
    <div class="wrapper">  

		<Navbar></Navbar>
		<Sidebar></Sidebar>
		<div class="content-wrapper">
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>Gallery</h1> </div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Gallery</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="content">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Gallery</h3>
						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse"> <i class="fas fa-minus"></i> </button>
							<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove"> <i class="fas fa-times"></i> </button>
						</div>
					</div>
					<div class="card-body">

                        <div class="owl-carousel-container">
                            <carousel 
                                :nav="false"
                                :dots="false"
                                :margin="20"
                                :items="3"
                                :stagePadding="40"
                                :responsive="{0:{items:1,},600:{items:3,}}"
                            >
                                <template slot="prev">
                                    <span class="prev">
                                        <i class="fas fa-angle-left fa-3x"></i>
                                    </span>
                                </template>
                                <div v-for="card in cards" class="card">
                                    <img src="//placehold.it/500x280" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ card.title }}</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                <template slot="next">
                                    <span class="next">
                                        <i class="fas fa-angle-right fa-3x"></i>
                                    </span>
                                </template>

                            </carousel>
                                
                        </div>


                    </div>
				</div>
			</section>
		</div>
		<Footer></Footer>
		<ControlSidebar></ControlSidebar>
		<SidebarOverlay></SidebarOverlay>

 
	</div>   
</template>   
<script>   

	import Navbar from './_Navbar';
	import Sidebar from './_Sidebar';
	import Footer from './_Footer';
	import ControlSidebar from './_ControlSidebar';
	import SidebarOverlay from './_SidebarOverlay';

    import carousel from 'vue-owl-carousel';

    export default {   
        components: {   
			Navbar,
			Sidebar,
			Footer,
			ControlSidebar,
			SidebarOverlay,

            carousel,
        },   
        props: {   
        },  
    	data() {   
            return {   
                
                cards: [
                    {
                        title: 'Card title 1'
                    },
                    {
                        title: 'Card title 2'
                    },
                    {
                        title: 'Card title 3'
                    },
                    {
                        title: 'Card title 4'
                    },
                    {
                        title: 'Card title 5'
                    },
                    {
                        title: 'Card title 6'
                    },
                    {
                        title: 'Card title 7'
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