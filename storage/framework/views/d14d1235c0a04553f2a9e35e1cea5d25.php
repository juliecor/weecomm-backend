
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['url', 'accent']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['url', 'accent']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<table role="presentation" cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse:separate;margin:28px auto;">
    <tr>
        <td align="center" bgcolor="<?php echo e($accent); ?>" style="background-color:<?php echo e($accent); ?>;border-radius:8px;">
            <a href="<?php echo e($url); ?>" target="_blank" style="display:inline-block;padding:16px 34px;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Helvetica,Arial,sans-serif;font-size:16px;line-height:20px;font-weight:700;letter-spacing:0.02em;color:#ffffff;text-decoration:none;border-radius:8px;"><?php echo e($slot); ?></a>
        </td>
    </tr>
</table>
<?php /**PATH /Users/juliecor/Documents/jvonline/weecomm/backend/resources/views/components/branded-mail/button.blade.php ENDPATH**/ ?>