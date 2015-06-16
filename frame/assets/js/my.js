    $(document).ready(function() {
        
      
     // спойлер добавления события//
        var flag = Boolean(true);   
        $('#addEvent').click(function(){
            if(flag){
                flag=false;
                $('#addEvent2').fadeIn(1000);
            }
            else{
                flag=true;
                $('#addEvent2').fadeOut(500);
            }
        });
    
    // спойлер добавления события//
    
    // открытие модалки //
    $('#myModal').on('shown.bs.modal', function (e) {
        backdrop:false,
        $('#myInput').focus()
      });
    // открытие модалки //
    
    
        // модалка для изменения события //
        $('.ssilka').click(function(){
        $('#myModal').find("option").each(function(){
               $(this).removeAttr("selected"); 
            });
            var id=$(this).attr("id");
            $.ajax({
                type:"POST",
                dataType: "json",
                data:{event_id:id},
                url:"admineventform",
                success: function(data){
                    
                    $('#event_id').each(function(){ // id эвента
                        $(this).val(data.event_id);
                    });
                    $('#event_name').each(function(){ // имя эвента
                        $(this).val(data.event_name);
                    });
                    $('option[value="'+data.event_type_id+'"].event_type_id').prop("selected",true); // тип эвента
                   
                    
                    $('#event_period_start').each(function(){ // начало эвента
                        $(this).val(data.event_period_start);
                    });
                    $('#event_period_end').each(function(){ // конец эвента
                        $(this).val(data.event_period_end);
                    });
                   
                    
                }

             });
            
           
        
        });
   // модалка для изменения события//
   
          
   
   // передача для начиесления баллов//
   $(".points").click(function(){
        $(".pointsColor").addClass("success").css({'cursor':'pointer'});
        
         $(".pointsColor").click(function(){
             var id = $(this).attr("id");
                $(".point-panel").fadeIn(1000);
             
             $.ajax({
                type:"POST",
                dataType: "json",
                data:{event_id:id},
                url:"admineventform",
                success: function(data){
                    
                    $('#event_id').each(function(){
                        $(this).val(data.event_id);
                    });
                    $('#event_point_name').each(function(){ //скрытое поле для id эвента
                        $(this).val(data.event_name);
                    });
                    
                    $('#admin_event_id').each(function(){ //скрытое поле для id эвента
                        $(this).val(data.event_id);
                    });
                    
                     $('#event_point_name2').each(function(){
                        $(this).val(data.event_id);
                       
                    });
                    
                    
                    $('#event_period_start').each(function(){
                        $(this).val(data.event_period_start);
                    });
                    $('#event_period_end').each(function(){
                        $(this).val(data.event_period_end);
                    });
                    
                }
             });
         });
           
    });

     
    $(".add_student").click(function(){
       $(".student_points").fadeIn(1000); 
    });
                // передача студентов для добавления баллов за эвент
            var i = 0;
            $('.ssilkaPoint').click(function(){  
            var id=$(this).attr("id");
            var event_id = $('#admin_event_id').val();
            

            
            
            $.ajax({
                type:"POST",
                dataType: "json",
                data:{student_id:id,event_id:event_id},
                url:"adminstudentpoint",
                success: function(data){
                var str = '<tr><input type="hidden" id="student_id" name="student_id'+i+'" value="'+data.student_id+'" /><td><input style="width:100%;" type="text" id="student_group" name="student_group" value="'+data.student_group+'" size="30" disabled/></td><td><input style="width:100%;" type="text" id="student_first_name" name="student_first_name" value="'+data.student_first_name+'" size="30" disabled/></td><td><input style="width:100%;" type="text" id="student_name" name="student_name" value="'+data.student_name+'" size="30" disabled/></td><td><input style="width:100%;" type="text" id="student_patronymic" name="student_patronymic" value="'+data.student_patronymic+'" size="30" disabled/></td><td><input style="width:100%" type="text" name="student_points_before'+i+'" value="'+data.student_points+'" disabled/></td><td><input style="width:100%" type="number" name="student_points'+i+'" value="" /></td><td><input type="text" name="student_comment'+i+'" /></td><td><button title="Удалить событие" class="delStud glyphicon glyphicon-remove"></button></td></tr>'
                i++;    
                    $('.trHide').fadeIn(500);
                    $('.okbutton').fadeIn(500);
                    $('#tableStudPoint').prepend(str);
                    $('#student_id').each(function(){
                        $(this).val(data.student_id);
                    });
                    $('#student_first_name').each(function(){
                        $(this).val(data.student_first_name);
                    });
                    
                    $('#student_name').each(function(){
                        $(this).val(data.student_name);
                    });
                    
                    $('#student_patronymic').each(function(){
                        $(this).val(data.student_patronymic);
                    });
                    $('#student_group').each(function(){
                        $(this).val(data.student_group);
                    });
                    
                    $('#student_points').each(function(){
                        $(this).val(data.student_points);
                    });
                    
                    $('#student_count').val(i);
                    
                    $(".delStud").on("click",function(e){
                        e.preventDefault();
                         $(this).parent().parent().remove();
                    });
                    
                    
                }
                
                
             });
             
           
        
   });
  /*  
    $("#addP").click(function(){
        
            //var id=$("$addPform").serialize();
            $.ajax({
                url:"addpoints",
                type:"POST",
                data:$("#addPform").serialize(),
                success: function(data){
                   alert("Баллы начислены!");      
                    
                },
                error:function(){
                    alert("Ошибка при начислении баллов!");
                }
                
                
             });
        
    });*/
    
        function delAjax(id){
        $.ajax({
        type:"POST",
        data:{event_id:id},
        url:"eventdelete",
        success:function(data){
            alert("Событие удалено!");
        },
        error:function(){
            alert("Ошибка при удалении события!");
        }
        
       });
    }
    

        // добавление эвента аякс
        $("#addE").click(function(){
            
            $.ajax({
                url:"formeventsuccess",
                type:"POST",
                dataType: "json",
                data:$("#addEventForm").serialize(),
                success: function(data){
                   // alert(data.event_id);
                   var str = '<tr class="odd gradeX"><td style="width:40%" id="'+data.event_id+'" class="pointsColor"><div class="col-md-10" style="float:left;">'+data.event_name+'</div><div style="left:30px;" class="col-md-2"></td><td style="width:10%"><button  id="'+data.event_id+'added" type="button" data-toggle="modal" data-target="#myModal"  title="Изменить событие" class="ssilka glyphicon glyphicon-pencil" ></button> | <button  value="'+data.event_id+'" id="'+data.event_id+'remove" title="Удалить событие" class="delE glyphicon glyphicon-remove"></button></div></td><td>'+data.event_type_name+'</td><td>'+data.event_period_start+'</td><td class="center">'+data.event_period_end+'</td></tr>';
                  $("#tableEv").prepend(str);
                    alert("Событие добавлено!");

                    $("#"+data.event_id+"added").on("click",function(){
                        
                        $('#event_id').each(function(){
                        $(this).val(data.event_id);
                    });
                    $('#event_name').each(function(){
                        $(this).val(data.event_name);
                    });
                    $('option[value="'+data.event_type_id+'"].event_type_id').attr("selected","selected");
                   
                    
                    $('#event_period_start').each(function(){
                        $(this).val(data.event_period_start);
                    });
                    $('#event_period_end').each(function(){
                        $(this).val(data.event_period_end);
                    });
                        
                        
                    });
                    
                    $("#"+data.event_id+"remove").on("click",function(){
                        var res = confirm("Вы действительно хотите удалить событие?");
                        if(res){
                            $(this).parent().parent().hide();
                            delAjax(data.event_id);
                        }
                        else{
                            return false;
                        }
                    });
                    
                },
                error:function(){
                    alert("Ошибка при добавлении события!");
                }
                
                
             });
        
    });
    

    
    // Удаление эвента аякс
    $(".delE").click(function(){
       var id = $(this).val();
       var res = confirm("Вы действительно хотите удалить событие?");
       var elem=$(this);
       if (res){
       $.ajax({
        type:"POST",
        data:{event_id:id},
        url:"eventdelete",
        success:function(data){
        
        elem.parent().parent().hide();
            alert("Событие удалено!");
        },
        error:function(){
            alert("Ошибка при удалении события!");
        }
        
       });
       }else{
        return false;
       }
       
    });
    
    
     // спойлер добавления типа события
     var flag2 = Boolean(true);   
        
    $('#addEventType').click(function(){
    if(flag2){
        flag2=false;
        $('#addEventType').css({'float':'left'});
        $('#addEventTypeForm').show();
        }
    else{
    flag2=true;
         
        $('#addEventTypeForm').hide();
        $('#addEventType').css({'float':'none'});
    }
    });
    

    

    });
    
    

    

    



