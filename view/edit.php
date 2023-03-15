<form action="index.php" method="get">
    <input type="hidden" name="action" value="do_edit" />
    <div class="row justify-content-between text-white p-2">

        <div class="form-group flex-fill mb-2">
            <input id="todo-input" name="title" type="text" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mb-2 ml-2" name="payload" value="<?php echo $vars['item_id']; ?>">
            <?php echo LANG_UPDATE_ITEM; ?>
        </button>

    </div>
</form>