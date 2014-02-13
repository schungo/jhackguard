<?php
/**
 * @version     2.2.3
 * @package     com_jhackguard
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Valeri Markov <val@jhackguard.com> - http://www.jhackguard.com/
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Outputfilter controller class.
 */
class JhackguardControllerOutputfilter extends JControllerForm
{

    function __construct() {
        $this->view_list = 'outputfilters';
        parent::__construct();
    }

}