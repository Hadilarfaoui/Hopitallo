<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9KVcFrY\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9KVcFrY/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9KVcFrY.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9KVcFrY\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container9KVcFrY\App_KernelDevDebugContainer([
    'container.build_hash' => '9KVcFrY',
    'container.build_id' => '9ec1c1fd',
    'container.build_time' => 1676234535,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9KVcFrY');
