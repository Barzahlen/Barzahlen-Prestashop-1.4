<?php
/**
 * Barzahlen Payment Module (PrestaShop)
 *
 * @copyright   Copyright (c) 2015 Cash Payment Solutions GmbH (https://www.barzahlen.de)
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
