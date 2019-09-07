<?php require('./database/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Technical Test | Dumbways</title>
   <link rel="stylesheet" href="./assets/css/bootstrap.css">
</head>
<body>
<div class="modal fade" tabindex="-1" id="exampleModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Categories</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="form-group">
            <label for="name" class="control-label">Name</label>
            <input type="text" class="form-control" id="name">
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="saveCategory">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="container">
   <div class="card mt-5">
      <div class="card-header">
         <h3 class="card-title float-left">
            Category and product
         </h3>
         <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
           Add Category
         </button>
      </div>
      <div class="card-body">
         <table class="table table-bordered">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Product</th>
               </tr>
            </thead>
            <tbody>
               <?php
                     $categories = $connection->prepare("SELECT * FROM `categories`");
                     $categories->execute();
                     $no = 1;
                     while($f = $categories->fetch(PDO::FETCH_LAZY)){ ?>
                     <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $f['name']; ?></td>
                        <td>
                           <?php
                              $product = $connection->prepare("SELECT * FROM `product` WHERE `category_id` = :category_id ");
                              $product->bindParam(':category_id',$f->id);
                              $product->execute();
                              while($x = $product->fetch(PDO::FETCH_LAZY)){ ?>
                                 <span class="badge badge-warning"><?php echo $x->name;  ?></span>
                           <?php   } ?>                           
                        </td>
                     </tr>
               <?php $no++; } ?>
            </tbody>
         </table>
      </div>
   </div>
</div>
</body>
<script src="./assets/js/jquery-3.2.1.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/app.js"></script>
</html>