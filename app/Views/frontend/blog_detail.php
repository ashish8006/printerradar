<?php 
include 'header.php'; 

?>

<style>
    .bg-light{
        background-color: #eef9ff !important;
    }
    a {
    color: #06A3DA;
    text-decoration: none;
}

.bg-header {
    background: linear-gradient(rgba(9, 30, 62, .7), rgba(9, 30, 62, .7)), url('<?php echo base_url('asset/images/carousel-1.jpg') ?>') center center no-repeat;
    background-size: cover;
    height: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>

<?php if (isset($blog)): ?>
    <div class="container-fluid bg-primary py-5 bg-header">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white animated zoomIn"><?= esc($blog['title']) ?></h1>
                <a href="<?= base_url('/') ?>" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="<?= base_url('buying-guides') ?>" class="h5 text-white">Buying Guides</a>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="mb-4">
                    <div class="d-flex justify-content-between mb-3">
                       <div>
                         <small class="me-3"><i class="far fa-user text-primary me-2"></i><?= esc($blog['author'] ?? 'Admin') ?></small>
                        <small><i class="far fa-calendar-alt text-primary me-2"></i><?= isset($blog['created_at']) ? date('d M, Y', strtotime($blog['created_at'])) : '' ?></small>
                    
                       </div>
                          <div>
                        <a href="<?= base_url('buying-guides') ?>" class="btn btn-outline-secondary">← Back to blogs</a>
                    </div>
                    
                    </div>
                    <?php if (!empty($blog['image'])): ?>
                        <img src="<?= base_url('uploads/'.$blog['image']) ?>" alt="<?= esc($blog['title']) ?>" class="img-fluid mb-4" style="width:100%; height:auto; object-fit:cover;">
                    <?php endif; ?>
                    <div class="blog-content">
                        <!-- description likely contains HTML saved from Summernote — render raw -->
                        <?= $blog['description'] ?>
                    </div>

                    <div class="mt-4">
                        <a href="<?= base_url('buying-guides') ?>" class="btn btn-outline-secondary">← Back to blogs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php else: ?>
    <div class="container py-5">
        <p>Blog not found.</p>
    </div>
<?php endif; ?>

<?php
 include 'footer.php'; 
 ?>
