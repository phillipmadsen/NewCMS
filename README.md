# NewCMS
mynewone



php artisan vendor:publish
php artisan infyom.publish:api


php artisan infyom.publish:templates




php artisan mitul.generator:scaffold_api Profile --fieldsFile="database/fields/profile.json"

php artisan mitul.generator:scaffold_api Product --fieldsFile="database/fields/product.json"


 

php artisan make:migration CreateProductCategoryTable
php artisan make:migration CreateAccountTable
php artisan make:migration CreateOrderItemTable
php artisan make:migration CreateOrderTable
php artisan make:migration CreateProductTable
 


php artisan infyom.publish:auth












layouts/
    - master.blade.php
    - [...]
frontend/
        - pages/
            - content.blade.php
secure/
        - pages/
            - content.blade.php
backend/
        - pages/
            - content.blade.php
developer/
        - pages/
            - content.blade.php


factory(App\Models\Product::class, 10)->create();
        factory(App\User::class, 10)->create();
        factory(App\Profile::class, 10)->create();


$user = new App\User;

        factory(App\Models\User::class, 10)->create();
        factory(App\Profile::class, 10)->create();















This command generates all basic views like,
http://labs.infyom.com/laravelgenerator/docs/advanced/publish-auth
|- views
    |- layouts
        |- app.blade.php
    |- emails
        |- password.blade.php
    |- auth
        |- login.blade.php
        |- register.blade.php
        |- reset.blade.php
        |- password.blade.php


Route::group(['prefix' => 'auth'], function () { Route::get('login', 'Auth\AuthController@getLogin'); Route::post('login', 'Auth\AuthController@postLogin'); Route::get('logout', 'Auth\AuthController@getLogout');

// Registration Routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');
});

// Password Reset Routes... Route::get('password/reset', 'Auth\PasswordController@getEmail'); Route::post('password/email', 'Auth\PasswordController@postEmail'); Route::get('password/reset/{token}', 'Auth\PasswordController@getReset'); Route::post('password/reset', 'Auth\PasswordController@postReset');

 




























$factory->define(App\Models\Profile::class, function (Faker\Generator $faker) {
$users = App\Models\User::lists('id');
$user_id = $faker->randomElement($users);
    return [
        'id' => DB::table('profiles'
        'user_id' => $user->id,
        'display_name' => $faker->firstname . " " . $faker->lastname,
        'website' => $faker->url,
        'company' => $faker->company,
        'pic' => $faker->imageUrl(600, 600, 'people', true, 'Faker'),
        'gender' => $faker->shuffle('Male, Female'),
            
        'date_of_birth' => $faker->date($format = 'm-d-Y', $max = 'now'),
        'dob_month' => $faker->numberBetween($min = 1, $max = 12),
        'dob_day' => $faker->numberBetween($min = 1, $max = 30),
        'dob_year' => $faker->numberBetween($min = 1980, $max = 2016),
        'about_me' => $faker->bs,
        'uuid' => $faker->uuid,
        'facebook_username' => $faker->username,
        'twitter_username' => $faker->username,
        'instagram_username' => $faker->username,
         'githubid' => $faker->username,
         'skypeid' => $faker->username,
        'linked_in_url' => $faker->url,
        'googleplus_url' => $faker->url,
        'facebook_url' => $faker->url,
        'user_api_key' => str_random(32),
        'user_api_secret' => str_random(64),
        'user_activation_key' => str_random(128),
        'phone' => $faker->phoneNumber,
        'phone_type' => 'Home',
        'slug' => $faker->slug,
                'position' => 'employee',
        'activated' => $faker->boolean($chanceOfGettingTrue = 50),
        'profile_activated_on' => $faker->dateTimeBetween($startDate = '-3 years', $endDate = 'now'),
        'published' => $faker->boolean($chanceOfGettingTrue = 50),
        'activation_code' => str_random(15),
        'slug' => $faker->slug,
    
        'is_fake' => $faker->boolean($chanceOfGettingTrue = 100),
        'created_at' => Carbon\Carbon::now(),
        'updated_at' => Carbon\Carbon::now(),
    ];
});
