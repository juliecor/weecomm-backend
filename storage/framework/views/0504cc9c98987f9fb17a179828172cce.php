About your application

Hello <?php echo e(\Illuminate\Support\Str::of($agent->name)->before(' ')); ?>,

Thank you for applying to join <?php echo e($realty->name); ?>. After looking at your application, the team has decided not to approve it at this time, so your account stays closed and you cannot sign in.

This is not a judgement of you. If you think it was a mistake, or you would like to know more, please get in touch with them directly. You can reply to this email.
<?php if($realty->email || $realty->phone): ?>

<?php echo e($realty->name); ?>

<?php if($realty->email): ?>
<?php echo e($realty->email); ?>

<?php endif; ?>
<?php if($realty->phone): ?>
<?php echo e($realty->phone); ?>

<?php endif; ?>
<?php endif; ?>

We wish you well.

<?php echo e($brand['name']); ?>

<?php /**PATH /Users/juliecor/Documents/jvonline/weecomm/backend/resources/views/mail/agent-rejected-text.blade.php ENDPATH**/ ?>