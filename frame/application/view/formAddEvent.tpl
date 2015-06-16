<h2>форма для добавления события.</h2>
  <form method="POST" action="/frame/formeventsuccess">
  <input type="hidden" name="event_id" value="{$Event.event_id}" ><br>
  Введите новое событие
  <input type="text" name="event_name" value="{$Event.event_name}" size="30"><br>
  Введите дату начала
  
  <input name="event_period_start" type="date" value="{$Event.event_period_start}"></br>
 
 Введите дату окончания
 <input name="event_period_end" type="date" value="{$Event.event_period_end}"/></br>
  <input type="hidden" name="Location" value="addEventForm">
  <input type="submit" value="Добавить нового студента">
  </form>