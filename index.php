<!Doctype html>
<html>
    <head>
        <title>Ajax post form</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
    </head>
    <body>
        <h1>Send and archive email message. ajax post method.</h1>
        <form class='email-form'>
                <p>Email:</p>
                <div><input type='text' name='email' /></div>
                <p>Subject:</p>
                <div><input type='text' name='subject' /></div>
                <p>Message:</p>
                <div><textarea name='message' cols='40' rows='8' ></textarea></div><br>
                <div><input class='submit' type='submit' value='Submit' /></div>
            </form><br>
        <div class='response'>here is respons</div>
        <script>
        $(document).ready(function(){
            $('.email-form').submit(function(event){
                console.log(event);
                console.log(event.currentTarget['email'].value);
                console.log(event.currentTarget['subject'].value);
                console.log(event.currentTarget['message'].value);
                if(event.currentTarget['email'].value != 'alspok@gmail.com'){
                    event.preventDefault();
                }
            $('.response').html("<b>Loading response...</b>");
            $.post('post_receiver.php', $(this).serialize(), function(data){
                $('.response').html(data);
            }).fail(function() {
                alert( "Posting failed." );
            });
            return false;
            });
        });
        </script>
    </body>
</html>