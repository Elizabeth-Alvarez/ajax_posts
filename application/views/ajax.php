<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ajax Posts</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style media="screen">
      .post {
        display:inline-block;
        vertical-align: top;
        border: 1px solid black;
        height: 200px;
        width: 200px;
        padding: 30px;
        margin-bottom: 30px;
        margin-right: 20px;
      }
      .box {
        margin-top: 30px;
      }
    </style>
    <script type="text/javascript">
      $(document).ready(function() {
        $.get("/posts/display", function(res) {
          $('#posts').html(res);
        });
        $('form').submit(function() {
          $.post("/posts/create", $(this).serialize(), function(res) {
            $('#posts').html(res);
          });
          return false;
        });
      })
    </script>
  </head>
  <body>
    <div class="container">
      <h1>My Posts:</h1>
      <div id="posts"></div>
    </div>
    <div class="container box">
      <form role="form" action="/posts/create" method="post">
        <div class="form-group">
          <label for="text">Add A Note:</label>
          <textarea name="description" class="form-control" rows="4" cols="20"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Post It!</button>
      </form>
    </div>
  </body>
</html>
