<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIyo2kTp\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIyo2kTp/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIyo2kTp.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIyo2kTp\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerIyo2kTp\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Iyo2kTp',
    'container.build_id' => '50a05032',
    'container.build_time' => 1638086296,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIyo2kTp');