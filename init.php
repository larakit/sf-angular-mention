<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-mention')
    ->setSourceDir('public')
    ->usePackage('larakit/sf-angular')
    ->ngModule('ui.mention')
    ->jsPackage('mention.js');
