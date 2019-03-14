<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Technical Assessment</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css">
  <script src="main.js"></script>
</head>
<body>
  <?php
    /**
     * This is the basic set up to read in the data.json file and decode this into an associated array
     * The $working_dir variable can be used for any includes you may need.
     * There is a one functions.php already being included for you.
    */
    $working_dir = getcwd();
    include ($working_dir . '/functions.php');
    $data = json_decode(file_get_contents($working_dir . '/data.json'), true);

    echo "Hello World!";
    // pre($data);
  ?>

  <!-- content goes here -->
</body>
</html>