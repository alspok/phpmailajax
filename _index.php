<!Doctype html>
<html>
    <head>
        <title>Post form</title>
        <!-- <?php require_once 'test.php'; ?> -->
        <!-- <?php require_once 'post_receiver.php'; ?> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script> -->
    </head>
    <body>
        <h1>Send and archive email message. js post method.</h1>
        <form class='email-form' method='post'>
                <p>Email:</p>
                <div><input type='text' name='email' /></div>
                <p>Subject:</p>
                <div><input type='text' name='subject' /></div>
                <p>Message:</p>
                <div><textarea name='message' cols='40' rows='8' ></textarea></div><br>
                <div><input class='submit' type='submit' name='submit' value='Submit' /></div>
            </form><br>
        <div class='loding'>here is loader</div>
        <div class='checker'>here is checker</div>
        <div class='response'>here is response</div>
        <!-- 
        <script>
            //debugger;
            var formData = document.querySelectorAll('.email-form');
            console.log(formData);
            var xhr = new XMLHttpRequest();
            var url ='test.php';
            xhr.open("POST", 'test.php');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send(formData);
            document.querySelector('.response').innerHTML = 'processing....';
        </script>
         -->
    </body>
</html>