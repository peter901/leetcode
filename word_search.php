<?php

class Solution
{

    /**
     * @param String[][] $board
     * @param String $word
     * @return Boolean
     */
    function exist($board, $word)
    {
        for ($i = 0; $i < count($board); $i++) {
            for ($j = 0; $j  < count($board[0]); $j++) {
                $board_letter = $board[$i][$j];
                $word_letter = $word[0];
                if ($board_letter == $word_letter && $this->dfs($i, $j, '', $word, $board)) {
                    return true;
                }
            }
        }

        return false;
    }

    function dfs($i, $j, $curword, $word, $board)
    {
        if ($curword == $word) {
            return true;
        }
        if ($i < 0 || $j < 0 || $i >= count($board) || $j >= count($board[0])) {
            return false;
        }


        if (strlen($curword) > 0 && $curword != substr($word, 0, strlen($curword))) {
            return false;
        }

        $letter = $board[$i][$j];
        $board[$i][$j] = ' ';
        $found =  $this->dfs($i + 1, $j, $curword . $letter, $word, $board) ||
            $this->dfs($i - 1, $j, $curword . $letter, $word, $board) ||
            $this->dfs($i, $j + 1, $curword . $letter, $word, $board) ||
            $this->dfs($i, $j - 1, $curword . $letter, $word, $board);

        $board[$i][$j] = $letter;

        return $found;
    }
}

$board = [
    ["A","B","C","E"],
    ["S","F","C","S"],
    ["A","D","E","E"]];
$word = "ABCCED";


$sln = new Solution();

var_export($sln->exist($board, $word));
