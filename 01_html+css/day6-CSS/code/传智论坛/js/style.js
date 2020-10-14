  window.onload=init;
  var timer1;//存放定时器
   function init(){
   	var url1="open.html";
   	var name1="win1";
   	var screenwidth=screen.availWidth;
   	var screenheight=screen.availHeight;
   	var width=500;
   	var height=327;
   	var x=(screenwidth-width)/2;
   	var y=(screenheight-height)/2;
   	var option1="width="+width+",height="+height+",top="+y+",left="+x;
   	window.open(url1,name1,option1);
      timer1=window.setInterval("qietu()",1000);

   }
   var i=1;
   function qietu(){
      var objimg=document.getElementById("dd_scroll");
      i= i % 8 +1;
      objimg.src="images/dd_scroll_"+i+".jpg";
      for(var k=1;k<=8;k++){
         var all_button=document.getElementById("scroll_number_"+k)
           all_button.style.background="";
         
      }
      var new_button=document.getElementById("scroll_number_"+i);
      new_button.style.background="orange";

   }
   function ting(){
      window.clearInterval(timer1);
   }
   function zou(){
      timer1=window.setInterval("qietu()",1000);
   }
   function loopshow(n){
      window.clearInterval(timer1);
      var objimg=document.getElementById("dd_scroll");
      objimg.src="images/dd_scroll_"+n+".jpg";
      i=n;
      for(var i=1;i<=8;i++){
         var all_button=document.getElementById("scroll_number_"+i)
           all_button.style.background="";
         
      }
      var new_button=document.getElementById("scroll_number_"+n);
      new_button.style.background="orange";
   }
   function closeme(obj){
      var  self=obj.parentNode;
      var parent=self.parentNode;
      parent.removeChild(self);
   }