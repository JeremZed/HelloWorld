requirejs.config({
    baseUrl: 'Public/js',
    paths: {
        app: 'app'
    }
});


requirejs(['app/loader'], function(Loader){
	
	$(document).ready(function(){
		Loader.init('index');
	});
	
});
