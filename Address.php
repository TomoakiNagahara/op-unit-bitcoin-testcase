<?php
/**	op-unit-bitcoin-testcase:/Address.php
 *
 * @created    2026-01-26
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
OP()->Html('Get address with label','h1');

//	...
$form = OP()->Unit()->Form();
$form->Config('Address.form.php');
if( $isValid = $form->isValidate('address') ){
	$wallet  = $form->GetValue('wallet');
	$label   = $form->GetValue('label');
}
$form->Display('address');

//	...
if( $isValid ){
	if( $address = OP()->Unit()->Bitcoin()->Address()->Get( $wallet, $label ) ){
		OP()->Html("Wallet is {$wallet}, {$label}: {$address}");
	}else{
		OP()->Html('Get bitcoin address is failed.','.error');
	}
}
