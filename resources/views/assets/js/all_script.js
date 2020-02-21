function show_rate(){

    var land_class = $("#land_class").val();
    
    if(land_class == 1)
      $("#show_rate1").show(); 
      else 
        $("#show_rate1").hide();
    
    
    if(land_class == 2)
        $("#show_rate2").show(); 
        else 
          $("#show_rate2").hide();
        
      
      if(land_class == 3)
        $("#show_rate3").show(); 
        else 
          $("#show_rate3").hide();
   
      
   
    }



function checkpassmatch(){
  var password = $("#pass").val();
  var conf_pass = $("#conf_pass").val();
  if(password != conf_pass)
 $("#checkpassmatch").html("Passwords do not match!").addClass('text-danger').removeClass('text-success')
   else 
          $("#checkpassmatch").html("Passwords match!").addClass('text-success').removeClass('text-danger')
        }


  function show_leaseRes(){
            document.getElementById('lease_valComm').style.display="none";
            document.getElementById('lease_valResident').style.display="block";
          }
   function show_leaseCom(){
            document.getElementById('lease_valResident').style.display="none";
            document.getElementById('lease_valComm').style.display="block";

          }

    function show_vo(){
            document.getElementById('appointment_officer').style.display="none";
            document.getElementById('complaint').style.display="block";
          }
   function show_app(){
            document.getElementById('complaint').style.display="none";
            document.getElementById('appointment_officer').style.display="block";

          }
          function app(){
            document.getElementById('appointment_officer').style.display="none";
            document.getElementById('complaint').style.display="none";
          }
   function follow(){
            document.getElementById('complaint').style.display="none";
            document.getElementById('appointment_officer').style.display="none";

          }
 function show_lcDept(){
            document.getElementById('cls_dept').style.display="none";
            document.getElementById('lc_dept').style.display="block";

          }
function show_clsDept(){
            document.getElementById('cls_dept').style.display="block";
            document.getElementById('lc_dept').style.display="none";

          }

          function show_dept(){

            var division = $("#division").val();
            
            if(division == "ALS")
              $("#cls_dept").show(); 
              else 
                $("#cls_dept").hide();
              
            
            if(division == "LC")
                $("#lc_dept").show(); 
                else 
                  $("#lc_dept").hide();
        
            }






