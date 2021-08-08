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
						<h3 class="card-title">Validation</h3>
						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse"> <i class="fas fa-minus"></i> </button>
							<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove"> <i class="fas fa-times"></i> </button>
						</div>
					</div>
					<div class="card-body"> 
                        <div class="form-group">
							<label for="username">Username</label>
							<input 
								:class="errors.hasOwnProperty('username') && form.username.length < 1 ? 'is-invalid' : ''" 
								v-model="form.username" 
								type="text" 
								class="form-control" id="username" placeholder="Enter username"
							>
							<label v-if="errors.hasOwnProperty('username') && form.username.length < 1" class="error">
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
							<select 
								:class="errors.hasOwnProperty('status') ? 'is-invalid' : ''" 
								v-model="form.status" class="form-control"
							>
								<option value="1">Single</option>
								<option value="2">Married</option>
							</select>
							<label v-if="errors.hasOwnProperty('status')" class="error">
								{{ errors.hasOwnProperty('status') ? errors.status[0] : '' }}
							</label>
						</div>
						<div class="form-group">
							<label>Personal Detail</label>
							<div class="custom-control custom-checkbox">
								<input v-model="form.personalDetail" value="1" id="customCheckbox1" class="custom-control-input" type="checkbox">
								<label for="customCheckbox1" class="custom-control-label">Has a Job</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input v-model="form.personalDetail" value="2" id="customCheckbox2" class="custom-control-input" type="checkbox">
								<label for="customCheckbox2" class="custom-control-label">A Gamer</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input v-model="form.personalDetail" value="3" id="customCheckbox3" class="custom-control-input" type="checkbox">
								<label for="customCheckbox3" class="custom-control-label">Can speak French</label>
							</div>
							<label v-if="errors.hasOwnProperty('personalDetail')" class="error">
								{{ errors.hasOwnProperty('personalDetail') ? errors.personalDetail[0] : '' }}
							</label>
							
							
						</div>

						<div class="form-group">
							<label>Willing to work with others</label>
							<div class="custom-control custom-radio">
								<input v-model="form.workWithOthers" value="1" class="custom-control-input" type="radio" id="customRadio1" name="customRadio">
								<label for="customRadio1" class="custom-control-label">Yes</label>
							</div>
							<div class="custom-control custom-radio">
								<input v-model="form.workWithOthers" value="2" class="custom-control-input" type="radio" id="customRadio2" name="customRadio">
								<label for="customRadio2" class="custom-control-label">No</label>
							</div>
							<label v-if="errors.hasOwnProperty('workWithOthers')" class="error">
								{{ errors.hasOwnProperty('workWithOthers') ? errors.workWithOthers[0] : '' }}
							</label>
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
		<SidebarOverlay></SidebarOverlay>

 
	</div>   
</template>   
<script>  

	import {mapActions} from 'vuex';
    import {mapGetters} from 'vuex';
	
	import Navbar from './_Navbar';
	import Sidebar from './_Sidebar';
	import Footer from './_Footer';
	import ControlSidebar from './_ControlSidebar';
	import SidebarOverlay from './_SidebarOverlay';

    export default {   
        components: {   
			Navbar,
			Sidebar,
			Footer,
			ControlSidebar,
			SidebarOverlay,
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