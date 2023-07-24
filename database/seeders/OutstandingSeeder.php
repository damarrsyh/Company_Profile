<?php

namespace Database\Seeders;

use App\Models\Outstanding;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OutstandingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = array(
            array("description" => "BPRS ARTHA MADANI ", "main" => 17900000, "margin" => 5370000, "member" => " 7 ", "branch_id" => " 1 "),
            array("description" => " BPRS BOTANI ", "main" => 2481720000, "margin" => 745596000, "member" => " 1.100 ", "branch_id" => " 1 "),
            array("description" => " BPRS HASANAH ", "main" => 24360000, "margin" => 7308000, "member" => " 20 ", "branch_id" => " 1 "),
            array("description" => " KSP MUM ", "main" => 164780000, "margin" => 49228500, "member" => " 67 ", "branch_id" => " 1 "),
            array("description" => " BPRS ARTHA MADANI ", "main" => 115960000, "margin" => 34002000, "member" => " 43 ", "branch_id" => " 2 "),
            array("description" => " BPRS HASANAH ", "main" => 11790000, "margin" => 2655000, "member" => " 21 ", "branch_id" => " 2 "),
            array("description" => " BPRS MULIA ", "main" => 9630000, "margin" => 2889000, "member" => " 5 ", "branch_id" => " 2 "),
            array("description" => " BPRS MUSTINDO ", "main" => 144320000, "margin" => 43296000, "member" => " 72 ", "branch_id" => " 2 "),
            array("description" => " KSP MUM ", "main" => 863760000, "margin" => 258354000, "member" => " 521 ", "branch_id" => " 2 "),
            array("description" => " BPRS ARTHA MADANI ", "main" => 264900000, "margin" => 79470000, "member" => " 189 ", "branch_id" => " 3 "),
            array("description" => " BPRS BOTANI ", "main" => 654180000, "margin" => 195180000, "member" => " 262 ", "branch_id" => " 3 "),
            array("description" => " BPRS MUSTINDO ", "main" => 256140000, "margin" => 76542000, "member" => " 130 ", "branch_id" => " 3 "),
            array("description" => " KSP MUM ", "main" => 3287720000, "margin" => 981162000, "member" => " 2.215 ", "branch_id" => " 3 "),
            array("description" => " BPRS BUANA MITRA  ", "main" => 4540000, "margin" => 1362000, "member" => " 5 ", "branch_id" => " 4 "),
            array("description" => " KSP MUM ", "main" => 5659559000, "margin" => 796805700, "member" => " 1.412 ", "branch_id" => " 4 "),
            array("description" => " BPRS HASANAH  ", "main" => 336840000, "margin" => 101052000, "member" => " 332 ", "branch_id" => " 5 "),
            array("description" => " BPRS MULIA ", "main" => 22820000, "margin" => 6846000, "member" => " 26 ", "branch_id" => " 5 "),
            array("description" => " BPRS MUSTINDO ", "main" => 171710000, "margin" => 51513000, "member" => " 72 ", "branch_id" => " 5 "),
            array("description" => " BPRS BIRU ", "main" => 102990000, "margin" => 30897000, "member" => " 43 ", "branch_id" => " 5 "),
            array("description" => " KSP MUM ", "main" => 444930000, "margin" => 133479000, "member" => " 309 ", "branch_id" => " 5 "),
            array("description" => " BPRS HASANAH  ", "main" => 378735000, "margin" => 113620500, "member" => " 296 ", "branch_id" => " 6 "),
            array("description" => " BPRS MULIA ", "main" => 442700000, "margin" => 132810000, "member" => " 315 ", "branch_id" => " 6 "),
            array("description" => " BPRS BIRU ", "main" => 683430000, "margin" => 205029000, "member" => " 236 ", "branch_id" => " 6 "),
            array("description" => " KSP MUM ", "main" => 1805687500, "margin" => 541506500, "member" => " 865 ", "branch_id" => " 6 "),
            array("description" => " BPRS MULIA ", "main" => 5520000, "margin" => 1656000, "member" => " 7 ", "branch_id" => " 7 "),
            array("description" => " BPRS MUSTINDO ", "main" => 62380000, "margin" => 18714000, "member" => " 30 ", "branch_id" => " 7 "),
            array("description" => " KSP MUM ", "main" => 15200000, "margin" => 4560000, "member" => " 9 ", "branch_id" => " 7 "),
            array("description" => " BPRS BOTANI ", "main" => 38260000, "margin" => 10233000, "member" => " 49 ", "branch_id" => " 8 "),
            array("description" => " BPRS HASANAH ", "main" => 39380000, "margin" => 10572000, "member" => " 36 ", "branch_id" => " 8 "),
            array("description" => " BPRS BIRU ", "main" => 57514000, "margin" => 15022200, "member" => " 47 ", "branch_id" => " 8 "),
            array("description" => " KSP MUM ", "main" => 722473000, "margin" => 183777900, "member" => " 685 ", "branch_id" => " 8 "),
            array("description" => " BPRS HASANAH ", "main" => 351460000, "margin" => 105438000, "member" => " 216 ", "branch_id" => " 9 "),
            array("description" => " BPRS MULIA ", "main" => 314440000, "margin" => 94332000, "member" => " 182 ", "branch_id" => " 9 "),
            array("description" => " BPRS BIRU ", "main" => 252530000, "margin" => 75759000, "member" => " 82 ", "branch_id" => " 9 "),
            array("description" => " KSP MUM ", "main" => 1487868335, "margin" => 446270500, "member" => " 713 ", "branch_id" => " 9 "),
            array("description" => " BPRS BOTANI ", "main" => 511290000, "margin" => 136692000, "member" => " 453 ", "branch_id" => " 10 "),
            array("description" => " KSP MUM ", "main" => 112862400, "margin" => 31473360, "member" => " 95 ", "branch_id" => " 10 "),
            array("description" => " BPRS BUANA MITRA ", "main" => 31080000, "margin" => 9324000, "member" => " 28 ", "branch_id" => " 1 "),
            array("description" => " KSP MUM ", "main" => 250640000, "margin" => 68436000, "member" => " 205 ", "branch_id" => " 1"),
        );

        foreach ($array as $outstanding) {
            Outstanding::create([
                "description" => $outstanding['description'],
                "main" => $outstanding['main'],
                "margin" => $outstanding['margin'],
                "member" => $outstanding['member'],
                "branch_id" => $outstanding['branch_id'],
            ]);
        }
    }
}
