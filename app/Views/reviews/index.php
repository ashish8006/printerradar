<?php include_once APPPATH . 'Views/admin_header.php'; ?>
<div class="container mt-3">
    <div class="card p-3">
        <div class="d-flex justify-content-between">
            <h1 class="mb-4">Reviews</h1>
            <div>
                <a href="<?= base_url('reviews/add'); ?>" class="btn btn-primary mb-3">Add New Review</a>
            </div>

        </div>
        <?php if (session()->getFlashdata('message')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('message'); ?>
            </div>
        <?php endif; ?>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Review</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($reviews as $key => $review): ?>
                        <tr>
                            <td><?= ++$key; ?></td>
                            <td><?= $review['name']; ?></td>
                            <td class="text-wrap"><?= $review['review']; ?></td>
                            <td>
                                <span class="badge <?= $review['status'] == 1 ? 'bg-success' : 'bg-danger'; ?>">
                                    <?= $review['status'] == 1 ? 'Active' : 'Inactive'; ?>
                                </span>
                            </td>
                            <td>
                                <a href="<?= base_url('reviews/edit/' . $review['id']); ?>"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <a href="<?= base_url('reviews/delete/' . $review['id']); ?>"
                                    class="btn btn-sm btn-danger">Delete</a>
                                <a href="<?= base_url('reviews/toggle-status/' . $review['id']); ?>"
                                    class="btn btn-sm <?= $review['status'] == 1 ? 'btn-secondary' : 'btn-success'; ?>">
                                    <?= $review['status'] == 1 ? 'Deactivate' : 'Activate'; ?>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include_once APPPATH . 'Views/admin_footer.php'; ?>