<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
	<title></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   
    <!-- Bootstrap -->
    <link href="{{asset('components/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('components/bootstrap/js/bootstrap.js')}}"></script>
	
	<table class="table table-bordered table-reflow">
	
	<thead>
    <tr>
      <th>icon</th>
      <th>date</th>
      <th>name</th>
      <th>phone</th>
      <th>email</th>
	  </tr>
  </thead>
  <tbody>	
	
	<tr>
	<td></td>
	<td>
			{{$lead->date}}
			</td>
			<td>
				{{$lead->name}}
			</td>
			<td>
				{{$lead->phone}}
			</td>
			<td>
				{{$lead->email}}
			</td>

</tr>
	
	</tbody>
	</table>
    </body>
</html>
