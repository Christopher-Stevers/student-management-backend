<head>
  <title>Hello php</title>
</head>

<body>
  <?php
  $user = 'root';
  $pass = '';
  $db = 'testdb';
  $db_connection = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
  
  
  $db_connection->close();

  ?>
  <?php

  $rn = new DateTime();
  echo 'Rn: ' . $rn->format('m/d/Y') . PHP_EOL;
  ?>
  <p>Apparently html</p>
  
  <h2>Add Student</h2>
  <ul>
    <?php

    if ($_POST) {
      foreach ($_POST as $key => $value) {
        if ($key === 'subjects') {
          echo '<ul>';
          foreach ($value as $nested_val) {
            echo '<li>' . $nested_val . '</li>';
          }
          echo '</ul>';
        } elseif ($key === 'email') {
          echo '<li>' . $value["item1"]["item1"] .   '</li>';
        } else {
          echo '<li>' . $value . $key .   '</li>';
        }
      }
    }
    ?>
  </ul>
  <?php



  echo '
  <form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="post">
  
    <label for="email[item1][item1]">email</label>
    <input name="email[item1][item1]" type="email" />
    <label for="school">school</label>
    <input name="school" />
    <label for="subjects[item1]">subjects</label>
    <input name="subjects[item1]" />
    <button id="addSubjectBtn">add subjects</button>
    <input type="submit">
  </form>';
  ?>

</body>
<script src="scripts.js"></script>