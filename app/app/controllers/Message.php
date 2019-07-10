<?php
class Message extends Controller {

    public function __construct($controller, $action) {
      parent::__construct($controller, $action);
      $this->load_model('Messages');
      $this->load_model('Students');
      $this->load_model('Counselors');
      $this->view->setLayout('default');
    }

    public function sendmessageAction($id){
     

    //dnd($id);
    $isstudent=true;
    $student=$this->StudentsModel->findByUsername($id);
    // dnd($student);
    $this->view->isstudent=$isstudent;
    $this->view->student=$student;
    $this->view->render('message/sendmessge');
    

   // Router::redirect("message/sendmessge1/".(string)$student->studentId);
    


    }

    public function counsendmessgeAction($id,$sid){
     
      $isstudent=false;
      $student=$this->StudentsModel->findByUsername($sid);
      $counselor=$this->CounselorsModel->findByUserId((int)$id);
    // dnd($student);
    $this->view->isstudent=$isstudent;
      $this->view->student=$student;
      $this->view->counselor=$counselor;
      $this->view->render('message/sendmessge');
    
      
  
     // Router::redirect("message/sendmessge1/".(string)$student->studentId);
      
  
  
      }

     public function messageviewerAction($from,$to){
        $tofromarray=[$from,$to];
        
         //dnd($tofromarray);
        if(strlen($to)==7){
         $student=$this->StudentsModel->findByUsername($to);
         $counselor=$this->CounselorsModel->findByUserId((int)$from);
         $senderisastudent=false;
        }else{
         $student=$this->StudentsModel->findByUsername($from);
         $counselor=$this->CounselorsModel->findByUserId((int)$to);
         $senderisastudent=true;
        }
        $messages = $this->MessagesModel->findByfrom($student->studentId);
        $messages1 = $this->MessagesModel->findByTo($student->studentId);
        $a=[];
      //   var_dump($messages);
      //   dnd($messages1);
      for ($x = 0; $x < count($messages)+count($messages1); $x++) {
         if((count($messages)>$x))
         {
               array_push($a,(int)$messages[$x]->id);
         }
         else{
            array_push($a,(int)$messages1[$x-count($messages)]->id);
         }
         

         // echo "The number is: $x <br>";
     }
     sort($a);
     $msgs = [];

     foreach($a as $ids)
     {
         $m = $this->MessagesModel->findById($ids);
         array_push($msgs,$m);
     }
   //   dnd($msgs);

  // dnd($a);
        // dnd($student);
        //$message=$this->MessagesModel->
        $this->view->senderisastudent=$senderisastudent;
        $this->view->tofromarray=$tofromarray;
        $this->view->student=$student;
        $this->view->counselor=$counselor;
        $this->view->messages = $msgs;
        $this->view->render('message/messageviewer');
     } 


     public function messagesenderAction($from,$to){
         // dnd($to);
         $tofromarray=[$from,$to];
         //dnd($tofromarray);
        if(strlen($to)==7){
         $student=$this->StudentsModel->findByUsername($to);
         $counselor=$this->CounselorsModel->findByUserId((int)$from);
        }else{
         $student=$this->StudentsModel->findByUsername($from);
         $counselor=$this->CounselorsModel->findByUserId((int)$to);
        }
        //dnd($_POST);
        if($_POST){
         $message=$this->MessagesModel->sendMessage($to,$from,$_POST['message']);
        }
        // dnd($student);
       // $message=$this->MessagesModel->sendMessage($to,$from,$content);
        $this->view->tofromarray=$tofromarray;
        $this->view->student=$student;
        $this->view->counselor=$counselor;
        $this->view->render('message/messagesender');
     } 
    // public function sendmessge1Action(){
    //     // Router::redirect("message/sendmessge/".(string)$student->studentId);
        
    // }
    // $this->view->displayErrors=$validation->displayErrors();
        // $this->view->render('counselorregister/login');
}

   