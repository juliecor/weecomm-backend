Hi <?php echo e(\Illuminate\Support\Str::of($offer->buyer_name)->before(' ')); ?>,

A reminder about your offer for <?php echo e($offer->unit->name); ?>, <?php echo e($offer->project->name); ?>. To keep your reservation moving, we still need:

<?php if($needsDetails): ?>
- Your details (the buyer information form)
<?php endif; ?>
<?php $__currentLoopData = $todo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
- <?php echo e($item['name']); ?><?php if($item['state'] === 'rejected'): ?> (please upload it again<?php echo e($item['note'] ? ': '.$item['note'] : ''); ?>)<?php endif; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php if($offer->expires_at): ?>
Your offer is open until <?php echo e($offer->expires_at->timezone('Asia/Manila')->format('F j, Y \a\t g:i A')); ?> (Philippine time). If you need more time, ask <?php echo e($offer->agent?->name ?? 'your agent'); ?>.

<?php endif; ?>
Complete my requirements: <?php echo e($url); ?>


<?php if($offer->isLocked()): ?>
This link opens your offer directly, with no username or password to type. It works for <?php echo e($days); ?> days; after that, use the login <?php echo e($offer->agent?->name ?? $offer->sellerName()); ?> gave you.

<?php endif; ?>
Take photos of your documents with your phone and upload them on the page.
<?php /**PATH /Users/juliecor/Documents/jvonline/weecomm/backend/resources/views/mail/requirements-reminder-text.blade.php ENDPATH**/ ?>