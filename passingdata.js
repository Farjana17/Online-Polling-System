document.getElementById('createPoll').addEventListener('submit',submitpoll);

function submitpoll(exec){
  exec.preventDefault();
  var title=document.getElementById('title').value;
  var answerOne=document.getElementById('answerOne').value;
  var answerTwo=document.getElementById('answerTwo').value;
  var answerThree=document.getElementById('answerThree').value;
  var answerFour=document.getElementById('answerFour').value;
  var answerFive=document.getElementById('answerFive').value;

  var url="insertdata.php?a="+title+"&b="+answerOne+"&c="+answerTwo+"&d="+answerThree+"&e="+answerFour+"&f="+answerFive;
  var req= new XMLHttpRequest();
  req.open('GET', url, true);
  req.onload= function(){

  }
  req.send();
  var title = document.getElementById('title').value='';
  var answerOne= document.getElementById('answerOne').value='';
  var answerTwo= document.getElementById('answerTwo').value='';
  var answerThree= document.getElementById('answerThree').value='';
  var answerFour= document.getElementById('answerFour').value='';
  var answerFive= document.getElementById('answerFive').value='';
  swal({
  title: "Success!",
   text: "Your Poll is ready!",
    icon: "success",
  button: "Okay!",
});

  
}