<template>   
    <div class="wrapper">  

		<Navbar></Navbar>
		<Sidebar></Sidebar>
		<div class="content-wrapper">
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>Login: User</h1> </div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Login: User</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="content">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Form</h3>
						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse"> <i class="fas fa-minus"></i> </button>
							<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove"> <i class="fas fa-times"></i> </button>
						</div>
					</div>
					<div class="card-body">
                        <div class="form-group">
							<label for="username">Email</label>
							<input 
								v-model="user.email" 
								type="text" 
								class="form-control" id="email" placeholder="Enter email"
							>
							
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input 
								v-model="user.password" 
								type="password" class="form-control" id="password" placeholder="Enter password"
							>
							
						</div>

                        <button @click.prevent="login()" class="btn btn-primary">Login</button>
                    
                    </div>
				</div>

                <div class="card">
					<div class="card-header">
						<h3 class="card-title">Get User Data</h3>
						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse"> <i class="fas fa-minus"></i> </button>
							<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove"> <i class="fas fa-times"></i> </button>
						</div>
					</div>
					<div class="card-body">
                        
                        <button @click.prevent="getUserData()" class="btn btn-primary">Get</button>
                    
                    </div>
				</div>
			</section>
		</div>
		<Footer></Footer>
		<ControlSidebar></ControlSidebar>

 
	</div>   
</template>   
<script>   

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

            this.$store.dispatch('BOUser/getCookie');
            //this.$store.dispatch('BOUser/destroyCookie');
            console.log(this.state);
        },   
    	methods: {   
            login(){

                var self = this;
                let data = {
                    user: this.user,
                }

                let config = {
                    headers: {
                        'Accept': 'application/json',
                    }
                }
                axios.post('/api/user/login', data, config)
                .then(function (response) {
                    console.log(response.data);
                    if(response.data.success){
                         //self.$store.dispatch('BOUser/updateUserState', response.data, {root:true});
                        self.$store.dispatch('BOUser/updateUserState', response.data);
                        self.$store.dispatch('BOUser/setCookie');
                    } else {
                        // if(response.data.hasOwnProperty('errors')){ 
                        //     context.commit('errorCreateUser', response.data.errors);
                        // }
                    }
                })
                .catch(function (error) {
                });
            },

            getUserData(){
                //console.log(this.state);
                var self = this;
                let config = {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + this.accessToken,
                    }
                }
                axios.post('/api/user/data', {}, config)
                .then(function (response) {
                    console.log(response.data);
                })
                .catch(function (error) {
                    //console.log(error.response);
                    if(error.response.data.hasOwnProperty('message')){
                        console.log('=================================');
                        console.log(error.response.data.message);
                    }
                });
            },
              
        },   
        computed: {  
            ...mapGetters('BOUser', [
                'user',
                'accessToken',
                'errors',
                'state',
            ]), 
        },   
        filters: {   
              
        }   
           
    }   
</script>