<?php

use Illuminate\Database\Seeder;
use App\Problem;
use Illuminate\Support\Str;

class ProblemsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        Problem::create([
            'number' => 1000 ,
            'name' => 'E - Easy Diet' ,
            'slug_name' => Str::slug( 'E - Easy Diet' , $separator = '-') ,
            'description' => "Your friend Ana is going to begin a diet. She is going to eat only items of food that have at
most 1000 calories. Given a list of items she may eat, your task is to assist her in computing
how many of those items can be included in her diet.
Input
There will be several test cases in the input. Each test case begins with a line containing a
positive integer N, N ≤ 100, which indicates the amount of items in Ana’s list. This line is
followed by a blank-separated sequence of N nonnegative integers, none of them greater than
10000 and, indicating the calories for each of the N items in Ana’s list.
The end of the input is given by N = 0.
The input must be read from standard input.
Output
Output a single integer per test case, the solution to the problem.
The output must be written to standard output." ,
            'input' => "3
1000 2000 900
2
999 1001
0
" ,
            'output' => "2
1
"
        ]);

        //factory( App\Problem::class , 5 )->create();
    }
}
