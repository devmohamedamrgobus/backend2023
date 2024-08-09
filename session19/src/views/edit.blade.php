<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>edit category</h1>

        <form action="../update" method="post">
            <input type="text" value="{{$data['name']}}" name="name">
            <input type="hidden" value="{{$data['id']}}" name="id">
            <input type="submit" value="update">
        </form>
    </body>
</html>