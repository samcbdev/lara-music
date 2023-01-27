<script>
    <?php if($errors): ?>
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("<?php echo e($errors); ?>");
    <?php endif; ?>
</script><?php /**PATH E:\xampp8.1\htdocs\sam\kanban\LaraMusicAdmin\resources\views/common/toaster.blade.php ENDPATH**/ ?>