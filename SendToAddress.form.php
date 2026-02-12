<?php
/**	op-unit-bitcoin-testcase:/SendToAddress.form.php
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

//	Form
$form = [
	'name'  => 'sendtoaddress',
	'input' => [],
];

//	Wallet name
$form['input'][] = [
	'label'=> 'Send from wallet',
	'type' => 'text',
	'name' => 'wallet',
	'rule' => 'required',
];

//	Address name
$form['input'][] = [
	'label'=> 'Send to address',
	'type' => 'text',
	'name' => 'address',
	'rule' => 'required',
];

//	Amount
$form['input'][] = [
	'type' => 'text',
	'name' => 'amount',
	'rule' => 'required',
];

//	Passphrase
$form['input'][] = [
	'type' => 'password',
	'name' => 'passphrase',
	'rule' => '',
];

//	...
return $form;
