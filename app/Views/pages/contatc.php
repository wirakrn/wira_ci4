 <?= $this->extend('layout/template'); ?>

 <?= $this->section('telurcapslock'); ?>
 <div class="container">
     <div class="row">
         <div class="col">
             <h2>Contact </h2>
             <?php foreach ($alamat as $a) : ?>
                 <ul>
                     <li><?= $a['tipe']; ?></li>
                     <li><?= $a['alamat']; ?></li>
                     <li><?= $a['kota']; ?></li>
                 </ul>
             <?php endforeach; ?>
         </div>
     </div>
 </div>
 <?= $this->endSection(); ?>