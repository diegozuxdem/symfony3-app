<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGtx2ggh\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGtx2ggh/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerGtx2ggh.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerGtx2ggh\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerGtx2ggh\appProdProjectContainer(array(
    'container.build_hash' => 'Gtx2ggh',
    'container.build_id' => 'f0720d76',
    'container.build_time' => 1523228361,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerGtx2ggh');