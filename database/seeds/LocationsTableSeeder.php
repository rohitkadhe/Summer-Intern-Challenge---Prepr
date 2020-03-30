<?php

use Illuminate\Database\Seeder;
use App\Http\Model\Location;
class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $handle = fopen(dirname(__FILE__).'\data\LocationsSeed.csv', "r");

        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
          $num = count($data);
          $location = new Location;
          $location->country = $data[0];
          $location->city = $data[1];
          $location->address = $data[2];
          $location->latitude = $data[3];
          $location->longitude = $data[4];
          $location->save();
        
        }
        fclose($handle);
    }
}
