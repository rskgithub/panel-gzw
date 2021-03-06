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
 * Display the sql options.
 */
echo $this->element('sql');

?>

<div id="content">
	<div class="main">
		<div class="image"><?php echo $html->image('/sql/img/options/sqlusers/add_sql_user_full.png', array('alt' => 'AddSQLUser')); ?></div>
		<div class="name"><?php __d('sql', 'SQL user management.'); ?>
			<div class="infos">
				<?php __d('sql', 'To take advantage of MySQL support a user must be created.<br />
									The following informations will be requested during the installation of a forum, a blog, etc. ... for example.'
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
				 * Create the "Sqluser" form.
				 */
				echo $form->create('Sqluser');

				/**
				 * This field is very important for an edit.
				 * He said which sqluser is edited.
				 */
				echo $form->input('Sqluser.id');
				
				/**
				 * Create a hidden form field, this one contain the user ID.
				 */
				echo $form->hidden('Sqluser.user_id', array('value' => $session->read('Auth.User.id')));
			?>
		
			<table>
				<tr>
					<td class="form_part1"><?php __d('sql', 'SQL user name'); ?></td>
					<td class="form_part2"><?php echo $form->input('Sqluser.name', array('value' => $nameEdit['0'], 'label' => false, 'size' => '31', 'after' => '<span class="highlight" style="font-family: monospace;">@' . $session->read('Auth.User.name').'</span>')); ?></td>
				</tr> 
				<tr>
					<td class="form_part1"><?php __d('sql', 'Select the SQL engine'); ?></td>
					<td class="form_part2"><?php echo $form->input('Sqluser.type', array('options' => array('mysql' => __d('sql', 'MySQL', true)), 'label' => false)); ?></td>
				</tr>
			</table>
			
			<?php echo $form->end(__d('sql', 'Edit the SQL user', true)); ?>
			
			<div class="advice">
				<?php echo $html->image('/img/main/advice.png', array('alt' => 'Advice')); ?>
				<?php __d('sql', 'All special characters will be replaced by their equivalents for the "SQL user name" field (é by e, à by a, space by _, etc...).'); ?>
			</div>
			
		</div>
	</div>
</div>