<?php

namespace Database\Seeders;

use App\Models\Repayment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RepaymentSeeder extends Seeder
{
    /**
     * Run the database seeds
     *
     * @return void
     */
    public function run()
    {
        $array = array(
            array("description" => "KSP MUM ", "main" => 6900000, 00, "margin" => 2070000, 00, "member" => 88, "branch_id" => "1"),
            array("description" => " BPRS BOTANI ", "main" => 193430000, 00, "margin" => 57447000, 00, "member" => 2025, "branch_id" => "1"),
            array("description" => " KSP MUM ", "main" => 8520000, 00, "margin" => 2556000, 00, "member" => 63, "branch_id" => "2"),
            array("description" => " BPRS HASANAH ", "main" => 120000, 00, "margin" => 36000, 00, "member" => 4, "branch_id" => "2"),
            array("description" => " BPRS ARTHA MADANI ", "main" => 3760000, 00, "margin" => 24000, 00, "member" => 2, "branch_id" => "2"),
            array("description" => " BPRS MULIA ", "main" => 530000, 00, "margin" => 159000, 00, "member" => 4, "branch_id" => "2"),
            array("description" => " BPRS MUSTINDO ", "main" => 14070000, 00, "margin" => 4221000, 00, "member" => 195, "branch_id" => "2"),
            array("description" => " KSP MUM ", "main" => 332710000, "margin" => 98025000, "member" => 4700, "branch_id" => " 3 "),
            array("description" => " BPRS ARTHA MADANI ", "main" => 27430000, "margin" => 8229000, "member" => 315, "branch_id" => " 3 "),
            array("description" => " BPRS BOTANI ", "main" => 71310000, "margin" => 20949000, "member" => 931, "branch_id" => " 3 "),
            array("description" => " BPRS MUSTINDO ", "main" => 33930000, "margin" => 9927000, "member" => 437, "branch_id" => " 3 "),
            array("description" => " BPRS BUANA MITRA ", "main" => 1360000, "margin" => 0, "member" => 2, "branch_id" => " 4 "),
            array("description" => " KSP MUM ", "main" => 245154000, "margin" => 61882200, "member" => 2370, "branch_id" => " 4 "),
            array("description" => " BPRS HASANAH ", "main" => 20570000, "margin" => 6171000, "member" => 387, "branch_id" => " 5 "),
            array("description" => " BPRS MULIA ", "main" => 4010000, "margin" => 1203000, "member" => 70, "branch_id" => " 5 "),
            array("description" => " BPRS MUSTINDO ", "main" => 16740000, "margin" => 5022000, "member" => 260, "branch_id" => " 5 "),
            array("description" => " BPRS BIRU ", "main" => 8800000, "margin" => 2640000, "member" => 141, "branch_id" => " 5 "),
            array("description" => " KSP MUM ", "main" => 42650000, "margin" => 12795000, "member" => 755, "branch_id" => " 5 "),
            array("description" => " BPRS HASANAH ", "main" => 64210000, "margin" => 19263000, "member" => 784, "branch_id" => " 6 "),
            array("description" => " BPRS MULIA ", "main" => 70775000, "margin" => 21232500, "member" => 1102, "branch_id" => " 6 "),
            array("description" => " BPRS BIRU ", "main" => 62710000, "margin" => 18813000, "member" => 847, "branch_id" => " 6 "),
            array("description" => " KSP MUM ", "main" => 224480000, "margin" => 66144000, "member" => 2817, "branch_id" => " 6 "),
            array("description" => " BPRS MULIA ", "main" => 840000, "margin" => 252000, "member" => 20, "branch_id" => " 7 "),
            array("description" => " BPRS MUSTINDO ", "main" => 5980000, "margin" => 1794000, "member" => 107, "branch_id" => " 7 "),
            array("description" => " KSP MUM ", "main" => 2140000, "margin" => 642000, "member" => 35, "branch_id" => " 7 "),
            array("description" => " BPRS BOTANI ", "main" => 10680000, "margin" => 2331000, "member" => 175, "branch_id" => " 8 "),
            array("description" => " BPRS HASANAH ", "main" => 430000, "margin" => 129000, "member" => 3, "branch_id" => " 8 "),
            array("description" => " BPRS BIRU ", "main" => 13666000, "margin" => 3247800, "member" => 170, "branch_id" => " 8 "),
            array("description" => " KSP MUM ", "main" => 66364000, "margin" => 16126200, "member" => 955, "branch_id" => " 8 "),
            array("description" => " BPRS HASANAH ", "main" => 42970000, "margin" => 12891000, "member" => 494, "branch_id" => " 9 "),
            array("description" => " BPRS MULIA ", "main" => 54120000, "margin" => 16236000, "member" => 714, "branch_id" => " 9 "),
            array("description" => " BPRS BIRU ", "main" => 23910000, "margin" => 7173000, "member" => 297, "branch_id" => " 9 "),
            array("description" => " KSP MUM ", "main" => 143370000, "margin" => 42446000, "member" => 1676, "branch_id" => " 9 "),
            array("description" => " BPRS BOTANI ", "main" => 38000000, "margin" => 9594000, "member" => 597, "branch_id" => " 10 "),
            array("description" => " KSP MUM ", "main" => 5140000, "margin" => 1290000, "member" => 76, "branch_id" => "10"),
            array("description" => " BPRS BUANA MITRA ", "main" => 3680000, "margin" => 1104000, "member" => 89, "branch_id" => " 11 "),
            array("description" => " KSP MUM ", "main" => 25460000, "margin" => 6378000, "member" => 606, "branch_id" => " 11"),
        );

        foreach ($array as $repayment) {
            Repayment::create([
                "description" => $repayment['description'],
                "main" => $repayment['main'],
                "margin" => $repayment['margin'],
                "member" => $repayment['member'],
                "branch_id" => $repayment['branch_id'],
            ]);
        }
    }
}
