<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</head>
<body>
<input id="myInput" type="text" placeholder="Search..">
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Birthday</th>
    </tr>
    </thead>
    <tbody id="myTable">
    <tr>
        <td>thuyduong</td>
        <td>thuongduy24111998@gmail.com</td>
        <td>1/1/2000</td>
    </tr>
    <tr>
        <td>admin</td>
        <td>admin@gmail.com</td>
        <td>1/1/2000</td>
    </tr>
    <tr>
        <td>adb</td>
        <td>def@gmail.com</td>
        <td>1/1/2000</td>
    </tr>
    </tbody>
</table>
</body>
</html>