<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title><?=$this->siteTitle("Log in");?></title>
    <link rel="stylesheet" href="<?=PROOT?>css/css/bootstrap.css">
    <link rel="stylesheet" href="<?=PROOT?>css/css/_variables.scss">
    <link rel="stylesheet" href="<?=PROOT?>css/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=PROOT?>css/css/_bootswatch.scss">
    
    <link rel="stylesheet" href="<?=PROOT?>css/style.css">
    
        <script src="<?=PROOT?>js/cookie.js"></script>
        <script src="<?=PROOT?>js/jquery.js"></script>
    
        <script>
        
        $( document ).ready(function(){
          
          $('#TaskSubmit').on('click', function () {
              $.ajax({
          type: 'POST',
          // make sure you respect the same origin policy with this url:
          // http://en.wikipedia.org/wiki/Same_origin_policy
          url: 'saveTask.php',
          data: { 
              'studentID': getCookie('studentID') , 
              'Task':  $(' #taskTextArea' ).val() 
          },
          success: function(response){
              $( '#taskDiv').html(response);
              $( '#centerTask' ).hide();
              $('#showTask').show();
              $('#Task').hide();
          }
      });
          }
          )
      
      
      
          $('#recordSubmit').on('click', function () {
              $.ajax({
          type: 'POST',
          // make sure you respect the same origin policy with this url:
          // http://en.wikipedia.org/wiki/Same_origin_policy
          url: 'saveRecord.php',
          data: { 
              'studentID': getCookie('studentID') , 
              'Record':  $(' #recordTextArea' ).val() 
          },
          success: function(response){
              
              $( '#recordDiv').html(response);
              $( '#centerRecord' ).hide();
              $('#showRecord').show();
              $('#Record').hide();
          }
      });
          }
          )
      
      
          
          $('#commentSubmit').on('click', function () {
              $.ajax({
          type: 'POST',
          // make sure you respect the same origin policy with this url:
          // http://en.wikipedia.org/wiki/Same_origin_policy
          url: 'saveComment.php',
          data: { 
              'studentID': getCookie('studentID') , 
              'comment':  $(' #commentTextArea' ).val() 
          },
          success: function(response){
              
              $( '#commentDiv').html(response);
              $( '#centerComment' ).hide();
              $('#showComment').show();
              $('#Comment').hide();
          }
      });
          }
          )
      
      
      
      
      
      
      
      
      //Record Button
          $('#showRecord').on('click', function () {
            $('#Record').show();
          $('#centerRecord').show();
          $(this).hide();
      })
      
      $('#closeRecord').on('click', function () {
        $('#Record').hide();
          $('#centerRecord').hide();
          $('#showRecord').show();
      })
      });
      
      
      
      
      
      
      
      //task button
      $( document ).ready(function(){
          $('#showTask').on('click', function () {
            $('#Task').show();
          $('#centerTask').show();
          
          $(this).hide();
      })
      
      $('#closeTask').on('click', function () {
        $('#Task').hide();
          $('#centerTask').hide();
          $('#showTask').show();
      })
      });
      
      
      
      
      
      //comment button
      $( document ).ready(function(){
          $('#showComment').on('click', function () {
            $('#Comment').show();
          $('#centerComment').show();
          $(this).hide();
      })
      
      $('#closeComment').on('click', function () {
        $('#Comment').hide();
          $('#centerComment').hide();
          $('#showComment').show();
      })
      });
    
        </script>
    <?= $this->content('head');?>
  </head>
  <body>
 
  <?= $this->content('body');?>    
  </body>
</html>