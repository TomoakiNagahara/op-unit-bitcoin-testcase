<?php
/**	op-unit-bitcoin-testcase:/Balance.form.php
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
	'name'  => 'balance',
	'input' => [],
];

//	Wallet name
$form['input'][] = [
	'type' => 'text',
	'name' => 'wallet',
	'rule' => 'required',
];

//	...
return $form;
