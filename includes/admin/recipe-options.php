<?php
function spnin_recipe_options_mb($post){
  //print_r($post);
  //die();
  $recipe_data=get_post_meta($post->ID,'recipe_data',true);
  ?>
  <div class="form-group">
    <label for="">Ingredient</label>
    <input type="text" class="form-control" id="" name="spninp_inputingredients" value="<?php if(!empty($recipe_data['ingredients'])) { echo $recipe_data['ingredients'];} ?>" placeholder="">
  </div>
  <div class="form-group">
    <label for="">Cooking Time</label>
    <input type="text" class="form-control" id="" name="spninp_inputtime" value="<?php if(!empty($recipe_data['time'])){ echo $recipe_data['time'];} ?>" placeholder="">
  </div>
  <div class="form-group">
    <label for="">Cooking Utensils</label>
    <input type="text" class="form-control" id="" name="spninp_inpututensils" value="<?php if(!empty($recipe_data['utensils'])){ echo $recipe_data['utensils']; } ?>" placeholder="">
  </div>
  <div class="form-group">
    <label for="">Cooking Level</label>
     <select class="form-control" name="spninp_inputlevel">
       <option value="Beginner" >Beginner</option>
       <option value="Intermediate" <?php if(!empty($recipe_data['level'])){ echo $recipe_data['level']=='Intermediate'? 'SELECTED':''; }?>>Intermediate</option>
       <option value="Expert" <?php if(!empty($recipe_data['level'])){ echo $recipe_data['level']=='Expert'? 'SELECTED':''; } ?>>Expert</option>
     </select>
  </div>
  <div class="form-group">
    <label for="">Meal Type</label>
    <input type="text" class="form-control" id="" value="<?php if(!empty($recipe_data['mealtype'])){ echo $recipe_data['mealtype']; } ?>" name="spninp_inputmealtype" placeholder="">
  </div>
<?php
}
