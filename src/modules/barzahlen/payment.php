<?php
/**
 * Barzahlen Payment Module (PrestaShop)
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@barzahlen.de so we can send you a copy immediately.
 *
 * @copyright   Copyright (c) 2012 Zerebro Internet GmbH (http://www.barzahlen.de)
 * @author      Alexander Diebler
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL-3.0)
 */

/* SSL Management */
$useSSL = true;

require_once dirname(__FILE__) . '/../../config/config.inc.php';
require_once dirname(__FILE__) . '/../../header.php';
require_once dirname(__FILE__) . '/barzahlen.php';

if (!$cookie->isLogged(true)) {
    Tools::redirect('authentication.php?back=order.php');
}

$barzahlen = new Barzahlen();
echo $barzahlen->execPayment($cart);

require_once dirname(__FILE__) . '/../../footer.php';
