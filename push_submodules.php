<?php
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
	`git add $submodule`;
}

`git commit -m 'Added new submodule commits'`;
`git push origin master`;