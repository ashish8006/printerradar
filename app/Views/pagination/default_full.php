
<style>
.custom-pagination a {
  display: inline-block;
  padding: 10px 20px;
  margin: 0 5px;
  background-color: #007bff; /* Default button background */
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
  border: 1px solid transparent;
}

.custom-pagination a:hover {
  background-color: #0056b3; /* Darker blue on hover */
}

.custom-pagination a.active {
  background-color: #28a745; /* Active page button */
  border-color: #28a745;
}

.custom-pagination a.disabled {
  background-color: #6c757d; /* Disabled button background */
  cursor: not-allowed;
}


</style>
<div class="custom-pagination">
    <?php if ($pager->hasPreviousPage()): ?>
        <a href="<?= $pager->getPreviousPage() ?>" class="btn">Previous</a>
    <?php endif ?>

    <?php foreach ($pager->links() as $link): ?>
        <a href="<?= $link['uri'] ?>" class="<?= $link['active'] ? 'active' : '' ?>">
            <?= $link['title'] ?>
        </a>
    <?php endforeach ?>

    <?php if ($pager->hasNextPage()): ?>
        <a href="<?= $pager->getNextPage() ?>" class="btn">Next</a>
    <?php endif ?>
</div>
