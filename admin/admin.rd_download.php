<?php
/**
 * RD DOWNLOAD
 * @author Robert Deutz (email contact@rdbs.net / site www.rdbs.de)
 * @author Pascal Lohmann 
 * @version $Id: admin.rd_download.php 1 2010-01-23 16:43:49Z deutz $
 * @package RD_DOWNLOAD
 * @copyright Copyright (C) 2008 Robert Deutz Business Solution
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 **/
 
// no direct access
defined('_JEXEC') or die('Restricted access');

$controllerName = JRequest::getVar( 'view', 'download' );

switch ($controllerName)
{
	case 'download':
		require_once( dirname(__FILE__).DS.'controllers'.DS.$controllerName.'.php' );
		// Erzeugen eines Objekts der Klasse controller
		$classname	= 'RdDownloadController'.ucfirst($controllerName);
		$controller = new $classname( );
		
		// den request task ausleben
		$controller->execute(JRequest::getCmd('task'));
		
		// Redirect aus dem controller
		$controller->redirect();
		break;
}
