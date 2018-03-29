$(document).ready(function(){

  $("#Fname").keyup(function(){
    var name = $("#Fname").val();
    var name1 = /^[a-zA-Z]+$/;


    if(!(name.match(name1)))
    {
      console.log('wrong name');
      return false;
    }

  });
   $("#Lname").keyup(function(){
    var name2 = $("#Lname").val();
    var name3 = /^[a-zA-Z]+$/;


    if(!(name2.match(name3)))
    {
      console.log('wrong Lastname');
      return false;
    }

  });
  $('#next').click(function(){
    var name = $("#Fname").val();
    if(name == "")
    {
      alert('name cant be empty');
      $('#next').click(function(event){
        event.preventDefault();
    })}
      else{
       first_form();

    
  }
}
);
  $('#next').click(function(){
    var name2 = $("#Lname").val();
    if(name2 == "")
    {console.log(name2);
      alert('plz enter Lastname');
      $('#next').click(function(event){
        event.preventDefault();
    })}
      else{
       first_form();

    
  }
}
);
  // for email validation
  $("#Email").change(function(){
    var name4 = $("#Email").val();
    var name5 =  /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


    if(!name4.match(name5))
    {
      console.log('wrong email');
      document.getElementById("#Email").innerText=null;
      return false;
    }

  });
  $('#next').click(function(){
    var name4 = $("#Email").val();
    if(name4 == "")
    {
      alert('please enter correct email');
      $('#next').click(function(event){
        event.preventDefault();
    })}
      else{
       first_form();

    
  }
}
);