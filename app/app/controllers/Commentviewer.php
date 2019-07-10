<?php
class Commentviewer extends Controller {

    public function __construct($controller, $action) {
      parent::__construct($controller, $action);
      $this->load_model('Comments');
      // $this->load_model('Achievements');
      $this->view->setLayout('default');
    }



    public function commentsAction($id){
        // dnd($id);
        $comment=$this->CommentsModel->findByStudentId($id);

    $this->view->comment = $comment;
    // dnd($task);

    $this->view->render('Commentviewer/comments');
    }


}
