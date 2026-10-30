<?php if (isset($component)) { $__componentOriginald561909f42e9bca5743718b1c1481a43 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald561909f42e9bca5743718b1c1481a43 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.branded-mail.index','data' => ['brand' => $brand,'title' => 'Realty accreditation','ribbon' => 'Realty accreditation','preheader' => 'You are invited to get accredited with '.$brand['name'].'. The form takes about 10 minutes.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('branded-mail'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['brand' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($brand),'title' => 'Realty accreditation','ribbon' => 'Realty accreditation','preheader' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('You are invited to get accredited with '.$brand['name'].'. The form takes about 10 minutes.')]); ?>
    <h1 class="heading" style="margin:0 0 20px;font-family:Georgia,'Times New Roman',serif;font-size:29px;line-height:36px;font-weight:700;color:#17150f;">You're invited to become an accredited realty</h1>

    <p style="margin:0 0 16px;">Hello,</p>
    <p style="margin:0 0 16px;"><strong><?php echo e($brand['name']); ?></strong> has invited your realty to be accredited. Once you are, your agents can sell our projects and units through their own dashboard on jvconline.</p>
    <p style="margin:0 0 4px;">Open the form, tell us about your realty and attach your registration documents. It takes about 10 minutes.</p>

    <?php if (isset($component)) { $__componentOriginal9c88b7bc264433f6296574692541179f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9c88b7bc264433f6296574692541179f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.branded-mail.button','data' => ['url' => $url,'accent' => $brand['accent']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('branded-mail.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($url),'accent' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($brand['accent'])]); ?>Open the accreditation form <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9c88b7bc264433f6296574692541179f)): ?>
<?php $attributes = $__attributesOriginal9c88b7bc264433f6296574692541179f; ?>
<?php unset($__attributesOriginal9c88b7bc264433f6296574692541179f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9c88b7bc264433f6296574692541179f)): ?>
<?php $component = $__componentOriginal9c88b7bc264433f6296574692541179f; ?>
<?php unset($__componentOriginal9c88b7bc264433f6296574692541179f); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal7781c94f55528918ed6cac62398a1fce = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7781c94f55528918ed6cac62398a1fce = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.branded-mail.box','data' => ['accent' => $brand['accent'],'title' => 'Have these ready']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('branded-mail.box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['accent' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($brand['accent']),'title' => 'Have these ready']); ?>
        <ul style="margin:0;padding:0 0 0 20px;">
            <li style="margin:0 0 6px;">Your SEC registration, or DTI registration if you are a sole proprietor</li>
            <li style="margin:0 0 6px;">A board or partnership resolution naming your representative (corporations)</li>
            <li style="margin:0 0 6px;">Your tax identification numbers, and your PRC registration</li>
            <li style="margin:0;">Your HLURB registration, if you have one</li>
        </ul>
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

    <p style="margin:0 0 12px;font-size:14px;line-height:22px;color:#6b665d;">This link works until <strong><?php echo e($expiresAt->timezone('Asia/Manila')->format('F j, Y')); ?></strong> and can be used once. If it has expired, ask <?php echo e($brand['name']); ?> to send it again.</p>
    <p style="margin:0;font-size:13px;line-height:20px;color:#8a847a;">If the button doesn't open, copy this address into your browser:<br><a href="<?php echo e($url); ?>" style="color:<?php echo e($brand['accent']); ?>;word-break:break-all;"><?php echo e($url); ?></a></p>
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
<?php /**PATH /Users/juliecor/Documents/jvonline/weecomm/backend/resources/views/mail/accreditation-invite.blade.php ENDPATH**/ ?>