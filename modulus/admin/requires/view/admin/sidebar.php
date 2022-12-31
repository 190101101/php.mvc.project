<div class="col-lg-3 mb-4">
    <div class="list-group mb-3">
        <a <?php if(segment(2) != 'admin'): ?> href="/panel/admin" <?php endif; ?> class="list-group-item
        <?php echo segment(2) != 'admin' ?: 'active'; ?>">panel</a>
    </div>

    <?php if(isset($data->page)): ?>
    <div class="list-group mb-3">
        <a class="list-group-item">data <?php echo $data->page->count; ?></a>
        <a class="list-group-item">page <?php echo $data->page->length; ?></a>
    </div>
    <?php endif; ?>

    <?php if(isset($data->search)): ?>
    <div class="list-group mb-3">
        <a class="list-group-item">key: <?php echo $data->search->key; ?></a>
        <a class="list-group-item">value: <?php echo $data->search->value; ?></a>
    </div>
    <?php endif; ?>
</div>
