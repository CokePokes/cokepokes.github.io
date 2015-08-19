<?php
if ($_GET['randomId'] != "S06JqkNrCDWY8O5kgR10R4FZZzKVO52eWnpDdcLnipLLnAk1ez7iWZvLW6k5_wNr") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
