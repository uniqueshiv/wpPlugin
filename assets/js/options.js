jQuery(document).ready(function($){

  $('#recipe_rating').bind('rated',function(){
    $(this).rateit('readonly',true);
    var formobj   = {
        action:   'spninp_rate_recipe',
        rid:      $(this).data('rid'),
        rating:   $(this).rateit('value')
      }
    //  alert('sss')
    console.log(formobj);
    $.post(recipe_obj.ajax_url,formobj,function(data){
      console.log(data);
    })
  })

})
