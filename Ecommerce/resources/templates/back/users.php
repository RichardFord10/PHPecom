<?php add_user(); ?>
<h1 class="page-header">
  Users
  <br>

</h1>
<h4 class="bg-success text-center">

</h4>


  <form action="" method="post">

    <div class="form-group">
      <div class = "col-md-3">
      <label for="username">Username</label>
      <input type="text" name="username" class="form-control">
      </div>
      <div class = "col-md-3">
      <label for="username">Email</label>
      <input type="email" name="email" class="form-control">
      </div>
      
      <div class = "col-md-3">
      <label for="password">Password</label>
      <input type="text" name="password" class="form-control">
      <div>
        
        </div>
    </div>

    <div class="form-group">

      <input type="submit" name="add_user" class="btn btn-primary" value="Add">
    </div>
  </form>


</div>
<hr>

<div class="row">

  <table class="table">
    <thead>

      <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
      </tr>
    </thead>


    <tbody>
          <?php display_users(); ?>
    </tbody>

  </table>



</div>