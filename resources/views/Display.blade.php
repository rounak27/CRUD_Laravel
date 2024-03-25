<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Information</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <h2>Student Information</h2>
  <table class="table">
    <thead>
        
      <tr>
        <th>ID</th>
        <th>Roll</th>
        <th>Name</th>
        <th>Address</th>
        <th>Options</th>
      </tr>
    </thead>
    <tbody>
      <!-- Sample data -->
      @foreach ($datas as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->roll }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->address }}</td>
            <td>
                <a href="/edit/{{$data->id}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="/delete/{{$data->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type='submit' value='Delete' class="btn btn-danger btn-sm"/>
                </form>
              
            </td>
         </tr>
            
        @endforeach
      <tr>
      
      <!-- Add more rows as needed -->
    </tbody>
  </table>
  <!-- Button to create new record -->
  <a href="/create" >Create New Record</button>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
