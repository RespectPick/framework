   <table border=1>
   <tr>
   <td>���������/��������</td>
   <td>�������</td>
   <td>���</td>
   <td>��������</td>
   <td>���� ��������</td>
   <td>����� �����</td>
	
	{foreach item=stud from=$AbitArray}
	 {/foreach}
	{foreach item=event from=$stud.event_name}
   <td>{$event.event_name}<br />
   <a href="formevent/?event_id={$event.event_id}"><img src="assets/img/��������.png"><br>
   <a href="eventdelete/?event_id={$event.event_id}"><img src="assets/img/�������.png" alt="�������" ></a> </td>
   {/foreach}
   </tr>
   {foreach item=stud from=$AbitArray}
   <tr>
   <td><a href="formstudent/?student_id={$stud.student_id}"><img src="assets/img/��������.png"><br>
		<a href="tabledelete/?student_id={$stud.student_id}"><img src="assets/img/�������.png" alt="�������" ></a>
   
   </td>
   <td>{$stud.student_first_name}</td>
   <td>{$stud.student_name}</td>
   <td>{$stud.student_patronymic}</td>
   <td>{$stud.student_birth_date}</td>
   <td>{$stud.student_course_number}</td>
	{foreach item=event from=$stud.event_name}
	<td><p style="empty-cells: show;"></p></td>
	{/foreach}
   </tr>
   {/foreach}
   </table>
