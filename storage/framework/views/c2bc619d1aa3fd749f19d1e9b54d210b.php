<?php
    $first = \Illuminate\Support\Str::of($offer->buyer_name)->before(' ');
    $count = count($todo) + ($needsDetails ? 1 : 0);
    $accent = $brand['accent'];
    $agent = $offer->agent?->name;
    $items = collect();
    if ($needsDetails) {
        $items->push(['name' => 'Your details', 'text' => 'The buyer information form: personal info, address, work and income. About 5 minutes.', 'fix' => false]);
    }
    foreach ($todo as $item) {
        $items->push([
            'name' => $item['name'],
            'text' => $item['state'] === 'rejected' ? 'Please upload it again.'.($item['note'] ? ' '.$item['note'] : '') : ($item['help'] ?: 'Upload a clear photo or PDF.'),
            'fix' => $item['state'] === 'rejected',
        ]);
    }
?>
<?php if (isset($component)) { $__componentOriginald561909f42e9bca5743718b1c1481a43 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald561909f42e9bca5743718b1c1481a43 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.branded-mail.index','data' => ['brand' => $brand,'title' => 'Your requirements','ribbon' => 'Requirements reminder','preheader' => $count.' item'.($count === 1 ? '' : 's').' left to keep your reservation of '.$offer->unit->name.' moving.','footnote' => ($agent ? $agent.' of ' : '').$offer->sellerName().' prepared a sales offer for you, so you are receiving this reminder.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('branded-mail'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['brand' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($brand),'title' => 'Your requirements','ribbon' => 'Requirements reminder','preheader' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($count.' item'.($count === 1 ? '' : 's').' left to keep your reservation of '.$offer->unit->name.' moving.'),'footnote' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(($agent ? $agent.' of ' : '').$offer->sellerName().' prepared a sales offer for you, so you are receiving this reminder.')]); ?>
    <h1 class="heading" style="margin:0 0 20px;font-family:Georgia,'Times New Roman',serif;font-size:29px;line-height:36px;font-weight:700;color:#17150f;">You're almost there, <?php echo e($first); ?></h1>

    <p style="margin:0 0 16px;">A quick reminder about your offer for <strong><?php echo e($offer->unit->name); ?>, <?php echo e($offer->project->name); ?></strong>. To keep your reservation moving, we still need <?php echo e($count === 1 ? 'one thing' : $count.' things'); ?> from you.</p>

    <?php if($offer->expires_at): ?>
        <p style="margin:0 0 16px;font-size:14px;line-height:22px;color:#6b665d;">Your offer is open until <strong style="color:#17150f;"><?php echo e($offer->expires_at->timezone('Asia/Manila')->format('F j, Y \a\t g:i A')); ?></strong> (Philippine time). If you need more time, just ask <?php echo e($agent ?? 'your agent'); ?>.</p>
    <?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal7781c94f55528918ed6cac62398a1fce = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7781c94f55528918ed6cac62398a1fce = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.branded-mail.box','data' => ['accent' => $accent,'title' => 'Still needed']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('branded-mail.box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['accent' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($accent),'title' => 'Still needed']); ?>
        <table role="presentation" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;width:100%;">
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td valign="top" width="40" style="padding:<?php echo e($loop->first ? '0' : '14px'); ?> 0 0;">
                        <table role="presentation" cellpadding="0" cellspacing="0" border="0" style="border-collapse:separate;"><tr>
                            <td align="center" width="28" height="28" bgcolor="<?php echo e($item['fix'] ? '#b4241c' : $accent); ?>" style="background-color:<?php echo e($item['fix'] ? '#b4241c' : $accent); ?>;border-radius:14px;color:#ffffff;font-size:13px;line-height:28px;font-weight:700;"><?php echo e($i + 1); ?></td>
                        </tr></table>
                    </td>
                    <td valign="top" style="padding:<?php echo e($loop->first ? '0' : '14px'); ?> 0 0;font-size:15px;line-height:22px;color:#3d3a34;">
                        <strong style="color:#17150f;"><?php echo e($item['name']); ?></strong><?php if($item['fix']): ?> <span style="font-size:11px;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:#b4241c;">&nbsp;Sent back</span><?php endif; ?><br>
                        <span style="color:#6b665d;font-size:14px;"><?php echo e($item['text']); ?></span>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.branded-mail.button','data' => ['url' => $url,'accent' => $accent]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('branded-mail.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($url),'accent' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($accent)]); ?>Complete my requirements <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9c88b7bc264433f6296574692541179f)): ?>
<?php $attributes = $__attributesOriginal9c88b7bc264433f6296574692541179f; ?>
<?php unset($__attributesOriginal9c88b7bc264433f6296574692541179f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9c88b7bc264433f6296574692541179f)): ?>
<?php $component = $__componentOriginal9c88b7bc264433f6296574692541179f; ?>
<?php unset($__componentOriginal9c88b7bc264433f6296574692541179f); ?>
<?php endif; ?>

    <?php if($offer->isLocked()): ?>
        <p style="margin:0 0 16px;font-size:14px;line-height:22px;color:#6b665d;text-align:center;">This button opens your offer directly, with no username or password to type. It works for <?php echo e($days); ?> days; after that, use the login <?php echo e($agent ?? $offer->sellerName()); ?> gave you.</p>
    <?php endif; ?>

    <p style="margin:0 0 8px;font-size:12px;line-height:16px;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;color:#6b665d;">Good to know</p>
    <ul style="margin:0 0 20px;padding:0 0 0 22px;">
        <li style="margin:0 0 6px;">Take photos of your documents with your phone and upload them on the page. Make sure every corner is visible.</li>
        <li style="margin:0;">Your files go only to <?php echo e($offer->realty->name); ?> and your agent, and are stored privately.</li>
    </ul>
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
<?php /**PATH /Users/juliecor/Documents/jvonline/weecomm/backend/resources/views/mail/requirements-reminder.blade.php ENDPATH**/ ?>