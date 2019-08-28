<?php

use App\Dimension;
use Illuminate\Database\Seeder;

class DimensionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dimension = new Dimension();
        $dimension->left = "Extraversion";
        $dimension->right = "Introversion";
        $dimension->left_shortening = "E";
        $dimension->right_shortening = "I";
        $dimension->save();

        $dimension = new Dimension();
        $dimension->left = "Sensing";
        $dimension->right = "Intuition";
        $dimension->left_shortening = "S";
        $dimension->right_shortening = "N";
        $dimension->save();

        $dimension = new Dimension();
        $dimension->left = "Thinking";
        $dimension->right = "Feeling";
        $dimension->left_shortening = "T";
        $dimension->right_shortening = "F";
        $dimension->save();

        $dimension = new Dimension();
        $dimension->left = "Judging";
        $dimension->right = "Perceiving";
        $dimension->left_shortening = "J";
        $dimension->right_shortening = "P";
        $dimension->save();
    }
}
