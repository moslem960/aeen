<?php /** @noinspection ALL */

use Illuminate\Database\Seeder;

class usertableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\products::class,5)->create()->each(function ($user){
            $user->products()->create(factory(\App\products::class)->make()->toArray()->categories()->attach([1,2]));
        });
    }
}
