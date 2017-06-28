<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Client App</title>
<script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
</head>
<body>
<script>
    jQuery.ajax({
method: 'POST',
url: 'http://rest-service.server/user/welcome',
headers: {'X-AUTH-TOKEN': 'some-auth-token-here'},
data: JSON.stringify({name: 'John'}),
dataType: 'json',
contentType: 'application/json',
success: function (response) {
console.log(response.data);
        }
    });
</script>
</body>
</html>
