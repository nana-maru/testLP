<!DOCTYPE html>
    <html>
        <head>
            <title>Confirm</title>
            <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
            <link rel="stylesheet" href="stylesheet.css">
        </head>
        
        <body>
            <h2>お問い合わせ内容</h2>
            
            <table border=1>
            <tr>
                <td>名前:</td>
                <td> <?php
                echo $_POST["name"];
                ?></td>
            </tr>
            
            <tr>
                <td>メールアドレス:</td>
                <td> <?php
                echo $_POST["email"];
                ?> </td>
            </tr>
            
            <tr>
                <td>お問い合わせ内容:</td>
                <td> <?php
                echo $_POST["opinion"];
                ?> </td>
            </tr>
            </table>
            
            <form action="complete.php" method="post">
                <div class="button">   
                    <input type="submit" value="送信">
                </div>
    
                <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
    
                <input type="hidden" value="<?php echo $_POST['email'];?>" name="email">
    
                <input type="hidden" value="<?php echo $_POST['opinion'];?>" name="opinion">
            </form>
        </body>
    </html>