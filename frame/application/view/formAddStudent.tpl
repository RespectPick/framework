<h2>����� ��� ���������� � ������� ������ ��������.</h2>
  <form method="POST" action="/frame/formstudentsuccess">
  <input type="hidden" name="student_id" value="{$Student.student_id}"><br>
  ������� ����� �������
  <input type="text" name="student_first_name" value="{$Student.student_first_name}"><br>
  ������� ����� ���
  <input type="text" name="student_name" value="{$Student.student_name}"><br>
  ������� ����� ��������
  <input type="text" name="student_patronymic" value={$Student.student_patronymic}><br>
   �������� ������
      <select name="groups" size="1">
         {foreach item=group from=$Group}
            <option value="{$group.group_id}" {if $group.group_id==$Student.student_group_id}selected{/if}>{$group.group_number}</option>
         {/foreach}
      </select></br>
  �������� ����� �����
  <select name="course_number" size="1">
  {foreach item=course_number from=$Course}
<option value="{$course_number.student_course_number}" {if $course_number.student_course_number==$Student.student_course_number}selected{/if}>{$course_number.student_course_number}</option>
 {/foreach}
  </select></br>
  ������� ���� ��������
  <!--<input name="birth_dates" type="date" max="2099-04-20" min="1980-04-10" value="2000-01-01"/></br>-->
    <input name="birth_dates" type="date" value="{$Student.student_birth_date}"/></br>
 
 
  <input type="hidden" name="Location" value="addStudForm">
  <input type="submit" value="�������� ������ ��������">
  </form>