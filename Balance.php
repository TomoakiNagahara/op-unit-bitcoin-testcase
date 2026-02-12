<?php
/**	op-unit-bitcoin-testcase:/Balance.php
 *
 * @created    2026-01-25
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
OP()->Unit()->Form()->Config('Balance.form.php');
OP()->Unit()->Form()->Display('balance');
if( OP()->Unit()->Form()->isValidate() ){
	$wallet  = OP()->Unit()->Form()->GetValue('wallet');
	$balance = OP()->Unit()->Bitcoin()->Wallet()->Balance($wallet);
	OP()->Html("Balance: {$balance}");
}
