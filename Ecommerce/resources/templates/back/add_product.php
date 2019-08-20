<?php add_product(); ?>
<div class="col-md-12">

<div class="row">
<h1 class="page-header">
   Add Product

</h1>
  <h4 class="bg-success text-center">
    <?php display_message(); ?>
  </h4>
</div>
               


<form action="" method="post" enctype="multipart/form-data">


<div class="col-md-8">

<div class="form-group">
    <label for="product-title">Product Title </label>
        <input type="text" name="product_title" class="form-control">
  </div>
  
  <div class="form-group">
    <label for="product-title">Product Caption </label>
        <textarea name="product_caption" id="" cols="30" rows="2" class="form-control"></textarea>
  </div>


    <div class="form-group">
           <label for="product-title">Product Description</label>
      <textarea name="product_description" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>



    <div class="form-group row">

      <div class="col-xs-3">
        <label for="product-price">Product Price</label>
        <input type="number" name="product_price" class="form-control">
      </div> 
       <div class="col-xs-3">
      <label for="product-quantity">Product Quantity</label>
         <input type ="number" name="product_quantity" class="form-control">
      </div>
      
      <div class="col-xs-3">
         <label for="product-title">Product Category</label>
        <select name = "product_category_id" id ="" class = "form-control">
          <option value ="">Select Category</option>
          <?php show_categories_add_product();?>
        </select>

  
  </div>


  </div>

    
    




<!-- SIDEBAR-->


<!--<aside id="admin_sidebar" class="col-md-4">-->

     
     <div class="form-group">
       <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft">
        <input type="submit" name="publish" class="btn btn-primary btn-lg" value="Publish">
    </div>


     <!-- Product Categories-->



</div>





    <!-- Product Brands-->




<!-- Product Tags -->

<?php /*
    <div class="form-group">
          <label for="product-title">Product Keywords</label>
          <hr>
        <input type="text" name="product_tags" class="form-control">
    </div>
*/ ?>
    <!-- Product Image -->
    <div class="form-group">
        <label for="product-title">Product Image</label>
        <input type="file" name="file">
      
    </div>



</aside><!--SIDEBAR-->


    
</form>


<?php 
/*
function add_product() {
  
  if(isset($_POST['publish'])){
   
    $product_title = escape_string($_POST['product_title']);
    $product_category_id = escape_string($_POST['product_category_id']);
    $product_price = escape_string($_POST['product_price']);
    $product_description = escape_string($_POST['product_description']);
    $product_short_desc = escape_string($_POST['product_caption']);
    $product_quantity = escape_string($_POST['product_quantity']);
    $product_image = escape_string($_FILES['file']['name']);
    $image_temp_location = escape_string($_FILES['file']['tmp_name']);
    
    move_uploaded_file($image_temp_location , UPLOAD_DIRECTORY . DS . $product_image);

    $query = query("INSERT INTO products(product_title, product_category_id, product_price, product_description, product_caption, product_quantity, product_image) VALUES('$product_title', '$product_category_id', '$product_price', '$product_description', '$product_short_desc', '$product_quantity', '$product_image')");
    $last_id = last_id(); 
    confirm($query);
    set_message("New Product with id {$last_id} was Added");
    redirect("index.php?products");
    
    */
    
    
    
    
?>





















