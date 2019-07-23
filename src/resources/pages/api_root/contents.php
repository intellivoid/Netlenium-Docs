<?PHP
    use DynamicalWeb\HTML;
?>
<!doctype html>
<html lang="en">

    <head>
        <title>Netlenium - API Usage '/'</title>
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
                                        <h3 class="panel-title">Root Endpoint</h3>
                                    </div>
                                    <div class="panel-body">

                                        <p>
                                            The root endpoint <code>/</code> will return details about
                                            the Netlenium Server or return an error if you lack authentication.
                                            Both <span class="label label-success">GET</span> or
                                            <span class="label label-danger">POST</span> request methods are
                                            allowed
                                        </p>
                                        <br/>

                                        <h4>Parameters</h4>
                                        <table class="table table-hover">
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
                                                    <td>Optional</td>
                                                    <td>Authentication Password used if authentication is required</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <hr/>
                                        <h4>Example Success Response</h4>
                                        <span class="label label-success">GET</span> <code>http://127.0.0.1:6410/</code>
                                        <br/>

<pre>
{
   "Status":true,
   "ResponseCode":200,
   "ServerDetails":{
      "ServerName":"Netlenium",
      "ServerVersion":"1.0.0.0",
      "ChromeDriversDisabled":false,
      "OperaDriversDisabled":false,
      "FirefoxDriversDisabled":false,
      "DefaultDriver":"chrome",
      "CurrentSessions":0,
      "MaximumSessions":100,
      "SessionInactivityLimit":10
   }
}
</pre>
                                        <p>
                                            The given response will return a <a href="/object_server">ServerDetails</a>
                                            object containing information about the server and it's limitations
                                        </p>

                                        <hr/>
                                        <h4>Authentication Required Response</h4>
                                        <span class="label label-success">GET</span> <code>http://127.0.0.1:6410/</code>
                                        <br/>

                                        <pre>
{
   "Message":"Unauthorized Request",
   "Status":false,
   "ResponseCode":401
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
