<!DOCTYPE html>
<html>
<head>
 <title>Laravel 8 Send Email Example</title>
</head>
<body>

<p>Hello {{$fullname}},</p>
<br />
<p>Name Event: {{$name_events}}</p>
<p>Time Start: {{ date('d/m/Y : H:i:s', strtotime($timestart)) }}</p>
<p>Time End: {{ date('d/m/Y : H:i:s', strtotime($timeend)) }}</p>

<p>Thank you for booking this event trip</p>
<p>Number of tickets booked: {{$adult+$children}}</p>
<p>With sticket adult:{{$adult}}</p>
<p>And sticket children:{{$children}}</p>
<p>Code to join the event:{{$code}}</p>
<p>Have a beautiful day!</p>
<p>If you still have questions, please contact us directly at</p>
<p>Email: quangvinhnguyen4523@gmail.com</p>
<p>Facebook:<a href="https://www.facebook.com/quanggvinhh09/"> Quang Vinh </a></p>
<br />
<p>[Jenkinson Sea Life]</p>

</body>
</html>