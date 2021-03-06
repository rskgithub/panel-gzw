<?php
/*Panel-GZW is a web hosting panel for Unix/Linux platforms.
Copyright (C) 2005 - 2011  GoldZone Web - gaetan.trellu@goldzoneweb.info

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

/**
 * Display the domain options.
 */
echo $this->element('domains');

?>

<div id="content">
	<div class="main">
		<div class="image"><?php echo $html->image('/dns/img/options/domain/add_domain_full.png', array('alt' => 'Domain')); ?></div>
		<div class="name"><?php __d('domain', 'Domain management.'); ?>
			<div class="infos">
				<?php __d('domain', 'This is a list of all the domains found on the service.<br />
							Once a deleted domain DNS propagation can take several hours to see several days of service providers.'
						);
				?>
			</div>
		</div>
		<div class="main_display">

			<?php
				/**
				 * Display messages.
				 */
				echo $session->flash();

				/**
				 * Create the "Domain" form.
				 */
				echo $form->create('Domain');

				/**
				 * This field is very important for an edit.
				 * He said which domain is edited.
				 */
				echo $form->input('Domain.id');
			?>

			<table>
				<tr>
					<td class="form_part1"><?php __d('domain', 'Users list'); ?></td>
					<td class="form_part2"><?php echo $form->input('Domain.user_id', array('label' => false)); ?></td>
				</tr>
				<tr>
					<td class="form_part1"><?php __d('domain', 'Domain name'); ?></td>
					<td class="form_part2"><?php echo $form->input('Domain.name', array('label' => false, 'size' => '31')); ?></td>
				</tr>
				<tr>
					<td class="form_part1"><?php __d('domain', 'Registrar name'); ?></td>
					<td class="form_part2"><?php echo $form->input('Domain.registrar', array('label' => false, 'size' => '31')); ?></td>
				</tr>
			</table>

			<?php echo $form->end(__d('domain', 'Edit the domain', true)); ?>

		</div>
	</div>
</div>