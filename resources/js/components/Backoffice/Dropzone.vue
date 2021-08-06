<template>   
    <div class="wrapper">  

		<Navbar></Navbar>
		<Sidebar></Sidebar>
		<div class="content-wrapper">
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>Dropzone</h1> </div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Dropzone</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="content">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Dropzone</h3>
						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse"> <i class="fas fa-minus"></i> </button>
							<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove"> <i class="fas fa-times"></i> </button>
						</div>
					</div>
					<div class="card-body">
                        <vue2Dropzone ref="myVueDropzone" id="dropzone" :options="dropzoneOptions" v-on:vdropzone-sending="sendingEvent"></vue2Dropzone>
                    </div>
				</div>
			</section>
		</div>
		<Footer></Footer>
		<ControlSidebar></ControlSidebar>

 
	</div>   
</template>   
<script>   

    import vue2Dropzone from 'vue2-dropzone'
    import 'vue2-dropzone/dist/vue2Dropzone.min.css';

	import Navbar from './_Navbar';
	import Sidebar from './_Sidebar';
	import Footer from './_Footer';
	import ControlSidebar from './_ControlSidebar';

    export default {   
        components: {   
			Navbar,
			Sidebar,
			Footer,
			ControlSidebar,
			vue2Dropzone,
        },   
        props: {   
        },  
    	data() {   
            return {   
                dropzoneOptions: {
                    url: '/api/dropzone/upload',
                    thumbnailWidth: 150,
                    maxFilesize: 25.0,
                    dictDefaultMessage: '<i class="fas fa-upload"></i> Drop to upload...',
                    headers: { 
                        //'Accept': 'application/json',
                        //'Authorization': 'Bearer ' + this.token,
                        //'Content-Type': 'multipart/form-data' 
                    }
                    
                },
                
                   
            }   
        },    
        created() {   
        },   
    	methods: {   
            sendingEvent (file, xhr, formData) {
                formData.append('paramName', 'some value or other');
                formData.append('id', 1234567);
            },
              
        },   
        computed: {   
        },   
        filters: {   
              
        }   
           
    }   
</script>