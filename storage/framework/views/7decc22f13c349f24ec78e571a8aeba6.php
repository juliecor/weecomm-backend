Welcome aboard, <?php echo e(\Illuminate\Support\Str::of($admin->name)->before(' ')); ?>


<?php echo e($brand['name']); ?> has accepted the accreditation of <?php echo e($realty->name); ?>. Your realty now has its own dashboard on jvconline.

Your login
Sign-in page: <?php echo e($loginUrl); ?>

Username: <?php echo e($admin->email); ?>

Temporary password: <?php echo e($temporaryPassword); ?>


You will be asked to choose your own password the first time you sign in. Until then, keep this email to yourself: anyone who has it can sign in as you.

What happens next
1. Sign in and choose a new password.
2. Invite your agents from Agents in your dashboard.
3. Your agents can then prepare sales offers on <?php echo e($brand['name']); ?> projects and units.

<?php echo e($brand['name']); ?>

<?php /**PATH /Users/juliecor/Documents/jvonline/weecomm/backend/resources/views/mail/accreditation-approved-text.blade.php ENDPATH**/ ?>