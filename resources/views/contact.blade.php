<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container p-5">
        <form action="{{ route('mail') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email" class=form-label>Email</label>
                <input type="text" name="email" id="emal" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone" class=form-label>phone</label>
                <input type="text" name="phone" id="phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="Message" class=form-label>Message</label>
                <textarea name="message" id="Message" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group mt-3">
                <input type="submit" name="send mail" id="send-mail" class="btn btn-primary float-end">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>