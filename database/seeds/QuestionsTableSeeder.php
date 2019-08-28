<?php

use App\Question;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question = new Question();
        $question->question = "You find it takes effort to introduce yourself to other people.";
        $question->fk_dimension = 1;
        $question->direction = true;
        $question->save();

        $question = new Question();
        $question->question = "You consider yourself more practical than creative.";
        $question->fk_dimension = 2;
        $question->direction = false;
        $question->save();

        $question = new Question();
        $question->question = "Winning a debate matters less to you than making sure no one gets upset.";
        $question->fk_dimension = 3;
        $question->direction = true;
        $question->save();

        $question = new Question();
        $question->question = "You get energized going to social events that involve many interactions.";
        $question->fk_dimension = 1;
        $question->direction = false;
        $question->save();

        $question = new Question();
        $question->question = "You often spend time exploring unrealistic and impractical yet intriguing ideas.";
        $question->fk_dimension = 2;
        $question->direction = true;
        $question->save();

        $question = new Question();
        $question->question = "Deadlines seem to you to be of relative rather than absolute importance.";
        $question->fk_dimension = 4;
        $question->direction = true;
        $question->save();

        $question = new Question();
        $question->question = "Logic is usually more important than heart when it comes to making important decisions.";
        $question->fk_dimension = 3;
        $question->direction = false;
        $question->save();

        $question = new Question();
        $question->question = "Your home and work environments are quite tidy.";
        $question->fk_dimension = 4;
        $question->direction = false;
        $question->save();

        $question = new Question();
        $question->question = "You do not mind being at the center of attention.";
        $question->fk_dimension = 1;
        $question->direction = false;
        $question->save();

        $question = new Question();
        $question->question = "Keeping your options open is more important than having a to-do list.";
        $question->fk_dimension = 4;
        $question->direction = true;
        $question->save();
    }
}
