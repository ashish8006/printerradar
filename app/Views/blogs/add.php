<?php include_once APPPATH . 'Views/admin_header.php'; ?>

<div class="mt-2">
    <div class="card shadow-lg border-0 rounded-3">
        <div class="card-body p-4">
            
            <!-- Title -->
            <h3 class="mb-4 fw-bold text-primary">
                <?= isset($blog) ? '✏️ Edit Blog' : '➕ Add Blog'; ?>
            </h3>

            <form method="post" enctype="multipart/form-data"
                action="<?= isset($blog) ? base_url('admin/blogs/edit/' . $blog['id']) : base_url('admin/blogs/store'); ?>">

                <!-- Meta Title -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Meta Title</label>
                    <textarea name="meta_title" rows="2" class="form-control" 
                        placeholder="Enter SEO meta title" required><?= isset($blog) ? esc($blog['meta_title']) : ''; ?></textarea>
                </div>

                <!-- Meta Description -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Meta Description</label>
                    <textarea name="meta_description" rows="4" class="form-control" 
                        placeholder="Enter SEO meta description" required><?= isset($blog) ? esc($blog['meta_description']) : ''; ?></textarea>
                </div>

                <!-- Title -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Title</label>
                    <textarea name="title" rows="2" class="form-control" 
                        placeholder="Enter blog title" required><?= isset($blog) ? esc($blog['title']) : ''; ?></textarea>
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Description</label>
                    <textarea id="editor" name="description" rows="10" class="form-control" 
                        placeholder="Write blog content here..." required><?= isset($blog) ? esc($blog['description']) : ''; ?></textarea>
                </div>

                <!-- Image Upload -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Upload Image</label>
                    <input type="file" name="image" accept="image/*" class="form-control">
                    <?php if (isset($blog) && $blog['image']): ?>
                        <div class="mt-3">
                            <img src="<?= base_url('writable/uploads/' . $blog['image']); ?>" 
                                 class="img-thumbnail rounded" style="height:80px; width:80px; object-fit:cover;">
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between mt-4">
                    <a href="<?= base_url('admin/blogs'); ?>" class="btn btn-secondary">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <?= isset($blog) ? 'Update Blog ✨' : 'Add Blog 🚀'; ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once APPPATH . 'Views/admin_footer.php'; ?>
