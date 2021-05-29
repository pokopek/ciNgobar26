 
 <?= $this->extend('templates/index');?>
 <?= $this->section('page-content');?>

 
 
  

    <div class="container mt-3">
    <div class ="row">
    <div class="col">
        <table class ="display" id ="datatable">
            <thead>
                <tr>
                    <th> No </th>
                    <th> Program </th> 
                    <th> No Rek Kegiatan </th>
                    <th> Kegiatan  </th>
                    <th> Pagu </th>
                    <th> Aksi </th>
                </tr>
            </thead>
            <tbody>
                <?php $no =0 ;
                foreach ($tampildata as $row) :
                    $no++;
                    ?>
                <tr>
                    <td> <?= $no ?> </td>
                    <td> <?= $row['id_program'] ?> </td>
                    <td> <?= $row['kode_kegiatans'] ?> </td>
                    <td> <?= $row['nama'] ?> </td>
                    <td> <?= $row['pagu'] ?> </td>
                    <td>  </td>
                </tr>
                    <?php endforeach; ?>
            </tbody>
        
        
        
        
        
        
        </table>
   
    
        
</div>
</div>   
</div>
    

<script>
$(document).ready( function () {
    $('#datatable').DataTable(
        {
            dom: 'Bfrtip',
            buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ],
                    order: [[2, 'asc']],
                        rowGroup: {
                        dataSrc: 1
                         },
                    columnDefs: [ {
                         targets: [ 1, 2 ],
                        visible: false
                    }]
           
    }
    );
} );

</script>

<?= $this->endSection();?>
<!-- /.container-fluid -->
