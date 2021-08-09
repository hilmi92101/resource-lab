<template>   
    <div class="wrapper">  

		<Navbar></Navbar>
		<Sidebar></Sidebar>
		<div class="content-wrapper">
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>Button Menu</h1> </div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Button Menu</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="content">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Example 1</h3>
						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse"> <i class="fas fa-minus"></i> </button>
							<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove"> <i class="fas fa-times"></i> </button>
						</div>
					</div>
					<div class="card-body">

                        <div class="card w-100 mx-auto">
                            <div class="card-body">
                                <div class="button-menu-container">
                                    <carousel 
                                        :nav="false"
                                        :dots="false"
                                        :margin="60"
                                        :items="5"
                                        :stagePadding="80"
                                        :responsive="{0:{items:3,},600:{items:6,}}"
                                    >
                                        <div @click.prevent="doAction(button.action)" v-for="button in buttons" class="button-item">
                                            <img :src="button.imgSrc" alt="">
                                        </div>
                                        
                                    </carousel>
                                </div>
                            </div>
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
                
                buttons: [
                    {
                        icon: 'fab fa-accessible-icon',
                        action: 'Action 1',
						imgSrc: '/images/spin-wheel.png',
                    },
                    {
                        icon: 'fab fa-accusoft',
                        action: 'Action 2',
						imgSrc: '/images/spin-wheel.png',
                    },
                    {
                        icon: 'fas fa-address-book',
                        action: 'Action 3',
						imgSrc: '/images/spin-wheel.png',
                    },
                    {
                        icon: 'fab fa-algolia',
                        action: 'Action 4',
						imgSrc: '/images/spin-wheel.png',
                    },
                    {
                        icon: 'fas fa-archway',
                        action: 'Action 5',
						imgSrc: '/images/spin-wheel.png',
                    },
                    {
                        icon: 'fas fa-atlas',
                        action: 'Action 6',
						imgSrc: '/images/spin-wheel.png',
                    },
                    {
                        icon: 'fas fa-battery-three-quarters',
                        action: 'Action 7',
						imgSrc: '/images/spin-wheel.png',
                    },
                    
                    




                    

                    
                    
                ],
                
            }   
        },    
        created() {   
        },   
    	methods: {   
			
			doAction(action){
				console.log(action);
			},
        },   
        computed: {   
        },   
        filters: {   
              
        }   
           
    }   
</script>