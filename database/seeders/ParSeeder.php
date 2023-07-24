<?php

namespace Database\Seeders;

use App\Models\Par;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParSeeder extends Seeder
{
    /**
     * Run the database seeds
     *
     * @return void
     */
    public function run()
    {
        $array = array(
            array("description" => "PINJAMAN LANCAR", "outstanding" => 233030000, 00, "member" =>  126, "par" => 0, "branch_id" => "1"),
            array("description" => "TERTUNGGAK 1 - 30 HARI", "outstanding" => 803110000, 00, "member" =>  407, "par" => 0, "branch_id" => "1"),
            array("description" => "TERTUNGGAK 31 - 60 HARI", "outstanding" => 374580000, 00, "member" =>  166, "par" => 13, 93, "branch_id" => "1"),
            array("description" => "TERTUNGGAK 61 - 90 HARI", "outstanding" => 177740000, 00, "member" =>  71, "par" => 6, 61, "branch_id" => "1"),
            array("description" => "TERTUNGGAK 91 - 120 HARI", "outstanding" => 231000000, 00, "member" =>  88, "par" => 8, 59, "branch_id" => "1"),
            array("description" => "TERTUNGGAK > 120 HARI", "outstanding" => 869300000, 00, "member" =>  336, "par" => 32, 33, "branch_id" => "1"),
            array("description" => "PINJAMAN LANCAR", "outstanding" => 84960000, 00, "member" =>  43, "par" => 0, "branch_id" => "2"),
            array("description" => "TERTUNGGAK 1 - 30 HARI", "outstanding" => 62060000, 00, "member" =>  28, "par" => 0, "branch_id" => "2"),
            array("description" => "TERTUNGGAK 31 - 60 HARI", "outstanding" => 20040000, 00, "member" =>  9, "par" => 2, "branch_id" => "2"),
            array("description" => "TERTUNGGAK 61 - 90 HARI", "outstanding" => 13470000, 00, "member" =>  6, "par" => 1, "branch_id" => "2"),
            array("description" => "TERTUNGGAK 91 - 120 HARI", "outstanding" => 21540000, 00, "member" =>  6, "par" => 2, "branch_id" => "2"),
            array("description" => "TERTUNGGAK > 120 HARI", "outstanding" => 943390000, 00, "member" =>  568, "par" => 82, "branch_id" => "2"),
            array("description" => "PINJAMAN LANCAR", "outstanding" => 1261250000, 00, "member" =>  585, "par" => 0, "branch_id" => "3"),
            array("description" => "TERTUNGGAK 1 - 30 HARI", "outstanding" => 1564490000, 00, "member" =>  989, "par" => 0, "branch_id" => "3"),
            array("description" => "TERTUNGGAK 31 - 60 HARI", "outstanding" => 246740000, 00, "member" =>  185, "par" => 5, 53, "branch_id" => "3"),
            array("description" => "TERTUNGGAK 61 - 90 HARI", "outstanding" => 59000000, 00, "member" =>  62, "par" => 1, 32, "branch_id" => "3"),
            array("description" => "TERTUNGGAK 91 - 120 HARI", "outstanding" => 110200000, 00, "member" =>  74, "par" => 2, 47, "branch_id" => "3"),
            array("description" => "TERTUNGGAK > 120 HARI", "outstanding" => 1221260000, 00, "member" =>  901, "par" => 27, 36, "branch_id" => "3"),
            array("description" => "PINJAMAN LANCAR", "outstanding" => 807074000, 00, "member" =>  389, "par" => 0, "branch_id" => "4"),
            array("description" => "TERTUNGGAK 1 - 30 HARI", "outstanding" => 369120000, 00, "member" =>  180, "par" => 0, "branch_id" => "4"),
            array("description" => "TERTUNGGAK 31 - 60 HARI", "outstanding" => 122390000, 00, "member" =>  63, "par" => 4, 59, "branch_id" => "4"),
            array("description" => "TERTUNGGAK 61 - 90 HARI", "outstanding" => 64870000, 00, "member" =>  36, "par" => 2, 43, "branch_id" => "4"),
            array("description" => "TERTUNGGAK 91 - 120 HARI", "outstanding" => 118640000, 00, "member" =>  55, "par" => 4, 45, "branch_id" => "4"),
            array("description" => "TERTUNGGAK > 120 HARI", "outstanding" => 1182005000, 00, "member" =>  694, "par" => 44, 37, "branch_id" => "4"),
            array("description" => "PINJAMAN LANCAR", "outstanding" => 441500000, 00, "member" =>  238, "par" => 0, "branch_id" => "5"),
            array("description" => "TERTUNGGAK 1 - 30 HARI", "outstanding" => 300750000, 00, "member" =>  203, "par" => 0, "branch_id" => "5"),
            array("description" => "TERTUNGGAK 31 - 60 HARI", "outstanding" => 39650000, 00, "member" =>  24, "par" => 3, 67, "branch_id" => "5"),
            array("description" => "TERTUNGGAK 61 - 90 HARI", "outstanding" => 3510000, 00, "member" =>  5, "par" => 0, 33, "branch_id" => "5"),
            array("description" => "TERTUNGGAK 91 - 120 HARI", "outstanding" => 8700000, 00, "member" =>  13, "par" => 0, 81, "branch_id" => "5"),
            array("description" => "TERTUNGGAK > 120 HARI", "outstanding" => 285180000, 00, "member" =>  299, "par" => 26, 42, "branch_id" => "5"),
            array("description" => "PINJAMAN LANCAR", "outstanding" => 1655515000, 00, "member" =>  776, "par" => 0, "branch_id" => "6"),
            array("description" => "TERTUNGGAK 1 - 30 HARI", "outstanding" => 1262320000, 00, "member" =>  681, "par" => 0, "branch_id" => "6"),
            array("description" => "TERTUNGGAK 31 - 60 HARI", "outstanding" => 68420000, 00, "member" =>  42, "par" => 2, 07, "branch_id" => "6"),
            array("description" => "TERTUNGGAK 61 - 90 HARI", "outstanding" => 25720000, 00, "member" =>  12, "par" => 0, 78, "branch_id" => "6"),
            array("description" => "TERTUNGGAK 91 - 120 HARI", "outstanding" => 15370000, 00, "member" =>  12, "par" => 0, 46, "branch_id" => "6"),
            array("description" => "TERTUNGGAK > 120 HARI", "outstanding" => 283207500, 00, "member" =>  189, "par" => 8, 55, "branch_id" => "6"),
            array("description" => "PINJAMAN LANCAR", "outstanding" => 51200000, 00, "member" =>  23, "par" => 0, "branch_id" => "7"),
            array("description" => "TERTUNGGAK 1 - 30 HARI", "outstanding" => 25340000, 00, "member" =>  17, "par" => 0, "branch_id" => "7"),
            array("description" => "TERTUNGGAK 31 - 60 HARI", "outstanding" => 1480000, 00, "member" =>  2, "par" => 1, 78, "branch_id" => "7"),
            array("description" => "TERTUNGGAK 61 - 90 HARI", "outstanding" => 0, 00, "member" =>  0, "par" => 0, 00, "branch_id" => "7"),
            array("description" => "TERTUNGGAK 91 - 120 HARI", "outstanding" => 0, 00, "member" =>  0, "par" => 0, 00, "branch_id" => "7"),
            array("description" => "TERTUNGGAK > 120 HARI", "outstanding" => 5080000, 00, "member" =>  4, "par" => 6, 11, "branch_id" => "7"),
            array("description" => "PINJAMAN LANCAR", "outstanding" => 402794000, 00, "member" =>  303, "par" => 0, "branch_id" => "8"),
            array("description" => "TERTUNGGAK 1 - 30 HARI", "outstanding" => 67070000, 00, "member" =>  63, "par" => 0, "branch_id" => "8"),
            array("description" => "TERTUNGGAK 31 - 60 HARI", "outstanding" => 12540000, 00, "member" =>  20, "par" => 1, 46, "branch_id" => "8"),
            array("description" => "TERTUNGGAK 61 - 90 HARI", "outstanding" => 4910000, 00, "member" =>  8, "par" => 0, 57, "branch_id" => "8"),
            array("description" => "TERTUNGGAK 91 - 120 HARI", "outstanding" => 12990000, 00, "member" =>  14, "par" => 1, 51, "branch_id" => "8"),
            array("description" => "TERTUNGGAK > 120 HARI", "outstanding" => 357323000, 00, "member" =>  408, "par" => 41, 66, "branch_id" => "8"),
            array("description" => "PINJAMAN LANCAR", "outstanding" => 1072910000, 00, "member" =>  466, "par" => 0, "branch_id" => "9"),
            array("description" => "TERTUNGGAK 1 - 30 HARI", "outstanding" => 890145000, 00, "member" =>  384, "par" => 0, "branch_id" => "9"),
            array("description" => "TERTUNGGAK 31 - 60 HARI", "outstanding" => 47060000, 00, "member" =>  24, "par" => 1, 96, "branch_id" => "9"),
            array("description" => "TERTUNGGAK 61 - 90 HARI", "outstanding" => 9560000, 00, "member" =>  5, "par" => 0, 40, "branch_id" => "9"),
            array("description" => "TERTUNGGAK 91 - 120 HARI", "outstanding" => 10360000, 00, "member" =>  8, "par" => 0, 43, "branch_id" => "9"),
            array("description" => "TERTUNGGAK > 120 HARI", "outstanding" => 376263335, 00, "member" =>  305, "par" => 15, 64, "branch_id" => "9"),
            array("description" => "PINJAMAN LANCAR", "outstanding" => 47700000, "member" =>  55, "par" => 0, "branch_id" => "10"),
            array("description" => "TERTUNGGAK 1 - 30 HARI", "outstanding" => 68790000, "member" =>  74, "par" => 0, "branch_id" => "10"),
            array("description" => "TERTUNGGAK 31 - 60 HARI", "outstanding" => 59490000, "member" =>  59, "par" => 9, 53, "branch_id" => "10"),
            array("description" => "TERTUNGGAK 61 - 90 HARI", "outstanding" => 39370000, "member" =>  33, "par" => 6, 31, "branch_id" => "10"),
            array("description" => "TERTUNGGAK 91 - 120 HARI", "outstanding" => 35220000, "member" =>  33, "par" => 5, 64, "branch_id" => "10"),
            array("description" => "TERTUNGGAK > 120 HARI", "outstanding" => 373582400, "member" =>  294, "par" => 59, 85, "branch_id" => "10"),
            array("description" => "PINJAMAN LANCAR", "outstanding" => 219020000, "member" =>  181, "par" => 0, "branch_id" => "11"),
            array("description" => "TERTUNGGAK 1 - 30 HARI", "outstanding" => 37780000, "member" =>  33, "par" => 0, "branch_id" => "11"),
            array("description" => "TERTUNGGAK 31 - 60 HARI", "outstanding" => 13440000, "member" =>  11, "par" => 4, 77, "branch_id" => "11"),
            array("description" => "TERTUNGGAK 61 - 90 HARI", "outstanding" => 4320000, "member" =>  3, "par" => 1, 53, "branch_id" => "11"),
            array("description" => "TERTUNGGAK 91 - 120 HARI", "outstanding" => 7160000, "member" =>  5, "par" => 2, 54, "branch_id" => "11"),
            array("description" => "TERTUNGGAK > 120 HARI", "outstanding" => 0, "member" =>  0, "par" => 0, 00, "branch_id" => "11"),
        );

        foreach ($array as $par) {
            Par::create([
                'description' => $par['description'],
                'outstanding' => $par['outstanding'],
                'member' => $par['member'],
                'par' => $par['par'],
                'branch_id' => $par['branch_id'],
            ]);
        }
    }
}
