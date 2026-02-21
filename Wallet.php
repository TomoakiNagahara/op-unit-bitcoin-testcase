<?php
/**	op-unit-bitcoin-testcase:/Wallet.php
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
OP()->Html('Create new wallet','h1');
OP()->Unit()->Form()->Config('Wallet.form.php');
if( OP()->Unit()->Form()->isValidate() ){
	$name = OP()->Unit()->Form()->GetValue('name');
	OP()->Unit()->Form()->Clear();

	//	Create new wallet
	OP()->Unit()->Bitcoin()->Wallet()->Create($name);
}
OP()->Unit()->Form()->Display();

?>
<h1>Already loaded wallets</h1>
<ol>
	<?php foreach( OP()->Unit()->Bitcoin()->Wallet()->Loaded() as $name ): ?>
	<li><?= $name ?></li>
	<?php endforeach; ?>
</ol>

<hr/>

<h1>Already created wallet names</h1>
<ol>
	<?php foreach( OP()->Unit()->Bitcoin()->Wallet()->List() as $name ): ?>
	<li><?= $name ?></li>
	<?php endforeach; ?>
</ol>
