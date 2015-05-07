define(function (require) {	
	
    var objet = {    	
    	modal 		: '<div id="loader"><img src="public/img/loader.gif" alt="loader" /><br /><br />Chargement...</div>',
    	createLoader : function(){    		
    		$('body').append(this.modal);
    	},
    	loader : function(flag){
    		$.ajax({
        		  method: "GET",
        		  url: "Loader.php",
        		  data: { route: flag },
                  beforeSend: function(){
                	  $('#loader').modal('show');   
	              },
	              success: function(response){
	            	  $('#content').html(response);
	              	  	  
	            	  $('[data-link]').click(function(){    
	                	     _view = $(this).attr('data-link');
	                	     objet.loader(_view);
	             	  });
	                	  
	            	  $('#loader').modal('hide');
	              },
        	});
    	},
    	init : function(view)
    	{
    		this.createLoader();
    		this.loader(view);
    	},
    }
    
    return objet;
});
