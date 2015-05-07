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
        		  data: { route: flag, save : objet.getSave() },
                      beforeSend: function(){
                	  $('#loader').modal('show');   
	              },
	              success: function(response){
	            	  
	            	  var data = jQuery.parseJSON(response);
	            	  
	            	  $('#content').html(data.RENDER);
	              	  	  
	            	  $('[data-link]').click(function(){    
	                	     _view = $(this).attr('data-link');
	                	     objet.loader(_view);
	             	  });
	                	  
	            	  $('#loader').modal('hide');
	              },
        	});
    	},
    	
    	getSave : function(){    		   		
    		return sessionStorage.getItem("save");    		
    	},
    	
    	init : function(view){
    		this.createLoader();
    		this.loader(view);
    	},
    }
    
    return objet;
});
