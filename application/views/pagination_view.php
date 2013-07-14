<html>
    <head>
	<title></title>
    </head>
    <body>
         <div id="container">
              <h1>Countries</h1>
              <div id="body">
                <?php
                foreach($results as $data) {
                    echo $data->item_id . " - " . $data->title . "<br>";
                }
                ?>
               <p><?php echo $links; ?></p>
              </div>
              <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
         </div>
    </body>
</html>