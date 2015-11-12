<?php
  use Cake\Core\Configure;

  $config = [
    'SassCompiler' => [
      'sourceFolder'      => 'sass',                      // Where to look for .scss files, (From the ROOT directory)
      'targetFolder'      => false,                       // Where to put the generated css (From the ROOT directory)
      'formatter'         => 'scss_formatter_compressed', // PHPSass compatible style (compressed or nested)
      'forceCompiling'    => false,                       // Always recompile
      'autoRun'           => false,                       // Check if compilation is necessary, this ignores the CakePHP Debug setting
      'import_paths'      => array()                      // Array of paths to search for scss files when using @import, path has to be relative to the sourceFolder
    ]
  ];
  return $config;