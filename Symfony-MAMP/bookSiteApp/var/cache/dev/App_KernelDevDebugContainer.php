<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWcAn6gk\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWcAn6gk/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWcAn6gk.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWcAn6gk\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWcAn6gk\App_KernelDevDebugContainer([
    'container.build_hash' => 'WcAn6gk',
    'container.build_id' => '27955683',
    'container.build_time' => 1715856488,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWcAn6gk');
