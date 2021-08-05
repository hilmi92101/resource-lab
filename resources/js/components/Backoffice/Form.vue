<template>   
    <div class="wrapper">  

		<Navbar></Navbar>
		<Sidebar></Sidebar>
		<div class="content-wrapper">
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>Form</h1> </div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Form</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="content">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Title</h3>
						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse"> <i class="fas fa-minus"></i> </button>
							<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove"> <i class="fas fa-times"></i> </button>
						</div>
					</div>
					<div class="card-body"> 
                        <div class="form-group">
							<label for="username">Username</label>
							<input 
								:class="errors.hasOwnProperty('username') ? 'is-invalid' : ''" 
								v-model="form.username" 
								type="text" 
								class="form-control" id="username" placeholder="Enter username"
							>
							<label v-if="errors.hasOwnProperty('username')" class="error">
								{{ errors.hasOwnProperty('username') ? errors.username[0] : '' }}
							</label>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input 
								:class="errors.hasOwnProperty('password') ? 'is-invalid' : ''" 
								v-model="form.password" 
								type="password" class="form-control" id="password" placeholder="Enter password"
							>
							<label v-if="errors.hasOwnProperty('password')" class="error">
								{{ errors.hasOwnProperty('password') ? errors.password[0] : '' }}
							</label>
						</div>
						<div class="form-group">
							<label>Status</label>
							<select class="form-control">
								<option>Single</option>
								<option>Married</option>
							</select>
						</div>
						<div class="form-group">
							<label>Personal Detail</label>
							<div class="form-check">
								<input class="form-check-input" type="checkbox">
								<label class="form-check-label">Has a Job</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox">
								<label class="form-check-label">A Gamer</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox">
								<label class="form-check-label">Can speak French</label>
							</div>
						</div>

						<div class="form-group">
							<label>Willing to work with others</label>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="radio1" checked>
								<label class="form-check-label">Yes</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="radio1">
								<label class="form-check-label">No</label>
							</div>
						</div>

						<button @click.prevent="createUser()" class="btn btn-primary">Create</button>

                    </div>
					<!-- <div class="card-footer">  
                    </div>-->
				</div>
			</section>
		</div>
		<Footer></Footer>
		<ControlSidebar></ControlSidebar>

 
	</div>   
</template>   
<script>  

	import {mapActions} from 'vuex';
    import {mapGetters} from 'vuex';
	
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

			...mapActions('BOForm', [
                'createUser',
            ]),
              
        },   
        computed: {   

			...mapGetters('BOForm', [
                'form',
                'errors',
            ]),
        },   
        filters: {   
              
        }   
           
    }   
</script>