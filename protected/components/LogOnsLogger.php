<?php

// custom Logger to File. Log successfull logins onto a file on /runtime/logons.log
//


class LogOnsLogger extends CFileLogRoute
{

	public function init()
	{
		parent::init();
		parent::setLogFile('logOns.log');
	}

}
