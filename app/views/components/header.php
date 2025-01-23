<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/main.css">
    <title><?= $title ?? "Blog"?></title>
  </head>
  <body>
    <div class="wrapper">
      <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
          <div class="container-fluid">
              <a class="navbar-brand" href="https://blog.loc/index.php">Blog</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="https://blog.loc/index.php">Home</a>
                  <a class="nav-link" href="https://blog.loc/contacts.php">Contacts</a>
                </div>
              </div>
          </div>
        </nav>
      </header>