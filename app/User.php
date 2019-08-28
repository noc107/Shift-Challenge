<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * Get the answers of the user.
     */
    public function answers()
    {
        return $this->hasMany(Answer::class, 'fk_user');
    }

    /**
     * Calulates the test result of the current user object.
     */
    public function calculateResult() {
        $answers = $this->answers;
        $perspective = "";
        $dimensionArr = array();
        
        //Populates the dimension array with its answers.
        foreach ($answers as $answer) {
            $questionArr = array("question" => $answer->question->getOriginal(), "answer" => $answer->answer);
            $dimensionArr[$answer->question->fk_dimension]['results'][] = $questionArr;
        }

        foreach ($dimensionArr as $id=>$dimension) {
            //Adds the current dimension info to the array.
            $dimensionInfo = Dimension::findOrFail($id);
            $dimensionArr[$id]['info'] = $dimensionInfo->getOriginal();
            $leftCounter = 0;
            $rightCounter = 0;
            foreach($dimension['results'] as $result) {
                //Validates the answer value to determine the dimension direction.
                if ($result['answer'] > 4) {
                    if ($result['question']['direction'] === 0) {
                        $leftCounter++;
                    } else {
                        $rightCounter++;
                    }
                } else if ($result['answer'] < 4) {
                    if ($result['question']['direction'] === 1) {
                        $leftCounter++;
                    } else {
                        $rightCounter++;
                    }
                }
            }
            //Determines the dimension direction by comparing the answers directions results.
            if ($rightCounter > $leftCounter) {
                $dimensionArr[$id]['winner'] = $dimensionArr[$id]['info']['winner'] = "right";
                $perspective .= $dimensionArr[$id]['info']['right_shortening'];
            } else {
                $dimensionArr[$id]['winner'] = $dimensionArr[$id]['info']['winner'] = "left";
                $perspective .= $dimensionArr[$id]['info']['left_shortening'];
            }

            //Adds a key with the test result.
            $dimensionArr['perspective'] = $perspective;
        }
        return $dimensionArr;
    }
}
