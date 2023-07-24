<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $branches = [
            [
                "name" => "PLERED", "total_member" => 1923, "total_equity" => 8749266, 00, 'mum_profit' => 17855100, 00, "financier_profit" => 41661900, 00
            ],
            [
                "name" => "KARAWANG", "total_member" => 777, "total_equity" => 626848836, 00, 'mum_profit' => 2098800, 00, "financier_profit" => 4897200, 00
            ],
            [
                "name" => "SUBANG", "total_member" => 3885, "total_equity" => 1013880865, 00, 'mum_profit' => 41139000, 00, "financier_profit" => 95991000, 00
            ],
            [
                "name" => "INDRAMAYU", "total_member" => 1617, "total_equity" => -51392402, 00, 'mum_profit' => 18564660, 00, "financier_profit" => 43317540, 00
            ],
            [
                "name" => "JATIROGO", "total_member" => 831, "total_equity" => 29706983, 00, 'mum_profit' => 8349300, 00, "financier_profit" => 19481700, 00
            ],
            [
                "name" => "REMBANG", "total_member" => 1934, "total_equity" =>  1209955226, 00, 'mum_profit' => 37635750, 00, "financier_profit" => 87816750, 00
            ],
            [
                "name" => "BLORA", "total_member" => 61, "total_equity" => -64404748, 00, 'mum_profit' => 806400, 00, "financier_profit" => 1881600, 00
            ],
            [
                "name" => "KLATEN", "total_member" => 2023, "total_equity" => 168442347, 00, 'mum_profit' => 6550200, 00, "financier_profit" => 15283800, 00
            ],
            [
                "name" => "PATI", "total_member" => 1585, "total_equity" => 643218888, 00, 'mum_profit' => 23623800, 00, "financier_profit" => 55122200, 00
            ],
            [
                "name" => "BOYOLALI", "total_member" => 566, "total_equity" => 643218888, 00, 'mum_profit' => 3265200, 00, "financier_profit" => 7618800, 00
            ],
            [
                "name" => "PURBALINGGA", "total_member" => 260, "total_equity" => -70922312, 00, 'mum_profit' => 2244600, 00, "financier_profit" => 5237400, 00
            ],
        ];

        foreach ($branches as $branch) {
            Branch::create([
                'name' => $branch['name'],
                'total_member' => $branch['total_member'],
                'total_equity' => $branch['total_equity'],
                'mum_profit' => $branch['mum_profit'],
                'financier_profit' => $branch['financier_profit'],
            ]);
        }
    }
}
