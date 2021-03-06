<div class="container pt-5" style="min-height:600px">    
    <h4 class="text-center text-success font-weight-bold">Hasil Pencarian</h4>
    <h6 class="text-center text-info">Hasil pencarian : "<?=trim($this->input->get('keyword'))?>"</h6>
    <?php if(count($files)) : ?>
    <div class="d-flex flex-wrap">
        <?php foreach($files as $file): ?>
            <div class="card my-3 mx-3" style="width: 14rem;">
                <?php if(strlen($file->gambar_file)): ?>
                    <img src="<?=base_url()?>assets/images/upload/<?=$file->gambar_file?>" class="rounded float-left" width="100%" height="200px">
                <?php else: ?>
                    <img src="<?=base_url()?>assets/images/default/book.png" class="rounded float-left" width="100%" height="200px">
                <?php endif; ?>
                <div class="card-body">
                    <h6 class="font-weight-bold text-success">
                        <?=$file->judul?>
                    </h6>
                    <a href="<?=base_url()?>detail?id_file=<?=$file->id_file?>" class="btn btn-block bg-success text-light">Lihat</a>
                </div>
            </div>            
        <?php endforeach; ?>
    </div>

    <?php else : ?> 
    <h4 class="text-center text-info pt-5">Hasil pencarian tidak ditemukan</h4>
    <?php endif; ?>
</div>