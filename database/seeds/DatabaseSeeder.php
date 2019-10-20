<?php

use App\Category;
use App\Country;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $categories =[
            [
                'name' => 'Fires'
            ],
            [
                'name' => 'Landslides'
            ],
            [
                'name' => 'Earthquakes'
            ],
            [
                'name' => 'Hurricanes'
            ],
            [
                'name' => 'Nuclear Radiation'
            ],
            [
                'name' => 'Toxic Waste'
            ],
        ];
        
        $countries = [
            [
                'name' => 'Iran',
                'date' => '2013-10-08T07:00:00.000Z',
                'hazard_type' => 'Landslide',
                'trigger' => 'Rain',
                'fatalities' => '6',
                'injuries' => '5',
                'size' => 'Medium',
                'population' => '1200000',
                'latitude' => '35.2555',
                'longitude' => '59.211',
                'depth' => '',
                'magnitude' => '',
                'minimum_distance' => '',
                'azimuthal_gap' => '',
                'origin_time' => '',
                'confidence' => '',
                'text' => '',
                'wattage' => '',
                'category_id' => '2'
        
            ],
            [
                'name' => 'Oman',
                'date' => '2013-06-08T07:00:00.000Z',
                'hazard_type' => 'Landslide',
                'trigger' => 'Rain',
                'fatalities' => '0',
                'injuries' => '0',
                'size' => 'medium',
                'population' => '101640',
                'latitude' => '23.2693',
                'longitude' => '56.4742',
                'depth' => '',
                'magnitude' => '',
                'minimum_distance' => '',
                'azimuthal_gap' => '',
                'origin_time' => '',
                'confidence' => '',
                'text' => '',
                'wattage' => '',
                'category_id' => '2'
            ],
            [
                'name' => 'Philippines',
                'date' => '2019-10-16 11:37:06.046 UTC',
                'hazard_type' => '',
                'trigger' => '',
                'fatalities' => '',
                'injuries' => '',
                'size' => '',
                'population' => '',
                'latitude' => '13.500479',
                'longitude' => '123.431396',
                'depth' => '14.1 km',
                'magnitude' => '6.1 mww',
                'minimum_distance' => '74.7 km ( 0.67° )',
                'azimuthal_gap' => '33°',
                'origin_time' => '',
                'confidence' => '',
                'text' => '',
                'wattage' => '',
                'category_id' => '3'
        
            ],
            [
                'name' => 'Pondaguitan',
                'date' => '2019-09-29 02:02:52.085 UTC',
                'hazard_type' => '',
                'trigger' => '',
                'fatalities' => '',
                'injuries' => '',
                'size' => '',
                'population' => '',
                'latitude' => '6.357560',
                'longitude' => '126.174180',
                'depth' => '76.2 km',
                'magnitude' => '6.2 mww',
                'minimum_distance' => '186.6 km ( 1.68° )',
                'azimuthal_gap' => '25°',
                'origin_time' => '',
                'confidence' => '',
                'text' => '',
                'wattage' => '',
                'category_id' => '3'
        
            ],
            [
                'name' => 'Africa',
                'date' => '2018-01-28 16:03:03.970 UTC',
                'hazard_type' => '',
                'trigger' => '',
                'fatalities' => '',
                'injuries' => '',
                'size' => '',
                'population' => '',
                'latitude' => '-10.800933',
                'longitude' => '39.287109',
                'depth' => '10 km',
                'magnitude' => '6.5 mww',
                'minimum_distance' => '2167.9 km ( 19.48° )',
                'azimuthal_gap' => 'azimuthal_gap: 27°',
                'origin_time' => '',
                'confidence' => '',
                'text' => '',
                'wattage' => '',
                'category_id' => '3'
        
            ],
            [   
                'name' => 'Indonesia',
                'date' => '2019-09-25 23:46:43.029 UTC',
                'hazard_type' => '',
                'trigger' => '',
                'fatalities' => '',
                'injuries' => '',
                'size' => 'medium',
                'population' => '',
                'latitude' => '0.355680',
                'longitude' => '117.180176',
                'depth' => '9 km',
                'magnitude' => '5.8 mww',
                'minimum_distance' => '2167.9 km ( 19.48° )',
                'azimuthal_gap' => '15°',
                'origin_time' => '',
                'confidence' => '',
                'text' => '',
                'wattage' => '',
                'category_id' => '3'
        
            ],
            [
                'name' => 'Sudan',
                'date' => '',
                'hazard_type' => '',
                'trigger' => '',
                'fatalities' => '',
                'injuries' => '',
                'size' => '',
                'population' => '',
                'latitude' => '13.340184',
                'longitude' => '31.453857',
                'depth' => '',
                'magnitude' => '',
                'minimum_distance' => '',
                'azimuthal_gap' => '',
                'origin_time' => '',
                'confidence' => '92%',
                'text' => 'Somewhere within 1 km of this location has been identified as "hot" by satellite sensors. 
                This could be a wildfire and this system is monitored by firefighting agencies for early warning.',
                'wattage' => '65.90 MegaWatts',
                'category_id' => '1'
        
            ],
            [
                'name' => 'Iran',
                'date' => '2013-10-08T07:00:00.000Z',
                'hazard_type' => 'Landslide',
                'trigger' => 'Rain',
                'fatalities' => '6',
                'injuries' => '5',
                'size' => 'medium',
                'population' => '1200000',
                'latitude' => '34.046970',
                'longitude' => '50.701904',
                'depth' => '',
                'magnitude' => '',
                'minimum_distance' => '',
                'azimuthal_gap' => '',
                'origin_time' => '',
                'confidence' => '63%',
                'text' => 'Somewhere within 1 km of this location has been identified as "hot" by satellite sensors. 
                This could be a wildfire and this system is monitored by firefighting agencies for early warning.',
                'wattage' => '65.90 MegaWatts',
                'category_id' => '1'
        
            ],
            [
                'name' => 'Tanzania',
                'date' => '',
                'hazard_type' => '',
                'trigger' => '',
                'fatalities' => '',
                'injuries' => '',
                'size' => '',
                'population' => '',
                'latitude' => '-4.973296',
                'longitude' => '37.573242',
                'depth' => '',
                'magnitude' => '',
                'minimum_distance' => '',
                'azimuthal_gap' => '',
                'origin_time' => '',
                'confidence' => '72%',
                'text' => 'Somewhere within 1 km of this location has been identified as "hot" by satellite sensors. 
                This could be a wildfire and this system is monitored by firefighting agencies for early warning.',
                'wattage' => '46.10 MegaWatts',
                'category_id' => '1'
        
            ],
            [
                'name' => 'Angola',
                'date' => '',
                'hazard_type' => '',
                'trigger' => '',
                'fatalities' => '',
                'injuries' => '',
                'size' => '',
                'population' => '',
                'latitude' => '-8.129929',
                'longitude' => '14.150391',
                'depth' => '',
                'magnitude' => '',
                'minimum_distance' => '',
                'azimuthal_gap' => '',
                'origin_time' => '',
                'confidence' => '61%',
                'text' => 'Somewhere within 1 km of this location has been identified as "hot" by satellite sensors. 
                This could be a wildfire and this system is monitored by firefighting agencies for early warning.',
                'wattage' => '24.50 MegaWatts',
                'category_id' => '1'
        
            ]
        
            ];
        
        Category::insert($categories);
        Country::insert($countries);
    }
}
