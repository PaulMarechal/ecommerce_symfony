<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDN0LPhn\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDN0LPhn/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDN0LPhn.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDN0LPhn\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDN0LPhn\App_KernelDevDebugContainer([
    'container.build_hash' => 'DN0LPhn',
    'container.build_id' => 'e8dd6d4c',
    'container.build_time' => 1646698073,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDN0LPhn');
