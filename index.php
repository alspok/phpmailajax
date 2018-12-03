<!Doctype html>
<html>
    <head>
        <title>Post form</title>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script> -->
        <!-- <?php require_once('test.php'); ?> -->
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
                <div><input class='submit' type='submit' value='Submit' /></div>
            </form><br>
        <div class='loding'>here is loader</div>
        <div class='checker'>here is checker</div>
        <div class='response'>here is response</div>
    </body>
    <script>
            document.querySelector('.submit').addEventListener('click', function(event){
                // event.preventDefault();
                var formData = document.querySelectorAll('.email-form');
                var_dump(formData);
                postAjax('test.php' '');
            });

            function postAjax(url, data, success) {
    var params = typeof data == 'string' ? data : Object.keys(data).map(
            function(k){ return encodeURIComponent(k) + '=' + encodeURIComponent(data[k]) }
        ).join('&');

    var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
    xhr.open('POST', url);
    xhr.onreadystatechange = function() {
        if (xhr.readyState>3 && xhr.status==200) { success(xhr.responseText); }
    };
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send(params);
    return xhr;
}
            

// $(document).ready(function(){
        //     $('.email-form').submit(function(event){
        //         event.preventDefault();
        //         console.log(event);
        //         console.log(event.currentTarget['email'].value);
        //         console.log(event.currentTarget['subject'].value);
        //         console.log(event.currentTarget['message'].value);

        //         if(event.currentTarget['email'].value != 'alspok@gmail.com'){
        //            return;
        //         }

        //     $('.loader').html("<b>Loading response...</b>");

        //     $.post('post_checker.php', $(this).serialize(), function(data){
        //         $('.checker').html(data);
        //         console.log(data);
        //     })

        //     $.post('phpost_receiver.php', $(this).serialize(), function(data){
        //         $('.response').html(data);
        //     }).fail(function() {
        //         alert( "Posting failed." );
        //     });
        //     return false;
        //     });
        // });
    </script>
</html>