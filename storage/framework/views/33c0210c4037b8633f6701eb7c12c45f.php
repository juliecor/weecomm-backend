
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['brand', 'title', 'ribbon' => null, 'preheader' => null, 'footnote' => null]));

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

foreach (array_filter((['brand', 'title', 'ribbon' => null, 'preheader' => null, 'footnote' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<?php
    $accent = $brand['accent'];
    $sans = "-apple-system,BlinkMacSystemFont,'Segoe UI',Helvetica,Arial,sans-serif";
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <meta name="color-scheme" content="light only">
    <meta name="supported-color-schemes" content="light only">
    <title><?php echo e($title); ?></title>
    <style>
        @media only screen and (max-width: 620px) {
            .card { border-radius: 0 !important; border-left: 0 !important; border-right: 0 !important; }
            .pad { padding-left: 22px !important; padding-right: 22px !important; }
            .logo { width: 150px !important; }
            .heading { font-size: 25px !important; line-height: 31px !important; }
            .stack { display: block !important; width: 100% !important; }
        }
    </style>
</head>
<body style="margin:0;padding:0;background-color:#f1efea;">
<?php if($preheader): ?>
    
    <div style="display:none;font-size:1px;line-height:1px;max-height:0;max-width:0;opacity:0;overflow:hidden;mso-hide:all;"><?php echo e($preheader); ?>&#8199;&zwnj;&#8199;&zwnj;&#8199;&zwnj;&#8199;&zwnj;&#8199;&zwnj;</div>
<?php endif; ?>
<table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;background-color:#f1efea;">
    <tr>
        <td align="center" style="padding:32px 16px;">
            <table role="presentation" class="card" width="600" cellpadding="0" cellspacing="0" border="0" style="border-collapse:separate;width:100%;max-width:600px;background-color:#ffffff;border:1px solid #e6e2db;border-radius:20px;overflow:hidden;box-shadow:0 18px 48px rgba(23,21,15,0.10);">

                
                <tr>
                    <td align="center" style="background-color:#ffffff;padding:38px 32px 30px;">
                        <?php if($brand['logo']): ?>
                            <img class="logo" src="<?php echo e($brand['logo']); ?>" alt="<?php echo e($brand['name']); ?>" width="190" style="display:block;border:0;outline:none;text-decoration:none;width:190px;max-width:100%;height:auto;">
                        <?php else: ?>
                            <span style="font-family:Georgia,'Times New Roman',serif;font-size:24px;line-height:30px;font-weight:700;color:<?php echo e($accent); ?>;"><?php echo e($brand['name']); ?></span>
                        <?php endif; ?>
                    </td>
                </tr>

                
                <?php if($ribbon): ?>
                    <tr>
                        <td align="center" bgcolor="<?php echo e($accent); ?>" style="background-color:<?php echo e($accent); ?>;padding:14px 24px;">
                            <span style="font-family:<?php echo e($sans); ?>;font-size:13px;line-height:18px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase;color:#ffffff;"><?php echo e($ribbon); ?></span>
                        </td>
                    </tr>
                <?php endif; ?>

                
                <tr>
                    <td class="pad" style="padding:40px 44px 38px;font-family:<?php echo e($sans); ?>;font-size:16px;line-height:26px;color:#3d3a34;">
                        <?php echo e($slot); ?>

                    </td>
                </tr>

                
                <tr>
                    <td class="pad" align="center" style="background-color:#faf8f5;border-top:1px solid #e6e2db;padding:26px 44px;font-family:<?php echo e($sans); ?>;font-size:12px;line-height:19px;color:#8a847a;">
                        <strong style="color:#5a554d;"><?php echo e($brand['name']); ?></strong><br>
                        <a href="<?php echo e($brand['site']); ?>" style="color:<?php echo e($accent); ?>;text-decoration:none;"><?php echo e(preg_replace('#^https?://#', '', $brand['site'])); ?></a>
                    </td>
                </tr>
            </table>

            <table role="presentation" width="600" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;width:100%;max-width:600px;">
                <tr>
                    <td align="center" style="padding:18px 24px 0;font-family:<?php echo e($sans); ?>;font-size:11px;line-height:17px;color:#a39d92;">
                        <?php echo e($footnote ?? 'You are receiving this because of your accreditation with '.$brand['name'].'.'); ?> Please do not forward this email.
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
<?php /**PATH /Users/juliecor/Documents/jvonline/weecomm/backend/resources/views/components/branded-mail/index.blade.php ENDPATH**/ ?>