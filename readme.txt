This repo uses git submodules to pull in the various parts of Flourish. To update all of the submodules, run the following:

php pull_submodules.php

After committing changes to one or more of the child repositories, run the following:

php push_submodules.php

If you are planning on doing development on Flourish, the generate process is:

1. Run: php pull_submodules.php
2. Edit class files in classes/ and commit
3. Edit tests in tests/ and commit
4. In build/, run: php queue_tests.php
5. Once tests succeed and you are ready for a release, tag classes/
6. Run: php push_submodules.php
