<?php
`git submodule init`;
`git submodule update`;

$submodules = array(
	'build',
	'classes',
	'discussion',
	'docs',
	'flourishlib.com',
	'phpdoc',
	'site',
	'tests',
	'tests-results',
	'wiki-engine'
);
foreach ($submodules as $submodule) {
	chdir($submodule);
	`git checkout master`;
	`git pull origin master`;
	chdir('..');
}