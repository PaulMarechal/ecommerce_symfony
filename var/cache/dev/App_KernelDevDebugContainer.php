<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHfd0CIg\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHfd0CIg/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHfd0CIg.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHfd0CIg\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHfd0CIg\App_KernelDevDebugContainer([
    'container.build_hash' => 'Hfd0CIg',
    'container.build_id' => 'e77c8147',
    'container.build_time' => 1644180842,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHfd0CIg');
