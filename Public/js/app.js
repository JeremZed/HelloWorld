requirejs.config({
    baseUrl: 'Public/js',
    paths: {
        app: 'app'
    }
});


requirejs(['app/wait'], function(Wait){
	
	$(document).ready(function(){
		Wait.init('index');
	});
	
});