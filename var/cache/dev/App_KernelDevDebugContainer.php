<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPQ9rSPJ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPQ9rSPJ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPQ9rSPJ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPQ9rSPJ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPQ9rSPJ\App_KernelDevDebugContainer([
    'container.build_hash' => 'PQ9rSPJ',
    'container.build_id' => '9fc5a98e',
    'container.build_time' => 1581486928,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPQ9rSPJ');
