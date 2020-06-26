<?php
/**
 * Front to the baebom application. This file doesn't do anything, but loads
 * master.php which does and tells Apache to load the default search page.
 */
/** Loads the baebom's Search Environment */
require( dirname("system/engines/root_search/master") . '/master.php' );