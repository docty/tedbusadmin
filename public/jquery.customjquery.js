;(function($, undefined){

 





function initialize(options){
	 
	this.each(function(){
        let wizard = $(this);
        
         Render(wizard);
	
      return ;
    });

}

function Render(properties) {
	properties.children().eq(0).addClass('title');
 	let body =   properties.children().eq(1).addClass('form');
    body.find('button').addClass('btn-login');
    body.find('span').addClass('input-icon');
}


 

$.fn.customjquery = function(properties){

	initialize.apply(this, properties);
 
}


 
})(jQuery);