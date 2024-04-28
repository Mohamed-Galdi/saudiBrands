<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;
use Faker\Factory as Faker;


class brandOwnersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'SEASON DEGREE | سيزون ديقري',
            '1886 Fashion | 1886 فاشن',
            'LILEA | ِلِيليا',
            'THE POP UP |  ذا بوب أب',
            'eleven | إليڤين',
            'Mindmade | مايند مايد',
            'chkn | شكن',
            'ulb | الب',
            'tiko | تكو',
            'WBJ | واقيو',
            'Sign | ساين',
            'FOIL | فويل',
            'MOV | موف',
            'LADN | لدن',
            'WHJ | وهج',
            'MLT | ملت',
            'ASHJAR | اشجار',
            'HINTIA | حنطية',
            'Ibrahim ALqurashi | ابراهيم القرشي',
            'Abdulsamad ALqurashi | عبد الصمد القرشي',
            'ALmajed oud | الماجد للعود',
            'Assaf | عساف',
            'Surge | سيرج',
            'Miskh | مسكة للعطور',
        ];

        foreach ($names as $name) {
            $nameParts = explode('|', $name);
            $englishName = $nameParts[0];
            $arabicName = $nameParts[1];

            // Generate Arabic name for user
            $faker = Faker::create('ar_SA');
            $userName = $faker->name;


            // Extract English name for address
            $cleanBrandName = preg_replace('/[^\w\s-]/u', '', $englishName);
            $address = 'www.' . strtolower(str_replace(' ', '', $cleanBrandName)) . '.com';

            // Map types
            $types = [
                'clothes' => ['SEASON DEGREE ', '1886 Fashion ', 'LILEA ', 'THE POP UP ', 'eleven ', 'Mindmade '],
                'restaurant' => ['chkn ', 'ulb ', 'tiko ', 'WBJ ', 'Sign ', 'FOIL '],
                'cafe' => ['MOV ', 'LADN ', 'WHJ ', 'MLT ', 'ASHJAR ', 'HINTIA '],
                'perfume' => ['Ibrahim ALqurashi ', 'Abdulsamad ALqurashi ', 'ALmajed oud ', 'Assaf ', 'Surge ', 'Miskh '],
            ];

            $type = '';
            foreach ($types as $key => $typeList) {
                if (in_array($englishName, $typeList)) {
                    $type = $key;
                    break;
                }
            }

            // Create user
            $user = User::create([
                'name' => $userName,
                'email' => $faker->email(), // You may adjust email generation as needed
                'password' => Hash::make('password'), // You may adjust password generation as needed
                'role' => 'brand',
            ]);

            // Create brand
            $brand = new Brand();
            $brand->owner_id = $user->id;
            $brand->name = $name;
            $brand->type = $type;
            $brand->address = $address;

            $cleanImageName = preg_replace('/[^\w\s-]/u', '', $englishName);
            $image_name = str_replace(" ", "_", $cleanImageName) .  '.jpg';
            $image = 'brandsImages/' . $image_name; // Assuming images are stored in public/brandsImages directory
            $brand->logo = $image;

            $brand->save();
        }
    }
}
