<?php

namespace Naoray\LaravelPackageMaker\Commands\Database;

use Naoray\LaravelPackageMaker\Traits\HasNameAttribute;
use Naoray\LaravelPackageMaker\Traits\CreatesPackageStubs;
use Illuminate\Database\Console\Seeds\SeederMakeCommand as MakeSeeder;

class SeederMakeCommand extends MakeSeeder
{
	use CreatesPackageStubs, HasNameAttribute;

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'make:package:seeder';

	/**
	 * Get the destination class path.
	 *
	 * @return string
	 */
	protected function resolveDirectory()
	{
		return $this->getDirInput() . '/database/seeds/';
	}
}