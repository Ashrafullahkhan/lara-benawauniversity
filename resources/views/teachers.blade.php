<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert Image into Mysql Database in Laravel 6</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <br />
        <h3 align="center">Insert Image into Mysql Database in Laravel 6</h3>
        <br />
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <br />

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">User Form</h3>
            </div>
            <div class="panel-body">
                <br />
                <form method="post" action="{{ url('teachers/insert_image/') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">

                        <div class="row">
                            <label class="col-md-4" align="right">Enter Name</label>
                            <div class="col-md-8">
                                <select class="form-control" id="selectUser" name="lang" required focus>
                                    <option value="" disabled selected>Please select user</option>

                                    <option value="en">english</option>

                                    <option value="pa">pashto</option>

                                    <option value="da">dari</option>

                                </select>

                                <input type="text" name="name" class="form-control" />
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-4" align="right">Enter Name</label>
                            <div class="col-md-8">
                                <input type="text" name="job" class="form-control" />
                            </div </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4" align="right">Select Profile Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="pic" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group" align="center">
                            <br />
                            <br />
                            <input type="submit" name="teachers" class="btn btn-primary" value="Save" />
                        </div>
                </form>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">User Data</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th width="30%">Image</th>
                            <th width="70%">Name</th>
                        </tr>
                        @foreach ($data as $row)
                            <tr>
                                <td>
                                    <img src="/storage/{{ $row->pic }}" class="img-thumbnail" width="75" />
                                </td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->job }}</td>
                                <td> <a href="teachers/{{ $row->id }}">Edit </a></td>
                                <td>
                                    <form action="/teachers/delete/{{ $row->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button>Delete</button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </table>
                    {!! $data->links() !!}
                </div>
            </div>
        </div>
    </div>
</body>

</html>
