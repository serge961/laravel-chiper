<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['chirp']));

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

foreach (array_filter((['chirp']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="card bg-base-100 shadow">
    <div class="card-body">
        <div class="flex space-x-3">
            <?php if($chirp->user): ?>
                <div class="avatar">
                    <div class="size-10 rounded-full">
                        <img src="<https://avatars.laravel.cloud/><?php echo e(urlencode($chirp->user->email)); ?>"
                            alt="<?php echo e($chirp->user->name); ?>'s avatar" class="rounded-full" />
                    </div>
                </div>
            <?php else: ?>
                <div class="avatar placeholder">
                    <div class="size-10 rounded-full">
                        <img src="<https://avatars.laravel.cloud/f61123d5-0b27-434c-a4ae-c653c7fc9ed6?vibe=stealth>"
                            alt="Anonymous User" class="rounded-full" />
                    </div>
                </div>
            <?php endif; ?>

            <div class="min-w-0 flex-1">
                <div class="flex justify-between w-full">
                    <div class="flex items-center gap-1">
                        <span class="text-sm font-semibold"><?php echo e($chirp->user ? $chirp->user->name : 'Anonymous'); ?></span>
                        <span class="text-base-content/60">·</span>
                        <span class="text-sm text-base-content/60"><?php echo e($chirp->created_at->diffForHumans()); ?></span>
                        <?php if($chirp->updated_at->gt($chirp->created_at->addSeconds(5))): ?>
                            <span class="text-base-content/60">·</span>
                            <span class="text-sm text-base-content/60 italic">edited</span>
                        <?php endif; ?>
                    </div>

                    <div class="flex gap-1">
                        <a href="/chirps/<?php echo e($chirp->id); ?>/edit" class="btn btn-ghost btn-xs">
                            Edit
                        </a>
                        <form method="POST" action="/chirps/<?php echo e($chirp->id); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit"
                                onclick="return confirm('Are you sure you want to delete this chirp?')"
                                class="btn btn-ghost btn-xs text-error">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
                <p class="mt-1"><?php echo e($chirp->message); ?></p>
            </div>
        </div>
    </div>
</div>
<?php /**PATH N:\Docker\docker-lamp\docker-compose-lamp\www\chirper\resources\views/components/chirp.blade.php ENDPATH**/ ?>