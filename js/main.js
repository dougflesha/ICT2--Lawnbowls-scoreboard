$(document).ready(function(){
  var temp=0;
  check();
 $('.messagediv').scrollTop($('.messagediv')[0].scrollHeight);

    // $(".textmessagebox").keypress(function(e){
    //      if(e.which == 13) {
    //     var message=$("input").val();
    //       $('.messagediv').scrollTop($('.messagediv')[0].scrollHeight);


    //     if ((message!="")){
    //       $.post('php/sendmessage.php',{message:message},function(fire) {
    //       $("input").val("");
    //     });
    //     }


    // }
    // });

function check(){

  $.ajax({
    url: 'php/packet.php', 
    success: function(mc){
      var info=mc.split('fly');
      temp=info[0];
      
    }
  });

  $.ajax({
    url: 'php/chatimploder.php', 
    success: function(mesg){

      $('.messagediv').html(mesg);

    }});
}


function appender(x){
  
  var mx=x;
  $.post('php/chatchecker.php',{mx:mx},function(data) {
          

    $.ajax({
      url: 'php/packet.php', 
      success: function(mc){
        var info=mc.split('fly');
        temp=info[0];
      }
    });

    //var fs = data;

    //var x = data;

    //jQuery.each(x[0], function (key, value) {
        //console.log(x);
        //write some code here to build the table? I'm just guessing
    //});


    var ptid = parseFloat(data[6]) + 2;

    $('.pts[name="' + ptid + '"]').val(data[14]);
  });
}

var interval = setInterval(function(){

  $.ajax({
    url: 'php/packet.php', 
    success: function(inf){
      var info=inf.split('fly');
      var ctr=info[0];
      var lst=info[1];
      var interval=setInterval(function(){ 
    if(($('.messagediv').scrollTop() + $('.messagediv').innerHeight())>=0.80*$('.messagediv')[0].scrollHeight){
    $('.messagediv').scrollTop($('.messagediv')[0].scrollHeight);
    }
    }, 250);

    if (ctr-temp>=1) {

      appender(ctr-temp);
    }else if (ctr-temp<0) {check();}

      if (lst=='1') {$('.online').html(" is <strong>Online</strong>");}
      else{$('.online').text(" is Offline");}
    }
  });

  },400);
  
  $(".EC").click(function(){
        ctr=0;temp=0;
        var a=1;
        $.post('php/erasechat.php',{a:a},function(erasE) {
          check();
        });
    });

var interval=setInterval(function(){


$.ajax({
    url: 'php/updatels.php', 
    success: function(mc){
      if (!mc) {alert("There has been an error in the server");}
    }
  });


},5000);


// Sum up score values 
    
     
    $('.pts').keyup(function () {

        var thisValue = $(this).attr('name');
        var priThird = parseFloat(thisValue) - 3;
        var nextValue = parseFloat(thisValue) + 1;
        
        var sum = parseFloat($('.pts[name="' + priThird + '"]').val()) + parseFloat($(this).val());

        $('.pts[name="' + nextValue + '"]').val(sum);

        var sumh = 0;
            $('.pts.h').each(function() {
                sumh += Number($(this).val());
            });
        $('#htotal').val(sumh);

        var suma = 0;
            $('.pts.a').each(function() {
                suma += Number($(this).val());
            });
        $('#atotal').val(suma);

        var message=$(this).val();
        var idpts=$(this).attr("name");


        if ((message!="")){
            $.post('php/sendmessage.php',{message:message, idpts:idpts},function(fire, id) {
              //$("input").val("");
            });

        }

        var hscore=$('#htotal').val();
        $.post('php/scoreboard.php',{hscore:hscore},function(data) {
              //$("input").val("");
            });

    });



});