
/*window.onload = function(){

  document.getElementById('email').click= function (){
     var mailBody=document.getElementById('mailBody').innerHTML;
     window.location="mailto:stephen.slusarczyk@gmail.com?subject=hii&body="+mailBody;
     window.open('mailto:test@example.com');
  };
};*/

$(document).ready(function(){
  $('#change-resume').click(function(){
      var resume=document.getElementById('resume');
      var text=document.getElementById('test-res');
      if(resume.style.display=='block'){
        resume.style.display='none';
        text.style.display='block';
      }else{
        resume.style.display='block';
        text.style.display='none';
      }

  });
});
