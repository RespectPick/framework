   <table border=1>
   <tr>
   <td>Изменение/удаление</td>
   <td>Фамилия</td>
   <td>Имя</td>
   <td>Отчество</td>
   <td>Дата рождения</td>
   <td>Номер курса</td>
	
	{foreach item=stud from=$AbitArray}
	 {/foreach}
	{foreach item=event from=$stud.event_name}
   <td>{$event.event_name}<br />
   <a href="formevent/?event_id={$event.event_id}"><img src="assets/img/Изменить.png"><br>
   <a href="eventdelete/?event_id={$event.event_id}"><img src="assets/img/Удалить.png" alt="Удалить" ></a> </td>
   {/foreach}
   </tr>
   {foreach item=stud from=$AbitArray}
   <tr>
   <td><a href="formstudent/?student_id={$stud.student_id}"><img src="assets/img/Изменить.png"><br>
		<a href="tabledelete/?student_id={$stud.student_id}"><img src="assets/img/Удалить.png" alt="Удалить" ></a>
   
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
