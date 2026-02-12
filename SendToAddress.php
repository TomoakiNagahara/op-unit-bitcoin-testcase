<?php
/**	op-unit-bitcoin-testcase:/SendToAddress.php
 *
 * @created    2026-01-27
 * @license    Apache-2.0
 * @package    op-unit-bitcoin
 * @subpackage testcase
 * @copyright  Tomoaki Nagahara
 */

/**	Declare strict type
 *
 */
declare(strict_types=1);

/**	Namespace
 *
 */
namespace OP;

//	...
OP()->Unit()->Form()->Config('SendToAddress.form.php');
OP()->Unit()->Form()->Display('sendtoaddress');
if( OP()->Unit()->Form()->isValidate() ){
	$wallet     = OP()->Unit()->Form()->GetValue('wallet');
	$address    = OP()->Unit()->Form()->GetValue('address');
	$amount     = OP()->Unit()->Form()->GetValue('amount');
	$passphrase = OP()->Unit()->Form()->GetValue('passphrase');
	$txid       = OP()->Unit()->Bitcoin()->Send($wallet, $address, $amount, $passphrase);
	OP()->Html("Transaction ID: {$txid}");
}
