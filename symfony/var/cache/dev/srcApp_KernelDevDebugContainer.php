<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDKXCnrh\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDKXCnrh/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDKXCnrh.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDKXCnrh\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerDKXCnrh\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'DKXCnrh',
    'container.build_id' => '7fdf771c',
    'container.build_time' => 1559724811,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDKXCnrh');
