<?php add_category(); ?>
<h1 class="page-header">
  Product Categories
  <br>

</h1>
<h4 class="bg-success text-center">
  <?php display_message(); ?>
</h4>

<div class="col-md-4">
    
    <form action="" method="post">
    
        <div class="form-group">
            <label for="category-title">Title</label>
            <input type="text" name="cat_title" class="form-control">
        </div>

       <div class="form-group">
            
            <input type="submit" name="add_category" class="btn btn-primary" value="Add">
        </div>      
    </form>


</div>
<hr>

 <div class="row">

    <table class="table">
            <thead>

        <tr>
            <th>id</th>
            <th>Title</th>
        </tr>
            </thead>


    <tbody>
      <?php display_categories(); ?>
    </tbody>

        </table>
                 
                   
                   
</div>

