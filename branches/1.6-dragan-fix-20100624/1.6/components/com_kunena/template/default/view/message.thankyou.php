<?php
/**
 * @version $Id$
 * Kunena Component
 * @package Kunena
 *
 * @Copyright (C) 2010 Kunena Team All rights reserved
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.com
 *
 **/

// Dont allow direct linking
defined ( '_JEXEC' ) or die ();

if(!empty($this->thankyou)):
?>
<div class="kmessage-thankyou">
<?php
	echo JText::_('COM_KUNENA_THANKYOU').': ';
	echo implode(', ', $this->escape($this->thankyou));
	if (count($this->thankyou) > 9) echo '...';
?>
</div>
<?php
	endif;
?>