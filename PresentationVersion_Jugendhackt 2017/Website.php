<?php $title="Navbar"; ?>
<!DOCTYPE html>
<html>
  <head>
    <title> Home </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

  </head>
  <body>

      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"><?php echo $title; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="./plans.php">was könnt ihr tun?</a>
                <a class="dropdown-item" href="./Auswirkungen.php">Auswirkungen</a>
                <a class="dropdown-item" href="./credits.php">Crediting</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

      <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
          <div class="container">
            <h1 class="display-3">Media Literacy</h1>
            <p> Wilkommen bei <b> Media Literacy </b>, dem Forum, dass sich einzig und allein der
            Bildung zu Media Literacy widmet, in diesem Forum finden sie weitreichende Themenfelder
          und Bereiche, und wir laden sie herzlich dazu ein, hier herumzustöbern, und sich über Media
        Literacy zu informieren.</p>
            <p><a class="btn btn-primary btn-lg" href="./Auswirkungen.php" role="button"> Wieso ist das wichtig? &raquo;</a></p>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h2>USA</h2>
              <p> Eine Analyse der Statistiken und graphen aus den USA, die während dem vergangenem Wahlkampf
              sowohl von der Rechten und Linken zur verwirrung und polarisierung der Massen geführt hat.</p>
              <p><a class="btn btn-secondary" href="./list_usa.php" role="button">Los Gehts! &raquo;</a></p>
            </div>
            <div class="col-md-4">
              <h2>Deutschland</h2>
              <p> Benutzung von Statistiken zur polarisierung der Massen, unter anderem bei der aktuellen
                Bundestagswahl. </p>
              <p><a class="btn btn-secondary" href="./list_ger.php" role="button">Los Gehts! &raquo;</a></p>
            </div>
            <div class="col-md-4">
              <h2>Großbritannien</h2>
              <p> Wie irreführende Zahlen und statistiken, unter anderem zu einem Brexit geführt haben (350£ Millionen die Woche) </p>
              <p><a class="btn btn-secondary" href="./list_gb.php" role="button">Los Gehts! &raquo;</a></p>
            </div>
            <div class="col-md-4">
              <h2>International</h2>
              <p> Ein Überlick über verfälschte Medien, welche in keine der Anderen Kategorien passt. </p>
              <p><a class="btn btn-secondary" href="./list_int.php" role="button">Los Gehts! &raquo;</a></p>
            </div>
            <div class="col-md-4">
              <h2>Unternehmen</h2>
              <p> Analysis der verfälschten bzw. Manipulierten Statistiken, welche von Unternehmen genutzt werden,
                 um die popularität ihrer Produkte zu steigern, wie z.B. Apple, Nissan etc. </p>
              <p><a class="btn btn-secondary" href="./list_cor.php" role="button">Los Gehts! &raquo;</a></p>
            </div>
          </div>

          <hr>

        </div> <!-- /container -->

      </main>

      <footer class="container">
        <p>&copy; Conn, Goyal, Krifka-Dobes 2017</p>
      </footer>

      <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
      <script src="../../../../assets/js/vendor/popper.min.js"></script>
      <script src="../../../../dist/js/bootstrap.min.js"></script>
    </body>
</html>
