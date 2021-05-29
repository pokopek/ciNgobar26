<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigneter dengan dataTable</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
             <th>Id</th>
             <th>Name</th>
             <th>kol 1</th>
             <th>kol 3</th>
             <th>kol 4</th>
             <th>Email</th>
             <th>Email</th>
             <th>Email</th>
             <th>Email</th>
          </tr>
       </thead>
       <tbody>
          <?php if($users): ?>
          <?php foreach($users as $user): ?>
          <tr>
             <td><?php echo $user['id']; ?></td>
             <td><?php echo $user['productName']; ?></td>
             <td><?php echo $user['productLine']; ?></td>
             <td><?php echo $user['productScale']; ?></td>
             <td><?php echo $user['productVendor']; ?></td>
             <td><?php echo $user['productDescription']; ?></td>
             <td><?php echo $user['quantityInStock']; ?></td>
             <td><?php echo $user['buyPrice']; ?></td>
             <td><?php echo $user['MSRP']; ?></td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#users-list').DataTable();
  } );
</script>
</body>
</html>