<?php

namespace Empathy;

const CORE_DIR = __DIR__;

chdir (CORE_DIR);

if (file_exists ($app = '../../app/start.php'))
	require $app;
