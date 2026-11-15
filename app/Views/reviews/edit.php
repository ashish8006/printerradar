<?php include_once APPPATH . 'Views/admin_header.php'; ?>
<div class="container mt-3">
    <div class="card p-4">
        <h1 class="mb-4">Edit Review</h1>

        <form method="post" action="<?= base_url('reviews/edit/' . $review['id']); ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $review['name']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="review" class="form-label">Review:</label>
                <textarea class="form-control" id="review" name="review" rows="4"
                    required><?= $review['review']; ?></textarea>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="created_at" class="form-label">Created At:</label>
                        <!-- Date and time picker -->
                        <input type="datetime-local" class="form-control" id="created_at" name="created_at"
                            value="<?= date('Y-m-d\TH:i', strtotime($review['created_at'])); ?>" required>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <a href="<?= base_url('reviews'); ?>" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
<?php include_once APPPATH . 'Views/admin_footer.php'; ?>