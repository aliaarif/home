<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Test;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
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

    for($i = 6; $i <= 10; $i++){
			$test = new Test;
            $test->title = 'Test '.$i;
            $test->instructions = 'Sample Instruction '.$i;
            $test->description = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry';
            $test->source_language = 'English';
            $test->target_language = 'Arabic';
            $test->test_duration = 120;
            $test->save();
    }
    

 
    
  }
}