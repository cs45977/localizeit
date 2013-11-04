<?php
/**
 * File Name: 2013_11_02_0001_migration_create_copy_defualt_install.php
 * Path: vendor/scaveit/localizeit/migrations
 * Date Created: 11/02/2013
 * Original Author: Christian Serna <cs45977@gmail.com>
 * Description:  
 * 
 * 
 * Significant Changes (please indicate date and who made change):
 * 
 *   Licensed: 
 *   The MIT License (MIT)
 *   Copyright (c) 2013 Christian Serna
 * 
 * @package    localizeit
 * @version    0.0.1
 * @author     Scaveit LLC
 * @license    The MIT License
 * @copyright  (c) 2013 - 2014, Scaveit LLC
 * @link       http://Scaveit.com   
 */

use Illuminate\Database\Migrations\Migration;

class MigrationCreateCopyDefaultInstall extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('localizeit_copy_default', function($table)
		{
			$table->increments('id');
			$table->string('key');
            $table->text('value');
            $table->text('desc');
			$table->timestamps();
            $table->softDeletes();

			// We'll need to ensure that MySQL uses the InnoDB engine to
			// support the indexes, other engines aren't affected.
			$table->engine = 'InnoDB';
			$table->unique('key');
			$table->index('key');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('localizeit_copy_default');
	}

}
