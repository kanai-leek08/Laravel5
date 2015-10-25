<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('members')->truncate();

		DB::table('members')->insert([
			[
				'name' => 'Tatsuya Yokoyama',
				'age' => '30',
				'gender' => 'man',
				'skill' => 'iOS',
				'detail' => 'hogehoge',
				'created_at' => '2015-01-01 00:00:00',
				'updated_at' => '2015-01-01 00:00:00',
			],
			[
				'name' => 'Nurupo Ohta',
				'age' => '23',
				'gender' => 'man',
				'skill' => 'iOS Android',
				'detail' => 'fugafuga',
				'created_at' => '2015-01-01 00:00:00',
				'updated_at' => '2015-01-01 00:00:00',
			],
			[
				'name' => 'Shinya Kotaki',
				'age' => '36',
				'gender' => 'man',
				'skill' => 'Scrum Master',
				'detail' => 'mogemoge',
				'created_at' => '2015-01-01 00:00:00',
				'updated_at' => '2015-01-01 00:00:00',
			],
			[
				'name' => 'Akira Furuya',
				'age' => '27',
				'gender' => 'man',
				'skill' => 'iOS Web',
				'detail' => 'piyopiyo',
				'created_at' => '2015-01-01 00:00:00',
				'updated_at' => '2015-01-01 00:00:00',
			],
			[
				'name' => 'Daiki Kanai',
				'age' => '25',
				'gender' => 'man',
				'skill' => 'Web',
				'detail' => 'magomago',
				'created_at' => '2015-01-01 00:00:00',
				'updated_at' => '2015-01-01 00:00:00',
			],
		]);
    }
}
