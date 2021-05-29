<?= $this->extend('templates/index');?>
 <?= $this->section('page-content');?>
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
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

</div>
<?= $this->endSection();?>

<!-- /.container-fluid -->