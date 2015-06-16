<h2>форма для добавления в таблицу нового студента.</h2>
  <form method="POST" action="/frame/formstudentsuccess">
  <input type="hidden" name="student_id" value="{$Student.student_id}"><br>
  Введите новую фамилию
  <input type="text" name="student_first_name" value="{$Student.student_first_name}"><br>
  Введите новое имя
  <input type="text" name="student_name" value="{$Student.student_name}"><br>
  Введите новое отчество
  <input type="text" name="student_patronymic" value={$Student.student_patronymic}><br>
   Выберите группу
      <select name="groups" size="1">
         {foreach item=group from=$Group}
            <option value="{$group.group_id}" {if $group.group_id==$Student.student_group_id}selected{/if}>{$group.group_number}</option>
         {/foreach}
      </select></br>
  Выберите номер курса
  <select name="course_number" size="1">
  {foreach item=course_number from=$Course}
<option value="{$course_number.student_course_number}" {if $course_number.student_course_number==$Student.student_course_number}selected{/if}>{$course_number.student_course_number}</option>
 {/foreach}
  </select></br>
  Введите дату рождения
  <!--<input name="birth_dates" type="date" max="2099-04-20" min="1980-04-10" value="2000-01-01"/></br>-->
    <input name="birth_dates" type="date" value="{$Student.student_birth_date}"/></br>
 
 
  <input type="hidden" name="Location" value="addStudForm">
  <input type="submit" value="Добавить нового студента">
  </form>