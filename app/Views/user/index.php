 
 <?= $this->extend('templates/index');?>
 <?= $this->section('page-content');?>
 <div class="container mt-3">
  <div class="mt-3">
  <div class="row">
  <div class="col-lg-8">
  
  <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?= base_url('/img/'.user()->user_image); ?>" alt="<?= user()->username; ?>">
    </div>
    <div class="col-md-8">
    <ul class="list-group list-group-flush">
    <li class="list-group-item">
        <h4><?= user()->username ;?></h4>
    </li>
    <?php if (user()->fullname) : ?> 
    <li class="list-group-item">
    <?=user()->fullname; ?>
    </li>
    <?php endif; ?>
    <li class="list-group-item">
    <?= user()->email; ?>
    </li>
    
  </ul>
  
    </div>
  </div>
</div>
<?= $this->endSection();?>
<!-- /.container-fluid -->
