<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYLku4zP\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYLku4zP/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYLku4zP.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYLku4zP\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYLku4zP\App_KernelDevDebugContainer([
    'container.build_hash' => 'YLku4zP',
    'container.build_id' => 'cd12e6d1',
    'container.build_time' => 1643963516,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYLku4zP');