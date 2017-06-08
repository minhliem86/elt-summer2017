<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  {!!Form::open(['route'=>'f.postimport-user', 'files'=>true])!!}
    <div>
      <label for="">Select File</label>
      {!!Form::file('file')!!}
    </div>
    <div>
      {!!Form::submit('Import')!!}
    </div>
  {!!Form::close()!!}
</body>
</html>
