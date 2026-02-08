<Doctype html>
<head>
</head>
<body>
    <?php
    echo "this is php language";
    $search =$_POST['sName'];
    ?>
    <script type="text/javascript">
        var xhr = new XMLHttpRequest();
        var apiKey = 'your given api key';
        var g = "<?php echo"$search"?>";
        document.write(g);
        // alert(g);
        var u = 'url'; // url from
        var l = '/html';
        var url = u + g + l;
        console.log(url);

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200){
                alert(xhr.responseText);
					console.log(xhr.responseText);
					var response = xhr.responseText;
                    var element = document.querySelector('#title');  // Hash# sign required
					if (element) {
						element.textContent = response;
						}
                    xhr.setRequestHeader("Authorization", "Bearer" +apiKey); //see developer mozilla
						// xhr.open('GET', url,true);
						xhr.setRequestHeader('Api-User-Agent', 'example.com'); //or add your website where to populate parsed data
						xhr.setRequestHeader('Content-Type', 'application/json');
						xhr.setRequestHeader('Content-Type', 'text/html');
				}
						}
						xhr.open('GET', url,true);
						xhr.send(null);//success after week	high priority 
        </script>


    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <lable> Search </lable>
    <input type = "text"  name = "sName" id = "sN" >
    <input type="submit" value="search">
    Result: <span id="title"></span>
</form>
    <!-- <button onclick="vF()">Search</button>  -->
   
</body>
</html>
