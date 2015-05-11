define(function (require) {	
	
    var objet = {    	
    	modal 		: '<div id="loader"><img src="public/img/loader.gif" alt="loader" /><br /><br />Chargement...</div>',
    	createLoader : function(){    		
    		$('body').append(this.modal);
    	},
    	loader : function(flag, dataURL){
    		
    		$.ajax({
        		  method: "GET",
        		  url: "Loader.php",
        		  data: { route: flag, data : dataURL },
                      beforeSend: function(){
                	  $('#loader').modal('show');   
	              },
	              success: function(response){
	            	  
	            	  var data = jQuery.parseJSON(response);
	            	  	            	  
	            	  $('#content').html(data.RENDER);
	            	  
	              	  
	            	  // Gestion des routes avec les liens
	            	  $('[data-link]').click(function(){    
	                	     _view = $(this).attr('data-link');
	                	     objet.loader(_view);
	             	  });
	            	  
	            	  // Gestion des routes avec les formulaires
	            	  $('input[type=submit]').click(function(){
	            		  
	            		  	 var form = $(this).closest('form');
	            		  	 _view = form.attr('action');
	            		  	 objet.loader(_view, form.serialize());
	            		  	 
	                	     return false;
	             	  });
	                	  
	            	  $('#loader').modal('hide');
	              },
        	});
    	},
    	
    	init : function(view){
    		this.createLoader();
    		this.loader(view);
    	},
    }
    
    return objet;
});
