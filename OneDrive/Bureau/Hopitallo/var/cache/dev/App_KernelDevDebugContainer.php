<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4mvCJlx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4mvCJlx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4mvCJlx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4mvCJlx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container4mvCJlx\App_KernelDevDebugContainer([
    'container.build_hash' => '4mvCJlx',
    'container.build_id' => 'a44caacd',
    'container.build_time' => 1676808704,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4mvCJlx');
