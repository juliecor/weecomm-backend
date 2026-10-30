<?php echo e($applicant->name); ?> wants to join your team

An agent you invited has sent in their application to join <?php echo e($realty->name); ?>. They cannot sign in until you approve them.

Name: <?php echo e($applicant->name); ?>

Email: <?php echo e($applicant->email); ?>

Mobile: <?php echo e($applicant->phone ?? 'Not given'); ?>


Review the application: <?php echo e($reviewUrl); ?>


You can approve or reject them on the Agents page. They are told by email either way. Reply to this email to write to <?php echo e(\Illuminate\Support\Str::of($applicant->name)->before(' ')); ?> directly.

<?php echo e($brand['name']); ?>

<?php /**PATH /Users/juliecor/Documents/jvonline/weecomm/backend/resources/views/mail/agent-application-received-text.blade.php ENDPATH**/ ?>