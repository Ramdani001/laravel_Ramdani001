<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ 'assets/bootstrap/css/bootstrap.css' }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css" />
  

</head>
<body>
    <div class="m-3 p-5">
        <h4>Dashboard</h4>
        <div class="d-flex">
            <button class="btn btn-primary">Add+</button>
        </div>
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>Column 1</th>
                    <th>Column 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                </tr>
                <tr>
                    <td>Row 2 Data 1</td>
                    <td>Row 2 Data 2</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ '/logout' }}">LOGOUT</a>
    </div>


    <script src="{{ 'assets/jquery.js' }}"></script>
    <script src="{{ 'assets/bootstrap/js/bootstrap.js' }}"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
</body>
</html>