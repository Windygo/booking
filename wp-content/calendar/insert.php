<?php
// Insert New Event
// Refer to the PHP quickstart on how to setup the environment:
// https://developers.google.com/calendar/quickstart/php
// Change the scope to Google_Service_Calendar::CALENDAR and delete any stored
// credentials.



POST https://www.googleapis.com/calendar/v3/calendars/windygo.co.il_u4vgnsknqi36hvk8l1crbuhgo4%40group.calendar.google.com/events?maxAttendees=2&sendNotifications=true&sendUpdates=all&key=AIzaSyBcJ1HJNjFr0gakkwcn440COQdp_wAxsk4 HTTP/1.1

Authorization: Bearer [YOUR_ACCESS_TOKEN]
Accept: application/json
Content-Type: application/json

{
  "summary": "Surf Lesson - 2PAX - 1 hour",
  "description": "WC ORDER # 99999, 054-8899887",
  "end": {
    "dateTime": "2019-11-30T11:00:00+02:00"
  },
  "start": {
    "dateTime": "2019-11-30T10:00:00+02:00"
  }
}