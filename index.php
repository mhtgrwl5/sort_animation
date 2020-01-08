<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sort Animation</title>
  </head>
  <body>
    <input type="number" min="1" max="10" id="Number" name="" value="">
    <button type="button" id="create_field" name="button">Enter Data</button>
    <br>
    <div class="create"></div>
    <br>
    <div class="explanation"></div>
    <script src="../jquery-3.3.1.js" charset="utf-8"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        var a=0;
        $("#create_field").click(function(){
          var x="";
          a=$("#Number").val();
          for (var i = 1; i <= a; i++) {
            x=x+"<input type='number' class='n' id='"+i+"'><br>";
          }
          x+="<button class='go'>Selection Sort</button><button class='go2'>Bubble Sort</button>";
          $(".create").html(x);
        });
        var s;
        function getNewS() {
          s="<div style='background-color:white;width:100%;float:left;'>";
          for (var k = 0; k < a; k++) {
            s=s+"<div class='shownum' style='height:24px;width:30px;text-align:center;border-radius:360px;background-color:yellow;padding-top:6px;margin:2.5px;float:left;'>"+nums[k]+"</div>";
            //printing each element has to be done.
          }
          s+="</div><br>";
        }
        var nums = [];
        //SelectionSort Javascript code
        $("body").on("click",".go",function(){
          var x=[];
          alert("Selection Sort");
          $(".n").each(function(){
            x.push(this.value);
          });
          for (var i = 0; i < a; i++) {
            nums[i]=x[i];
          }
          getNewS();
          var cx=37.5;
          var rx=17.5;
          var ir=17.5;
          var stpcnt=1;
          var p="";
          var i=0;
          var j=1;
          var svg="";
          var h=setInterval(function(){
            if(i==a-1){
              clearInterval(h);
            }
              if(j==a){
                i++;
                j=i+1;
                cx = 37.5 + 35*i;
              }
              else {
                rx = 17.5*(parseInt(j)-parseInt(i));
                svg="<svg style='float:none' height='12px' width='100%'><ellipse cx='"+cx+"' cy='0px' rx='"+rx+"' ry='10px' style='fill:none;stroke:purple;stroke-width:2'></ellipse></svg>";
                p+=s+svg;
                if (nums[i]>nums[j]) {
                  var temp=nums[i];
                  nums[i]=nums[j];
                  nums[j]=temp;
                  getNewS();
                }
                p+=s;
                $(".explanation").html(p);
                cx = cx + 17.5;
                j++;
              }
          },1000);
        });
        //BubbleSort Javascript code
        $("body").on("click",".go2",function(){
          var x=[];
          alert("Bubble Sort");
          $(".n").each(function(){
            x.push(this.value);
          });
          for (var i = 0; i < a; i++) {
            nums[i]=x[i];
          }
          getNewS();
          var cx=37.5;
          var rx=17.5;
          var ir=17.5;
          var stpcnt=1;
          var p="";
          var i=0;
          var j=1;
          var svg="";
          var h=setInterval(function(){
            if(i==a-1){
              clearInterval(h);
            }
              if(j==a-i){
                i++;
                j=1;
              }
              else {
                cx = 37.5 + 35*(j-1);
                svg="<svg style='float:none' height='12px' width='100%'><ellipse cx='"+cx+"' cy='0px' rx='"+rx+"' ry='10px' style='fill:none;stroke:purple;stroke-width:2'></ellipse></svg>";
                p+=s+svg;
                if (nums[j-1]>nums[j]) {
                  var temp=nums[j-1];
                  nums[j-1]=nums[j];
                  nums[j]=temp;
                  getNewS();
                }
                p+=s;
                $(".explanation").html(p);
                cx = cx + 17.5;
                j++;
              }
          },1000);
        });
      });
    </script>
  </body>
</html>
