<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOI2QYTl\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOI2QYTl/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOI2QYTl.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOI2QYTl\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOI2QYTl\App_KernelDevDebugContainer([
    'container.build_hash' => 'OI2QYTl',
    'container.build_id' => 'b00071c6',
    'container.build_time' => 1617201284,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOI2QYTl');
