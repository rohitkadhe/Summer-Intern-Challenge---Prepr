<?php

use Illuminate\Database\Seeder;
use App\Http\Model\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $handle = fopen(dirname(__FILE__).'\data\UsersSeed.csv', "r");

        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
          $num = count($data);
          $user = new User;
          $user->username = $data[0];
          $user->password = $data[1];
          $user->save();
        
        }
        fclose($handle);
    }
}
