<?php

class Controller_Sample extends Controller {

//    public function action_index() {
//        $data = array();
//        $data['name'] = 'たにぐち';
//
//        return View::forge('sample/index', $data);
//    }

//    public function action_index() {
//        $view = View::forge('sample/index');
//        $view->set('name', 'たにぐち');
//        return $view;
//    }

    public function action_index() {
        $view = View::forge('sample/index');
        // 第３引数のfalseでエスケープ（オートフィルター）を無効にする
        $view->set('html', '<p>段落です</p>', false);
        $view->set('danger', '<script>alert\("危険だよ"\)</script>');

        return $view;
    }
}
