<?php
class UserTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('users')->delete();

        User::create(array(
            'id'        => 'admin',
            'fullname'  => 'Administrator',
            'password'  => Hash::make('password'),
            'Registrationnumber'     => '11/U/209923/EVE'
        ));
    }
}