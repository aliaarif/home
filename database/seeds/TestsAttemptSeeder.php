<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Test;
use DB;

class TestsAttemptTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('test_attempt')->delete();
		for($i = 1; $i <= 5; $i++){
			$test = new Test;
            $test->title = 'Test '.$i;
            $test->instructions = 'Sample Instruction '.$i;
            $test->description = 'تم الترويج لها في الستينيات من القرن الماضي من خلال إصدار أوراق Letraset التي تحتوي على مقاطع Lorem Ipsum ، <ol>
            <li><span class="marker">مراجعة وتحديد وتصنيف مرجعيات الحوكمة التي تحكم أنشطة وأعمال الوزارة المختلفة.</span></li>
            <li><span class="marker">بناء هياكل الحوكمة في الوزارة بما يتيح تحديد وتحليل الفجوات النظامية أو الإجرائية لأنشطة الوزارة.</span></li>
            </ol> ومؤخراً مع برنامج النشر المكتبي مثل Aldus PageMaker بما في ذلك إصدارات';
            $test->source_language = 'Arabic';
            $test->target_language = 'English';
            $test->test_duration = 120;
            $test->save();
    }
    

 
    
  }
}