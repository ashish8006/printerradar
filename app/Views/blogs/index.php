<?php include_once APPPATH . 'Views/admin_header.php'; ?>

<div class="mt-2">
    <div class="card shadow border-0 rounded">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h4 fw-bold mb-0">Blogs Management</h1>
                <a href="<?= base_url('/admin/blogs/add'); ?>" 
                   class="btn btn-primary btn-sm d-flex align-items-center">
                    <i class="bi bi-plus-circle me-1"></i> <span>Add Blog</span>
                </a>
            </div>

            <?php if (session()->getFlashdata('message')): ?>
                <div class="alert alert-success d-flex align-items-center fw-semibold">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    <?= session()->getFlashdata('message'); ?>
                </div>
            <?php endif; ?>

            <div class="table-responsive shadow-sm rounded border">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-dark text-white small">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($blogs as $key => $blog): ?>
                            <tr>
                                <td class="fw-medium"><?= ++$key; ?></td>
                                <td><?= $blog['title']; ?></td>
                                <td>
                                    <?php if ($blog['image']): ?>
                                        <img src="<?= base_url('uploads/' . $blog['image']); ?>" 
                                             class="img-thumbnail rounded shadow-sm" 
                                             style="width: 50px; height: 50px; object-fit: cover;">
                                    <?php else: ?>
                                        <span class="text-muted fst-italic">No Image</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <span class="badge rounded-pill <?= $blog['status'] == 1 ? 'bg-success' : 'bg-danger'; ?>">
                                        <?= $blog['status'] == 1 ? 'Active' : 'Inactive'; ?>
                                    </span>
                                </td>
                                <td class="text-center">
                                    <a href="<?= base_url('admin/blogs/edit/' . $blog['id']); ?>" 
                                       class="btn btn-warning btn-sm me-1">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="<?= base_url('admin/blogs/delete/' . $blog['id']); ?>" 
                                       onclick="return confirm('Delete this blog?');" 
                                       class="btn btn-danger btn-sm me-1">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <a href="<?= base_url('admin/blogs/toggle-status/' . $blog['id']); ?>" 
                                       class="btn btn-sm <?= $blog['status'] == 1 ? 'btn-secondary' : 'btn-success'; ?>">
                                        <i class="bi <?= $blog['status'] == 1 ? 'bi-x-circle' : 'bi-check-circle'; ?>"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<?php include_once APPPATH . 'Views/admin_footer.php'; ?>
