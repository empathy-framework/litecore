<?php

namespace Empathy;

const CORE_DIR = __DIR__;

chdir (CORE_DIR);

if (file_exists ($app = dirname (__DIR__, 3) .'/app.php'))
	require $app;
