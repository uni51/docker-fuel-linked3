<?php

class Controller_Sample extends Controller {

    public function action_index() {
        $user = new Model_User();

        print($user->get_name());
    }

//    public function action_index() {
//        $data['hello'] = 'こんにちは';
//
//        return View::forge('sample/index', $data);
//    }

//    public function action_calc($a, $b) {
//        // http://localhost/sample/calc/5/8
//        $answer = $a * $b; // 上記の場合、5 x 8 になる
//
//        print($answer);
//    }
}
