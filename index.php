<!DOCTYPE html><html lang="en">
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="javascript"></script>
  <script type="text/javascript" src="js/app.js" language="javascript"></script>
  <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.min.css" type="text/css" rel="stylesheet" />
  <link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
  <div class="container-fluid">
    <div class="row-fluid">
      <h2>Chat with Parse REST API</h1>
      <table class="table table-bordered table-striped">
	<caption>Messages</caption>
	<thread>
	  <tr>
	    <th>
	      username
	    </th>
	    <th>
	      Message
	    </th>
	  </tr>
	</thread>
	<tbody>
	  <tr>
	    <td colspan="2">No messages</td>
	  </tr>
	</tbody>
      </table>
    </div>
    <div class="row-fluid">
      <form id="new-user">
	<input type="text" name="username" placeholder="Username" />
	<input type="text" name="message" placeholder="Message" />
	<a id="send" class="btn btn-primary">SEND</a>
      </form>
    </div>
  </div>
</body>
</html>

