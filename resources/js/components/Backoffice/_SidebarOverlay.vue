<template>  
    <div>
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

			var body = $('body');
			setTimeout(function(){
				if(body.find('#sidebar-overlay').length < 1 && window.innerWidth <= 922){
					$('[data-widget="pushmenu"]').PushMenu('collapse');
				}
			},100);

        },  
    	methods: {  
			
        },  
        computed: {  
        },  
        filters: {  
             
        },
		
		
          
    }  
</script>