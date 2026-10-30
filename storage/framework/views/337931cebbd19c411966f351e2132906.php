You're in, <?php echo e(\Illuminate\Support\Str::of($agent->name)->before(' ')); ?>


<?php echo e($realty->name); ?> has approved your application. Your account is open, and you can sign in now with the email and password you chose when you applied.

Sign-in page: <?php echo e($loginUrl); ?>

Username: <?php echo e($agent->email); ?>


What you can do
- Send buyers a sales offer with the price, payment schedule and your contact details.
- See when a buyer opens it, and get their answer by email.
- Find every project, unit and price list in one place, on your phone.

<?php echo e($brand['name']); ?>

<?php /**PATH /Users/juliecor/Documents/jvonline/weecomm/backend/resources/views/mail/agent-approved-text.blade.php ENDPATH**/ ?>