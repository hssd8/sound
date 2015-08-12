/** 
 * @projectDescription   General jquery - javascript calls
 * @author   Ibrahim Isa
 * @version  0.1 
 */
$(function() {
                          
           /**
            * @Element     : img
            * @Description : Wait for images to load then fade them In
            */
           $('.wait img').load(function () {
                setTimeout(function(){
                            $(event.target).fadeIn(1500); 
                                     }, 5000);
           });
           /**
            * @class gen-sub
            * @description : Activate loading
            */
           $('.gen_sub').click(function(){
               $('.loader').show();
           });
              
                       
});

