<?php include_once APPPATH . 'Views/admin_header.php'; ?>

<div class="mt-2">
    <div class="card shadow-lg border-0 rounded-3">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0 text-white fw-bold">
                <i class="bi <?= isset($blog) ? 'bi-pencil-square' : 'bi-plus-circle'; ?> me-2"></i>
                <?= isset($blog) ? 'Edit Blog' : 'Add Blog'; ?>
            </h4>
        </div>
        <div class="card-body p-4">

            <form method="post" enctype="multipart/form-data"
                  action="<?= isset($blog) ? base_url('admin/blogs/edit/' . $blog['id']) : base_url('admin/blogs/store'); ?>">

                <!-- Meta Title -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Meta Title</label>
                    <textarea name="meta_title" rows="2" class="form-control" placeholder="Enter SEO meta title" required><?= isset($blog) ? esc($blog['meta_title']) : ''; ?></textarea>
                </div>

                <!-- Meta Description -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Meta Description</label>
                    <textarea name="meta_description" rows="3" class="form-control" placeholder="Enter SEO meta description" required><?= isset($blog) ? esc($blog['meta_description']) : ''; ?></textarea>
                </div>

                <!-- Title -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Title</label>
                    <textarea name="title" rows="2" class="form-control" placeholder="Enter blog title" required><?= isset($blog) ? esc($blog['title']) : ''; ?></textarea>
                </div>

                <!-- Description with Summernote -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Description</label>
                    <textarea id="editor" name="description" class="form-control" required><?= isset($blog) ? esc($blog['description']) : ''; ?></textarea>
                </div>

                <!-- Image Upload -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">Upload Image</label>
                    <input type="file" name="image" accept="image/*" class="form-control">
                    <?php if (isset($blog) && $blog['image']): ?>
                        <div class="mt-3">
                            <img src="<?= base_url('uploads/' . $blog['image']); ?>" 
                                 class="img-thumbnail rounded shadow-sm" style="width: 100px; height: 100px; object-fit: cover;">
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between">
                    <a href="<?= base_url('admin/blogs'); ?>" class="btn btn-outline-secondary px-4">
                        <i class="bi bi-arrow-left-circle me-1"></i> Cancel
                    </a>
                    <button type="submit" class="btn btn-success px-4">
                        <i class="bi <?= isset($blog) ? 'bi-check-circle' : 'bi-plus-circle'; ?> me-1"></i>
                        <?= isset($blog) ? 'Update Blog' : 'Add Blog'; ?>
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- Bootstrap CSS -->


<?php include_once APPPATH . 'Views/admin_footer.php'; ?>
