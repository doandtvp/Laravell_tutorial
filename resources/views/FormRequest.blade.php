<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test form</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <form action="{{ url('handle-form') }}" method="POST" role="form">
        <legend>Test submit form</legend>
        <!-- //tránh tấn công xss -->
        {{ csrf_field() }}
        <div>
            <input type="text" name="name" id="" placeholder="enter your name">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
