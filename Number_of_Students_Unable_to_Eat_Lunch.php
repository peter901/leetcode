<?php
class Solution {

    /**
     * @param Integer[] $students
     * @param Integer[] $sandwiches
     * @return Integer
     */
    function countStudents($students, $sandwiches) {
        
        $count = 0;
        while(count($sandwiches) > 0){

            if($students[0] == $sandwiches[0])
            {
                array_shift($students);
                array_shift($sandwiches);
                $count =0;
            }else{

                $student = array_shift($students);
                array_push($students, $student);
                $count++;
            }
            $student_count = count($students);
            if($count == 1+$student_count){
                return $student_count;
            }

            
        }

        return 0;
    }
}


$soln = new Solution();


$soln->countStudents([1,1,1,0,0,1],[1,0,0,0,1,1]);