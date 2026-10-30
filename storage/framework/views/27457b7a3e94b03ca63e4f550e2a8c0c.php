<?php if (isset($component)) { $__componentOriginald561909f42e9bca5743718b1c1481a43 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald561909f42e9bca5743718b1c1481a43 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.branded-mail.index','data' => ['brand' => $brand,'title' => 'Your application','ribbon' => 'Application update','preheader' => 'An update on your application to '.$realty->name.'.','footnote' => 'You are receiving this because you applied to join '.$realty->name.'.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('branded-mail'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['brand' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($brand),'title' => 'Your application','ribbon' => 'Application update','preheader' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('An update on your application to '.$realty->name.'.'),'footnote' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('You are receiving this because you applied to join '.$realty->name.'.')]); ?>
    <h1 class="heading" style="margin:0 0 20px;font-family:Georgia,'Times New Roman',serif;font-size:29px;line-height:36px;font-weight:700;color:#17150f;">About your application</h1>

    <p style="margin:0 0 16px;">Hello <?php echo e(\Illuminate\Support\Str::of($agent->name)->before(' ')); ?>,</p>
    <p style="margin:0 0 16px;">Thank you for applying to join <strong><?php echo e($realty->name); ?></strong>. After looking at your application, the team has decided not to approve it at this time, so your account stays closed and you cannot sign in.</p>
    <p style="margin:0 0 16px;">This is not a judgement of you. If you think it was a mistake, or you would like to know more, please get in touch with them directly. You can reply to this email<?php echo e($realty->email || $realty->phone ? ', or reach them here:' : '.'); ?></p>

    <?php if($realty->email || $realty->phone): ?>
        <?php if (isset($component)) { $__componentOriginal7781c94f55528918ed6cac62398a1fce = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7781c94f55528918ed6cac62398a1fce = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.branded-mail.box','data' => ['accent' => $brand['accent'],'title' => $realty->name]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('branded-mail.box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['accent' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($brand['accent']),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($realty->name)]); ?>
            <?php if($realty->email): ?>
                <div style="margin:0 0 4px;"><a href="mailto:<?php echo e($realty->email); ?>" style="color:<?php echo e($brand['accent']); ?>;"><?php echo e($realty->email); ?></a></div>
            <?php endif; ?>
            <?php if($realty->phone): ?>
                <div><?php echo e($realty->phone); ?></div>
            <?php endif; ?>
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
    <?php endif; ?>

    <p style="margin:0;font-size:14px;line-height:22px;color:#6b665d;">We wish you well.</p>
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
<?php /**PATH /Users/juliecor/Documents/jvonline/weecomm/backend/resources/views/mail/agent-rejected.blade.php ENDPATH**/ ?>