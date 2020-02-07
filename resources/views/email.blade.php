<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Mail </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
        <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">Name </th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Message</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <th scope="row">{{ $request->name}}</th>
                  <th scope="row">{{ $request->email}}</th>
                  <th scope="row">{{ $request->subject}}</th>
                  <th scope="row">{{ $request->phone}}</th>
                  <th scope="row">{{ $request->message}}</th>
                   
                  </tr>
                  
                </tbody>
              </table>
</body>
</html>