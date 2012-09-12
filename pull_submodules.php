<?php
`git submodule init`;
`git submodule update`;

`git --work-tree=./build --git-dir=./build/.git checkout master`;
`git --work-tree=./classes --git-dir=./classes/.git checkout master`;
`git --work-tree=./discussion --git-dir=./discussion/.git checkout master`;
`git --work-tree=./docs --git-dir=./docs/.git checkout master`;
`git --work-tree=./flourishlib.com --git-dir=./flourishlib.com/.git checkout master`;
`git --work-tree=./phpdoc --git-dir=./phpdoc/.git checkout master`;
`git --work-tree=./site --git-dir=./site/.git checkout master`;
`git --work-tree=./tests --git-dir=./tests/.git checkout master`;
`git --work-tree=./tests-results --git-dir=./tests-results/.git checkout master`;
`git --work-tree=./wiki-engine --git-dir=./wiki-engine/.git checkout master`;

