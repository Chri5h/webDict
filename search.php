
  <?php

    include('connection.php');

    if (isset($_POST['searchMain'])) {

      $search = htmlentities(strip_tags(trim($_POST['search'])));

      if ($search == '*') {

        $getAll = $conn->prepare("SELECT * FROM contents");
        $getAll->execute();
        $resultArray = array();

        while ($row = $getAll->fetch(PDO::FETCH_OBJ)) {
          $resultArray[] = $row;
          // get all fields
        }

        include('searchresult.php');

      } else {

        $getresult = $conn->prepare("SELECT * FROM contents WHERE word LIKE '$search%'");
        $getresult->execute();
        $count = $getresult->rowCount();

        if ($count >= 1) {

          $resultArray = array();

          while ($row = $getresult->fetch(PDO::FETCH_OBJ)) {
            $resultArray[] = $row;
            // get all fields
          }

          include ('searchresult.php');

          // echo json_encode($resultArray);

        } else {

          echo "<h4>No result found</h4>";

        }

      }

    } else {

      echo "Not Set";

    }



   ?>
