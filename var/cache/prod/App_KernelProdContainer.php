<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYuZZNyW\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYuZZNyW/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerYuZZNyW.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerYuZZNyW\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerYuZZNyW\App_KernelProdContainer([
    'container.build_hash' => 'YuZZNyW',
    'container.build_id' => 'ad3fd6b3',
    'container.build_time' => 1646746857,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYuZZNyW');
