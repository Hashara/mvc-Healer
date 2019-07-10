<?php
class Visitor extends Controller{
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
        $this->load_model('Visitors');
        $this->view->setLayout('default');
      }

    public function visitAction(){
      $validation=new Validate();
      $posted_values=['email'=>''];
      if($_POST){
        //dnd($_POST);
        $posted_values=posted_values($_POST);
        $validation->check($_POST,[
          'email'=>[
            'display'=>'email',
            'required'=>true
          ]
          ]);
          if($validation->passed()){
            //dnd("h");
            $newVisitor=new Visitors();
            $newVisitor->registerVisitor($_POST);
            // dnd($newVisitor->id);
            $visitor=$this->VisitorsModel->findByEmail($_POST['email']);
            //dnd($visitor->id);
            header('Location: ../../../visitCounselor/index.php?id='.$visitor->id);
          }
      }
      $this->view->post=$posted_values;
      $this->view->displayErrors= $validation->displayErrors();
        $this->view->render('visitor/visit');
    }

    public function visitorinfoAction($visitorId){
     
      //$validation=new Validate();
      $visitor=$this->VisitorsModel->findById($visitorId);
      $posted_values=['contactName'=>'','contactemail'=>'','contactNum'=>'','message'=>''];
      if($_POST){
      //   // dnd($_POST);
      $posted_values=posted_values($_POST);
      //     $validation->check($_POST,[
      //       'contactName'=>[
      //         'display'=>'contactName',
      //         'required'=>true
      //       ],
      //       'contactemail'=>[
      //         'display'=>'contactemail',
      //         'required'=>true
      //       ],
      //       'contactNum'=>[
      //         'display'=>'contactNum',
      //        'required'=>true
      //       ],
      //       'message'=>[
      //         'display'=>'message',
      //         'required'=>true
      //       ]]);
      //dnd($posted_values);
      }
     
     
      $this->view->post=$posted_values;
      //dnd();
      $visitor->updateinfo($visitor->id,$posted_values);
      $this->view->visitor=$visitor;
      
      Router::redirect('');
      $this->view->render('visitor/visitorinfo');
    }

    public function visitorCounselorAction($id){
      $list=$this->VisitorsModel->findByCId($id);
      $this->view->list=$list;
      $this->view->render('visitor/visitorCounselor');
    }
}