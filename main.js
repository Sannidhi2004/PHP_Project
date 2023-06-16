$(document).ready(function (){

     var juniorOptions={
        Science:"Science",
        Commerce:"Commerce",
     };

      var ugOptions={
        BSc:"BSc",
        BCom:"BCom",

      };
      var pgOptions={
        MSc:"MSc",
        MCom:"MCom",
      };
      var semIV={
        1:"I",
        2:"II",
        3:"III",
        4:"IV",
      };
      var semVI={
        1:"I",
        2:"II",
        3:"III",
        4:"IV",
        5:"V",
        6:"VI",
    
      };


      $("#level").change(function (){
      $("#course").empty();
      var level=$("#level").find("$selected:").val();
      console.log(level);
      
      if(level=="junior"){
        $.each(juniorOptions,function(key,value){
            $option=$("<option></option>").attr("value",value).text(key);
            $("#course").append($option);
        });

      } else if (level=="ug"){
        $.each(UGOptions,function(key,value){
            $option=$("<option></option>").attr("value",value).text(key);
            $("#course").append($option);
        });

      } else if (level=="pg"){
        $.each(PGOptions,function(key,value){
            $option=$("<option></option>").attr("value",value).text(key);
            $("#course").append($option);
        });
      };
      });



});