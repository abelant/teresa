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
                'name' => 'Floods'
            ],
            [
                'name' => 'Earthquakes'
            ],
            [
                'name' => 'Hurricanes'
            ]
        ];
        
        $countries = [
            [
                'name' => 'Republic of Congo',
                'about' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'what' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'how' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'lat' => '4.0383',
                'lng' => '21.7587',
                'category_id' => '1'
        
            ],
            [
                'name' => 'Zambia',
                'about' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'what' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'how' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'lat' => '13.1339',
                'lng' => '27.8493',
                'category_id' => '1'
        
            ],
            [
                'name' => 'Angola',
                'about' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'what' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'how' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'lat' => '11.2027',
                'lng' => '17.8739',
                'category_id' => '1'
        
            ],
            [
                'name' => 'Zimbabwe',
                'about' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'what' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'how' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'lat' => '19.0154',
                'lng' => '29.1549',
                'category_id' => '1'
        
            ],
            [
                'name' => 'Uruguay',
                'about' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'what' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'how' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'lat' => '32.5228',
                'lng' => '55.7658',
                'category_id' => '2'
        
            ],
            [   
                'name' => 'Paraguay',
                'about' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'what' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'how' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'lat' => '23.4425',
                'lng' => '58.4438',
                'category_id' => '2'
        
            ],
            [
                'name' => 'South Sumatra',
                'about' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'what' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'how' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'lat' => '3.3194',
                'lng' => '103.9144',
                'category_id' => '3'
        
            ],
            [
                'name' => 'Burkina Faso',
                'about' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'what' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'how' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'lat' => '12.2383',
                'lng' => '1.5616',
                'category_id' => '3'
        
            ],
            [
                'name' => 'Papau New Guinea',
                'about' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'what' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'how' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'lat' => '6.3150',
                'lng' => '143.9555',
                'category_id' => '3'
        
            ],
            [
                'name' => 'Iran Yaja',
                'about' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'what' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'how' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  here, content here',
                'lat' => '1.3361',
                'lng' => '133.1747',
                'category_id' => '3'
        
            ]
        
            ];
        
        

        Category::insert($categories);
        Country::insert($countries);
    }
}
