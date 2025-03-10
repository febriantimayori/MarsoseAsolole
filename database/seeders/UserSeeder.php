<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => '123',
                'password' => bcrypt('superadmin'),
                'id_level' => 1,
            ],
            [
                'username' => '234',
                'password' => bcrypt('admin1'),
                'id_level' => 2,
            ],
            [
                'username' => '345',
                'password' => bcrypt('admin2'),
                'id_level' => 3,
            ],
            [
                'username' => '456',
                'password' => bcrypt('admin3'),
                'id_level' => 4,
            ],
            [
                'username' => '567',
                'password' => bcrypt('admin4'),
                'id_level' => 5,
            ],
            [
                'username' => '678',
                'password' => bcrypt('admin5'),
                'id_level' => 6,
            ],
            [
                'username' => '789',
                'password' => bcrypt('warga'),
                'id_level' => 7,
            ],
            [
                'username' => '8901234567890123',
                'password' => bcrypt('8901234567890123'),
                'id_level' => 7,
            ],
            [
                'username' => '9012345678901234',
                'password' => bcrypt('9012345678901234'),
                'id_level' => 7,
            ],
            [
                'username' => '0123456789012345',
                'password' => bcrypt('0123456789012345'),
                'id_level' => 7,
            ],
            [
                'username' => '1234567890123465',
                'password' => bcrypt('1234567890123465'),
                'id_level' => 7,
            ],
            [
                'username' => '2345678901234576',
                'password' => bcrypt('2345678901234576'),
                'id_level' => 7,
            ],
            [
                'username' => '3456789012345687',
                'password' => bcrypt('3456789012345687'),
                'id_level' => 7,
            ],
            [
                'username' => '4567890123456798',
                'password' => bcrypt('4567890123456798'),
                'id_level' => 7,
            ],
            [
                'username' => '5678901234567809',
                'password' => bcrypt('5678901234567809'),
                'id_level' => 7,
            ],
            [
                'username' => '6789012345678910',
                'password' => bcrypt('6789012345678910'),
                'id_level' => 7,
            ],
            [
                'username' => '7890123456789021',
                'password' => bcrypt('7890123456789021'),
                'id_level' => 7,
            ],
            [
                'username' => '8901234567890132',
                'password' => bcrypt('8901234567890132'),
                'id_level' => 7,
            ],
            [
                'username' => '9012345678901243',
                'password' => bcrypt('9012345678901243'),
                'id_level' => 7,
            ],
            [
                'username' => '0123456789012354',
                'password' => bcrypt('0123456789012354'),
                'id_level' => 7,
            ],
            [
                'username' => '2345678901234687',
                'password' => bcrypt('2345678901234687'),
                'id_level' => 7,
            ],
            [
                'username' => '3456789012345798',
                'password' => bcrypt('3456789012345798'),
                'id_level' => 7,
            ],
            [
                'username' => '4567890123456809',
                'password' => bcrypt('4567890123456809'),
                'id_level' => 7,
            ],
            [
                'username' => '5678901234567910',
                'password' => bcrypt('5678901234567910'),
                'id_level' => 7,
            ],
            [
                'username' => '6789012345678021',
                'password' => bcrypt('6789012345678021'),
                'id_level' => 7,
            ],
            [
                'username' => '7890123456789132',
                'password' => bcrypt('7890123456789132'),
                'id_level' => 7,
            ],
            [
                'username' => '8901234567890243',
                'password' => bcrypt('8901234567890243'),
                'id_level' => 7,
            ],
            [
                'username' => '9012345678901354',
                'password' => bcrypt('9012345678901354'),
                'id_level' => 7,
            ],
            [
                'username' => '0123456789012465',
                'password' => bcrypt('0123456789012465'),
                'id_level' => 7,
            ],
            [
                'username' => '5432109876543210',
                'password' => bcrypt('5432109876543210'),
                'id_level' => 7,
            ],
            [
                'username' => '6543210987654321',
                'password' => bcrypt('6543210987654321'),
                'id_level' => 7,
            ],
            [
                'username' => '7654321098765432',
                'password' => bcrypt('7654321098765432'),
                'id_level' => 7,
            ],
            [
                'username' => '8765432109876543',
                'password' => bcrypt('8765432109876543'),
                'id_level' => 7,
            ],
            [
                'username' => '9876543210987654',
                'password' => bcrypt('9876543210987654'),
                'id_level' => 7,
            ],
        ];

        DB::table('user')->insert($users);
    }
}
