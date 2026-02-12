<?php
/**	op-unit-bitcoin-testcase:/Address.form.php
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
	'name'  => 'address',
	'input' => [],
];

//	Wallet name.
$form['input'][] = [
	'type' => 'text',
	'name' => 'wallet',
	'rule' => 'required',
	'error' => [
		'required' => 'In which wallet do you want to create the address?',
	],
];

//	Label to attach to the address.
$form['input'][] = [
	'type' => 'text',
	'name' => 'label',
	'rule' => 'required',
	'error' => [
		'required' => 'Enter a label for the address.',
	],
];

//	...
return $form;
