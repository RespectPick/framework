<h2>����� ��� ���������� �������.</h2>
  <form method="POST" action="/frame/formeventsuccess">
  <input type="hidden" name="event_id" value="{$Event.event_id}" ><br>
  ������� ����� �������
  <input type="text" name="event_name" value="{$Event.event_name}" size="30"><br>
  ������� ���� ������
  
  <input name="event_period_start" type="date" value="{$Event.event_period_start}"></br>
 
 ������� ���� ���������
 <input name="event_period_end" type="date" value="{$Event.event_period_end}"/></br>
  <input type="hidden" name="Location" value="addEventForm">
  <input type="submit" value="�������� ������ ��������">
  </form>