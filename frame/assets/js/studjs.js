    $(document).ready(function() {
        
            var stud = Boolean(true);   
        
    $('#addStud').click(function(){
    if(stud){
        stud=false;
        $('#addStud2').fadeIn(1000);
        }
    else{
    stud=true;
        $('#addStud2').fadeOut(500);
    }
    

    });
// модалка для изменения студента //
        $('.ssilkastud').click(function(){ 
            $('#myModal').find("option").each(function(){
               $(this).removeAttr("selected"); 
            });
            var id=$(this).attr("id");
            $.ajax({
                type:"POST",
                dataType: "json",
                data:{student_id:id},
                url:"adminstudform",
                success: function(data){
                    
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
                    
                    $('option[value="'+data.student_group+'"].student_group_id').prop("selected",true);
                   
                    $('option[value="'+data.student_course_number+'"].student_course_number').prop("selected",true);
                    
                    $('#student_birth_date').each(function(){
                        $(this).val(data.student_birth_date);
                    });
                   
                   
                    
                }
             });

        });
   // модалка для изменения студента//
   
   function studDeleteAjax(id){
    $.ajax({
        type:"POST",
        data:{student_id:id},
        url:"tabledelete",
        success:function(data){
            alert("Студент удален!");
        },
        error:function(){
            alert("Ошибка при удалении студента!");
        }
        
       });
   }
   
    // добавление студента ajax
        $("#addS").click(function(){
            $.ajax({
                url:"formstudentsuccess",
                type:"POST",
                dataType: "json",
                data:$("#addStudForm").serialize(),
                success: function(data){
                   var str = '<tr class="odd gradeX"><td id="'+data.student_id+'">'+data.student_first_name+'</td><td>'+data.student_name+'</td><td>'+data.student_patronymic+'</td><td style="width:8%"><button  id="'+data.student_id+'added" type="button" data-toggle="modal" data-target="#myModal"  title="Изменить студента" class="ssilkastud glyphicon glyphicon-pencil" ></button> | <button  value="'+data.student_id+'" id="'+data.student_id+'remove" title="Удалить студента" class="delE glyphicon glyphicon-remove"></button></div></td><td>'+data.student_group+'</td><td>'+data.student_course_number+'</td><td>'+data.student_birth_date+'</td><td  style="width:10%;"> <button style="margin-left:35px;" id="'+data.student_id+'" type="button" data-toggle="modal" data-target="#myModal1" title="Просмотреть историю" class="history glyphicon glyphicon-time" ></button></td></tr>';
                  $("#tableStud").prepend(str);
                    alert("Студент добавлен!");
                    
                    $("#"+data.student_id+"added").on("click",function(){
                        
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
                    $('option[value="'+data.student_group+'"].student_group_id').attr("selected","selected");
                   
                    
                    $('option[value="'+data.student_course_number+'"].student_course_number').attr("selected","selected");
                    
                    
                    $('#student_birth_date').each(function(){
                        $(this).val(data.student_birth_date);
                    });
                        
                        
                    });
                    $("#"+data.student_id+"remove").on("click",function(){
                        var res = confirm("Вы действительно хотите удалить студента?");
                        if(res){
                            $(this).parent().parent().hide();
                            studDeleteAjax(data.student_id);
                        }
                        else{
                            return false;
                        }
                    });
                  },
                error:function(){
                    alert("Ошибка при добавлении студента!");
                }
                
                
             });
        
   }); 
   

   
   // Удаление студента аякс
    $(".delS").click(function(){
       var id = $(this).val();
       var res = confirm("Вы действительно хотите удалить студента?");
       var elem=$(this);
       if (res){
       $.ajax({
        type:"POST",
        data:{student_id:id},
        url:"tabledelete",
        success:function(data){
        
        elem.parent().parent().hide();
            alert("Студент удален!");
        },
        error:function(){
            alert("Ошибка при удалении студента!");
        }
        
       });
       }else{
        return false;
       }
       
    });
    
    // спойлер добавления новой группы
    var flag2 = Boolean(true);   
        
    $('#addNewGroup').click(function(){
    if(flag2){
        flag2=false;
        $('#DeleteNewGroup').css({
            'float':'left',
            'marginLeft':'-166px',
            'marginTop':'30px'
            });
        $('.panel-heading').css({'height':'180px'});
        $('.formAddGroup').css({'marginTop':'7px','marginLeft':'1px'});
        $('#addGroupNumber').css({'marginTop':'5px'});
        $('.delGroupSelect').css({'marginTop':'13px'}).show();
        $('#addNewGroupForm').show();
        $('#DeleteGroupNumber').css({'marginTop':'-50px','marginLeft':'105px'}).show();
        }
    else{
    flag2=true;
         
        $('#addNewGroupForm').hide();
        $('#addNewGroup').css({'float':'none'});
        $('.panel-heading').css({'height':'110px'});
        $('.delGroupSelect').hide();
        $('#DeleteGroupNumber').hide();
    }
    });
    
    // модалка истории студента
    $('.history').click(function(){
        $('.nav-pills > li:last').removeClass('active');
        $('.nav-pills > li:first').addClass('active');
        $('#histTableAll').hide();
        $('#histTable').show();
        $('.histDelete').remove();
        var id = $(this).attr("id");        
        $.ajax({
            type:"POST",
            data:{student_id:id},
            dataType: "json",
            url:"adminhistory",
             success:function(data){   
                for(var i=0;i<data.history_event_name.length;i++){
                    if(data.history_event_id[i].history_event_id != 0){
                    var str =  '<option class="history_event_id" name="'+data.history_student_id[i].history_student_id+'" id="'+data.history_event_id[i].history_event_id+'" value="'+data.history_event_name[i].history_event_name+'">'+data.history_event_name[i].history_event_name +'</option>';                    
                    $('#history_event_id').append(str);
                    }
                    
                    $('.closeHistory').click(function(){
                       $('.history_event_id').remove();
                       $(".histDelete2").remove();
                    });
                    
                    $('.close').click(function(){
                       $('.history_event_id').remove();
                       $(".histDelete2").remove();
                    });
                    
                    
                                    
                }
                $('.histAllTab').attr('id',data.history_student_id[0].history_student_id);
             }
            
        })
    });
    
   $('#history_event_id').change(function(){
    var event_id =  $(this).find('option:checked').attr('id');
    var student_id =  $(this).find('option:checked').attr('name');
    $.ajax({
        type:"POST",
        data:{student_id:student_id,event_id:event_id},
        dataType: "json",
        url:"eventhistory",
        success:function(data){
            for(var i=0;i<data.history_event_id.length;i++){
            var str ='<tr><td class="histDelete">'+data.history_date[i].history_date+'</td><td class="histDelete">'+data.history_points[i].history_points+'</td><td class="histDelete">'+data.history_comment[i].history_comment+'</td></tr>';
            $("#histTbody").append(str);
            }
        }
                        
    })
    $('.histDelete').remove();
   });
    
    //переключение в модалке истории
    $('.histAllTab').click(function(){
       $('#histTable').fadeOut(100);
       $('#histTableAll').fadeIn(100);
        $('.nav-pills > li').removeClass('active');
        $('.nav-pills > li:last').addClass('active');
        var student_id = $(this).attr("id");
        
        $.ajax({
            type:"POST",
            data:{student_id:student_id},
            dataType: "json",
            url:"eventhistoryall",
            success:function(data){
                for(var i=0;i<data.history_date.length;i++){
                    var str = '<tr><td class="histDelete2">'+data.history_date[i].history_date+'</td><td class="histDelete2">'+data.history_points[i].history_points+'</td><td class="histDelete2">'+data.history_comment[i].history_comment+'</td></tr>';
                    $("#histTbody2").append(str);
                }
            }
            
        })

    });
    
    $('.histTab').click(function(){
               $(".histDelete2").remove();
               $('#histTableAll').fadeOut(100);
               $('#histTable').fadeIn(100);
        $('.nav-pills > li').addClass('active');
        $('.nav-pills > li:last').removeClass('active');
 
    });
    
    // закрытие модалки и удаление селектов
    $('#myModal').on('hidden.bs.modal', function () {
        $('.history_event_id').remove();
        $(".histDelete2").remove();
  })
    
    // передача для списания баллов
      $(".pointsAll").click(function(){
        $(".pointsColorAll").addClass("success").css({'cursor':'pointer'});
        
         $(".pointsColorAll").click(function(){
            var id = $(this).attr("id");
            $('.point-panelAll').fadeIn(1000);
            $('.okbuttonAll').fadeIn(1000);
            
            $.ajax({
                type:"POST",
                dataType: "json",
                data:{student_id:id},
                url:"adminstudpointsall",
                
                success:function(data){
                $('#allPoint_id').each(function(){
                        $(this).val(data.student_id[0].student_id);
                    });
                $('#allPoint_FirstName').each(function(){
                        $(this).val(data.first_name[0].first_name);
                    });
                $('#allPoint_Name').each(function(){
                        $(this).val(data.name[0].name);
                    });
                $('#allPoint_Patronymic').each(function(){
                        $(this).val(data.patronymic[0].patronymic);
                    });
                $('#allPoint_GroupNumber').each(function(){
                        $(this).val(data.group_number[0].group_number);
                    });
                $('#allPoint_Points').each(function(){
                        $(this).val(data.points[0].points);
                    });
                    
                    
                }
            });
         });
        });
        
        // очистка истории при закрытии модалки
        /*if(!$('#myModal1:visible')){
        $('.history_event_id').remove();
        $(".histDelete2").remove();
        }*/
        
        $('#myModal1').on('hide.bs.modal', function (e) {
            $('.history_event_id').remove();
            $(".histDelete2").remove();
        })
        
        // подтверждение удаления группы
        $('#DeleteGroupNumber').click(function(e){
          var res = confirm("При удалении группы будут удалены группа, все студенты этой группы и их история! Продолжить?");
          if(!res){
          e.preventDefault();
          }
           
            
        });
        
    // предупреждение об удаление студента при переводе на курс выше
    $('#upGroup').click(function(){
        var res = confirm("При переводе на курс выше будут удалены все студенты 4 курса! Продолжить?")
        
        if(res){
            
        }
        else{
            return false;
        }
    });
   
   });// конец Ready