<?php

move_uploaded_file($_FILES["dosya"]["tmp_name"],'upload/'.uniqid().'.jpg');

?>