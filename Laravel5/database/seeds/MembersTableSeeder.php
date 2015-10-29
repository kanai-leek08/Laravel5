<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Models\Member;


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

		//テストデータ自動作成クラス Fakerを利用
		$faker = Faker::create('ja_JP');
		$gender = ['男', '女'];
		$skill = ['iOS', 'Android', 'Web'];

		for ($i = 0; $i < 10; $i++) {
		    Member::create([
    		    'name' => $faker->name,
    		    'age' => $faker->regexify('[0-9]{2}'),
    		    'gender' => $faker->randomElement($gender),
    		    'skill' => $faker->randomElement($skill),
    		    'detail' => $faker->paragraph(),
    		    'created_at' => Carbon::today(),
    		    'updated_at' => Carbon::today()
		    ]);
		}
    }
}
