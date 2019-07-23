<?PHP
    use DynamicalWeb\HTML;
?>
<!doctype html>
<html lang="en">

    <head>
        <title>Netlenium - API Usage '/navigation'</title>
        <?PHP HTML::importSection('header'); ?>
    </head>

    <body>
        <div id="wrapper">
            <?PHP HTML::importSection('navbar'); ?>
            <?PHP HTML::importSection('sidebar'); ?>
            <div class="main">
                <!-- MAIN CONTENT -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Navigation Endpoint</h3>
                                    </div>
                                    <div class="panel-body">

                                        <p>
                                            The navigation endpoint <code>/navigation</code> allows clients to manipulate
                                            the current session's navigation. Both <span class="label label-success">GET</span>
                                            or <span class="label label-danger">POST</span> request methods are allowed
                                        </p>
                                        <br/>

                                        <h4>Parameters</h4>
                                        <table class="table table-hover table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Required</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>auth</td>
                                                    <td>False</td>
                                                    <td>Authentication Password used if authentication is required</td>
                                                </tr>
                                                <tr>
                                                    <td>session_id</td>
                                                    <td>True</td>
                                                    <td>The ID of the session to manipulate</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <hr/>
                                        <h4>Authentication Required Response</h4>
                                        <br/>

<pre>
{
   "Message":"Unauthorized Request",
   "Status":false,
   "ResponseCode":401
}
</pre>
                                        <hr/>
                                        <h4>Session Not Found Response</h4>
                                        <br/>

<pre>
{
   "Status":false,
   "ResponseCode":404,
    "Message":"The session 'SESSION_ID' was not found"
}
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Load URL</h3>
                                    </div>
                                    <div class="panel-body">

                                        <p>
                                            <code>/navigation/load_url</code> invokes the browser to navigate to the given
                                            URL, once completed a request would be returned back
                                        </p>
                                        <br/>

                                        <h4>Parameters</h4>
                                        <table class="table table-hover table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Required</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>url</td>
                                                    <td>True</td>
                                                    <td>The URL to navigate to</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <hr/>
                                        <h4>Example Success Response</h4>
                                        <span class="label label-success">GET</span> <code>http://127.0.0.1:6410/navigation/load_url?session_id=ExampleID&url=https%3A%2F%2Fgoogle.com%2F</code>
                                        <br/>

<pre>
{
   "Status":true,
   "ResponseCode":200
}
</pre>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Go Back</h3>
                                    </div>
                                    <div class="panel-body">

                                        <p>
                                            <code>/navigation/go_back</code> Goes back one page in the history.
                                        </p>
                                        <br/>

                                        <h4>Example Success Response</h4>
                                        <span class="label label-success">GET</span> <code>http://127.0.0.1:6410/navigation/go_back?session_id=ExampleID</code>
                                        <br/>

<pre>
{
   "Status":true,
   "ResponseCode":200
}
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Go Forward</h3>
                                    </div>
                                    <div class="panel-body">

                                        <p>
                                            <code>/navigation/go_forward</code> Goes forward one page in the history.
                                        </p>
                                        <br/>

                                        <h4>Example Success Response</h4>
                                        <span class="label label-success">GET</span> <code>http://127.0.0.1:6410/navigation/go_forward?session_id=ExampleID</code>
                                        <br/>

<pre>
{
   "Status":true,
   "ResponseCode":200
}
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Reload</h3>
                                    </div>
                                    <div class="panel-body">

                                        <p>
                                            <code>/navigation/reload</code> Reloads the current page.
                                        </p>
                                        <br/>

                                        <h4>Example Success Response</h4>
                                        <span class="label label-success">GET</span> <code>http://127.0.0.1:6410/navigation/reload?session_id=ExampleID</code>
                                        <br/>

<pre>
{
   "Status":true,
   "ResponseCode":200
}
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN -->
            <div class="clearfix"></div>
            <?PHP HTML::importSection('footer'); ?>
        </div>
        <?PHP HTML::importSection('js_scripts'); ?>
    </body>

</html>
