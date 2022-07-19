<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Room;
use App\Models\Position;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Trong model User cos trait HasFactory,
        //có UserFactory đã định nghĩa từ dữ liệu mẫu
        //Model:factory(số dữ liệu mẫu) ->create();

       //Nếu đã chạy cho Room và User thì có thể comment vào để không chạy lần 2
        // Room::factory(10)->create();
        // User::factory(10)->create();
        Position::factory(10)->create();
     

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
