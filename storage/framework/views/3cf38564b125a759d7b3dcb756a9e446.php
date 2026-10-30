<?php if (isset($component)) { $__componentOriginald561909f42e9bca5743718b1c1481a43 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald561909f42e9bca5743718b1c1481a43 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.branded-mail.index','data' => ['brand' => $brand,'title' => 'New application','ribbon' => 'New application','preheader' => $applicant->name.' applied to join '.$realty->name.'. They can sign in once you approve them.','footnote' => 'You are receiving this because you are an admin of '.$realty->name.' on jvconline.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('branded-mail'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['brand' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($brand),'title' => 'New application','ribbon' => 'New application','preheader' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($applicant->name.' applied to join '.$realty->name.'. They can sign in once you approve them.'),'footnote' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('You are receiving this because you are an admin of '.$realty->name.' on jvconline.')]); ?>
    <h1 class="heading" style="margin:0 0 20px;font-family:Georgia,'Times New Roman',serif;font-size:29px;line-height:36px;font-weight:700;color:#17150f;"><?php echo e($applicant->name); ?> wants to join your team</h1>

    <p style="margin:0 0 16px;">An agent you invited has sent in their application to join <strong><?php echo e($realty->name); ?></strong>. They cannot sign in until you approve them.</p>

    <?php if (isset($component)) { $__componentOriginal7781c94f55528918ed6cac62398a1fce = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7781c94f55528918ed6cac62398a1fce = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.branded-mail.box','data' => ['accent' => $brand['accent'],'title' => 'The applicant']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('branded-mail.box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['accent' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($brand['accent']),'title' => 'The applicant']); ?>
        <table role="presentation" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;width:100%;">
            <tr>
                <td class="stack" style="padding:0 16px 6px 0;font-size:14px;line-height:22px;color:#6b665d;white-space:nowrap;" valign="top">Name</td>
                <td class="stack" style="padding:0 0 6px;font-size:15px;line-height:22px;color:#17150f;font-weight:600;"><?php echo e($applicant->name); ?></td>
            </tr>
            <tr>
                <td class="stack" style="padding:0 16px 6px 0;font-size:14px;line-height:22px;color:#6b665d;white-space:nowrap;" valign="top">Email</td>
                <td class="stack" style="padding:0 0 6px;font-size:15px;line-height:22px;color:#17150f;word-break:break-all;"><a href="mailto:<?php echo e($applicant->email); ?>" style="color:<?php echo e($brand['accent']); ?>;"><?php echo e($applicant->email); ?></a></td>
            </tr>
            <tr>
                <td class="stack" style="padding:0 16px 0 0;font-size:14px;line-height:22px;color:#6b665d;white-space:nowrap;" valign="top">Mobile</td>
                <td class="stack" style="padding:0;font-size:15px;line-height:22px;color:#17150f;"><?php echo e($applicant->phone ?? 'Not given'); ?></td>
            </tr>
        </table>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7781c94f55528918ed6cac62398a1fce)): ?>
<?php $attributes = $__attributesOriginal7781c94f55528918ed6cac62398a1fce; ?>
<?php unset($__attributesOriginal7781c94f55528918ed6cac62398a1fce); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7781c94f55528918ed6cac62398a1fce)): ?>
<?php $component = $__componentOriginal7781c94f55528918ed6cac62398a1fce; ?>
<?php unset($__componentOriginal7781c94f55528918ed6cac62398a1fce); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal9c88b7bc264433f6296574692541179f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9c88b7bc264433f6296574692541179f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.branded-mail.button','data' => ['url' => $reviewUrl,'accent' => $brand['accent']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('branded-mail.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($reviewUrl),'accent' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($brand['accent'])]); ?>Review the application <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9c88b7bc264433f6296574692541179f)): ?>
<?php $attributes = $__attributesOriginal9c88b7bc264433f6296574692541179f; ?>
<?php unset($__attributesOriginal9c88b7bc264433f6296574692541179f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9c88b7bc264433f6296574692541179f)): ?>
<?php $component = $__componentOriginal9c88b7bc264433f6296574692541179f; ?>
<?php unset($__componentOriginal9c88b7bc264433f6296574692541179f); ?>
<?php endif; ?>

    <p style="margin:0;font-size:14px;line-height:22px;color:#6b665d;">You can approve or reject them on the Agents page. They are told by email either way. Reply to this email to write to <?php echo e(\Illuminate\Support\Str::of($applicant->name)->before(' ')); ?> directly.</p>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald561909f42e9bca5743718b1c1481a43)): ?>
<?php $attributes = $__attributesOriginald561909f42e9bca5743718b1c1481a43; ?>
<?php unset($__attributesOriginald561909f42e9bca5743718b1c1481a43); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald561909f42e9bca5743718b1c1481a43)): ?>
<?php $component = $__componentOriginald561909f42e9bca5743718b1c1481a43; ?>
<?php unset($__componentOriginald561909f42e9bca5743718b1c1481a43); ?>
<?php endif; ?>
<?php /**PATH /Users/juliecor/Documents/jvonline/weecomm/backend/resources/views/mail/agent-application-received.blade.php ENDPATH**/ ?>