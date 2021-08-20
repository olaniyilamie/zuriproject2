<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('icons/css/all.min.css')}}">

        <title>ALL MESSAGES</title>
        <style type="text/css">
        </style>
    </head>
    <body>
        <h2 class="font-weight-bold text-center">MESSAGES FROM CONTACT FORM</h2>
        <table class="table table-hover table-bordered table-sm ">
            
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phonenumber</th>
                <th>Subject</th>
                <th>Details</th>
                <th>Date and Time</th>
            </tr>

            @foreach($getback  as $use)
            <tr>
                <td>{{$use->name}}</td>
                <td>{{$use->email}}</td>
                <td>{{$use->number}}</td>
                <td>{{$use->subject}}</td>
                <td>{{$use->detail}}</td>
                <td>{{$use->created_at}}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>