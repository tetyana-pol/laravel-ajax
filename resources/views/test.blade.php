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
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('components/bootstrap/js/bootstrap.js')}}"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
	<div id="wrapper">
	
	<table class="table table-bordered">
	
	<thead class="thead-inverse">
    <tr>
      <th>icon</th>
      <th>date</th>
      <th>name</th>
      <th>phone</th>
      <th>email</th>
	  </tr>
  </thead>
  <tbody>	
	@foreach($leads as $lead)
	<tr id="idsho{{$lead->id}}">
	<td></td>
	<td>
			{{$lead->date}}
			</td>
			<td>
				{{$lead->name}}</td>
				

			
			<td>
				{{$lead->phone}}
			</td>
			<td>
				{{$lead->email}}
			</td>

</tr>
<script>
$('#idsho{{$lead->id}}').click(function(){

    $.ajax({type: 'GET',
		url: '{{route('idshow',['id'=>$lead->id])}}',
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		dataType: 'json',
		success: function(data){
			
        $('.table').remove();
		var table = "<table class=\"tb-1 table table-striped table-bordered table-hover dataTable no-footer dtr-inline\"><tbody>";
                        table += "<tr><td>icon</td><td></td></tr>";
                        table += "<tr><td>date</td><td>" + data['date'] + "</td></tr>";
                        table += "<tr><td>name</td><td>"+ data['name'] +"</td></tr>";
                        table += "<tr><td>phone</td><td>"+ data['phone'] +"</td></tr>";
                        table += "<tr><td>email</td><td>" + data['email'] + "</td></tr>";
                        
                          table += "</tbody></table>";
	$('#wrapper').append(table);

    }});
});
</script>
	@endforeach
	</tbody>
	</table>
	</div>
    </body>
</html>
