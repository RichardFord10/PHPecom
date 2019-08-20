<div class="col-md-12">
  <div class="row">
    <h1 class="page-header">
      All Reports

    </h1>
    <h4 class="text-center bg-success">
      <?php display_message(); ?>
    </h4>
  </div>

  <div class="row">
    <table class="table table-hover">
      <thead>

        <tr>
          <th>Report ID</th>
          <th>Product ID</th>
          <th>Order ID</th>
          <th>Product Price</th>
          <th>Product Title</th>
          <th>Product Quantity</th>
          <th>Remove</th>
        </tr>
      </thead>
      <tbody>
        <?php display_reports();
?>

      </tbody>
    </table>
  </div>