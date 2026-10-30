<?php if (isset($component)) { $__componentOriginald561909f42e9bca5743718b1c1481a43 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald561909f42e9bca5743718b1c1481a43 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.branded-mail.index','data' => ['brand' => $brand,'title' => 'You\'re accredited','ribbon' => 'Accreditation accepted','preheader' => 'Your username and temporary password are inside.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('branded-mail'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['brand' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($brand),'title' => 'You\'re accredited','ribbon' => 'Accreditation accepted','preheader' => 'Your username and temporary password are inside.']); ?>
    <h1 class="heading" style="margin:0 0 20px;font-family:Georgia,'Times New Roman',serif;font-size:29px;line-height:36px;font-weight:700;color:#17150f;">Welcome aboard, <?php echo e(\Illuminate\Support\Str::of($admin->name)->before(' ')); ?></h1>

    <p style="margin:0 0 16px;"><strong><?php echo e($brand['name']); ?></strong> has accepted the accreditation of <strong><?php echo e($realty->name); ?></strong>. Your realty now has its own dashboard on jvconline.</p>

    <?php if (isset($component)) { $__componentOriginal7781c94f55528918ed6cac62398a1fce = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7781c94f55528918ed6cac62398a1fce = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.branded-mail.box','data' => ['accent' => $brand['accent'],'title' => 'Your login']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('branded-mail.box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['accent' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($brand['accent']),'title' => 'Your login']); ?>
        <table role="presentation" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;width:100%;">
            <tr>
                <td class="stack" style="padding:0 16px 8px 0;font-size:14px;line-height:22px;color:#6b665d;white-space:nowrap;" valign="top">Sign-in page</td>
                <td class="stack" style="padding:0 0 8px;font-size:15px;line-height:22px;color:#17150f;word-break:break-all;"><a href="<?php echo e($loginUrl); ?>" style="color:<?php echo e($brand['accent']); ?>;"><?php echo e(preg_replace('#^https?://#', '', $loginUrl)); ?></a></td>
            </tr>
            <tr>
                <td class="stack" style="padding:0 16px 8px 0;font-size:14px;line-height:22px;color:#6b665d;white-space:nowrap;" valign="top">Username</td>
                <td class="stack" style="padding:0 0 8px;font-size:15px;line-height:22px;color:#17150f;font-weight:600;word-break:break-all;"><?php echo e($admin->email); ?></td>
            </tr>
            <tr>
                <td class="stack" style="padding:0 16px 0 0;font-size:14px;line-height:22px;color:#6b665d;white-space:nowrap;" valign="top">Temporary password</td>
                <td class="stack" style="padding:0;font-size:17px;line-height:22px;color:#17150f;font-weight:700;font-family:'SFMono-Regular',Menlo,Consolas,monospace;letter-spacing:0.04em;"><?php echo e($temporaryPassword); ?></td>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.branded-mail.button','data' => ['url' => $loginUrl,'accent' => $brand['accent']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('branded-mail.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($loginUrl),'accent' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($brand['accent'])]); ?>Sign in to your dashboard <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9c88b7bc264433f6296574692541179f)): ?>
<?php $attributes = $__attributesOriginal9c88b7bc264433f6296574692541179f; ?>
<?php unset($__attributesOriginal9c88b7bc264433f6296574692541179f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9c88b7bc264433f6296574692541179f)): ?>
<?php $component = $__componentOriginal9c88b7bc264433f6296574692541179f; ?>
<?php unset($__componentOriginal9c88b7bc264433f6296574692541179f); ?>
<?php endif; ?>

    <p style="margin:0 0 20px;"><strong>You will be asked to choose your own password the first time you sign in.</strong> Until then, keep this email to yourself: anyone who has it can sign in as you.</p>

    <p style="margin:0 0 8px;font-size:12px;line-height:16px;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;color:#6b665d;">What happens next</p>
    <ol style="margin:0;padding:0 0 0 22px;">
        <li style="margin:0 0 6px;">Sign in and choose a new password.</li>
        <li style="margin:0 0 6px;">Invite your agents from <strong>Agents</strong> in your dashboard.</li>
        <li style="margin:0;">Your agents can then prepare sales offers on <?php echo e($brand['name']); ?> projects and units.</li>
    </ol>
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
<?php /**PATH /Users/juliecor/Documents/jvonline/weecomm/backend/resources/views/mail/accreditation-approved.blade.php ENDPATH**/ ?>