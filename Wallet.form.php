<?php
/**	op-unit-bitcoin-testcase:/Wallet.form.php
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
$form = [
	'name'  => 'wallet',
	'input' => [],
];

//	...
$form['input'][] = [
	'name' => 'name',
	'type' => 'text',
];

//	...
return $form;
