<?php

use Illuminate\Database\Seeder;
use App\Http\Model\Lab;

class LabsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $handle = fopen(dirname(__FILE__).'\data\LabsSeed.csv', "r");
        $count = 1;
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
          $num = count($data);
          $lab = new Lab;
          $lab->title = $data[0];
          $lab->description = "This is lab number: $count";
          $lab->image_url = $data[2];
          $lab->category = $data[3];
          $lab->location_id = $data[4];
          $lab->privacy = $data[5];
          $lab->save();
          $count++;
        }
        fclose($handle);
    }
}
