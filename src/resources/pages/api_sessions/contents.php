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
                                        <h3 class="panel-title">Sessions Endpoint</h3>
                                    </div>
                                    <div class="panel-body">

                                        <p>
                                            The sessions endpoint <code>/sessions</code> allows clients to create a
                                            new session or close an existing one. Both <span class="label label-success">GET</span>
                                            or <span class="label label-danger">POST</span> request methods are allowed
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
                                                    <td>False</td>
                                                    <td>Authentication Password used if authentication is required</td>
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

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Create a new Session</h3>
                                    </div>
                                    <div class="panel-body">

                                        <p>
                                            <code>/sessions/create</code> allows you to create a new session, you can
                                            provide a optional proxy configuration or specify the target browser you
                                            want to use. When you create a new session you will be given a Session ID
                                            which is required for many other methods
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
                                                    <td>target_browser</td>
                                                    <td>False</td>
                                                    <td>
                                                        Specify the target browser to use, the available options are
                                                        <code>chrome</code>, <code>firefox</code> and <code>opera</code>. If
                                                        no option is provided, the server will use the default browser which
                                                        is recommended.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>proxy_host</td>
                                                    <td>False</td>
                                                    <td>
                                                        The host of the proxy if you wish to use a proxy configuration
                                                        for this session, eg; <code>8.8.8.8</code>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>proxy_port</td>
                                                    <td>True if <code>proxy_host</code> is provided</td>
                                                    <td>
                                                        The port of the given proxy, eg; <code>8080</code>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>proxy_scheme</td>
                                                    <td>True if <code>proxy_host</code> is provided</td>
                                                    <td>
                                                        The scheme to use for this proxy, the available options are
                                                        <code>http</code> or <code>https</code>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>proxy_username</td>
                                                    <td>False</td>
                                                    <td>
                                                        If authentication is required to connect, it can be provided
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>proxy_password</td>
                                                    <td>True if <code>proxy_username</code> is provided</td>
                                                    <td>
                                                        The password required to complete the authentication
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <hr/>
                                        <h4>Example Success Response</h4>
                                        <span class="label label-success">GET</span> <code>http://127.0.0.1:6410/sessions/create?target_browser=chrome</code>
                                        <br/>

<pre>
{
   "Status":true,
   "ResponseCode":200,
   "SessionId":"L14KII5WLAAJ29GQOJJIBX6LT2S5MPX1"
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
                                        <h3 class="panel-title">Close Session</h3>
                                    </div>
                                    <div class="panel-body">

                                        <p>
                                            <code>/sessions/close</code> allows you to close an existing session, this
                                            closes the browser and web driver.
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
                                                    <td>session_id</td>
                                                    <td>True</td>
                                                    <td>The ID of the session to close</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <hr/>
                                        <h4>Example Success Response</h4>
                                        <span class="label label-success">GET</span> <code>http://127.0.0.1:6410/sessions/close?session_id=L14KII5WLAAJ29GQOJJIBX6LT2S5MPX1</code>
                                        <br/>

<pre>
{
   "Status":true,
   "ResponseCode":200
}
</pre>

                                        <hr/>
                                        <h4>Response given if the session was not found</h4>
                                        <span class="label label-success">GET</span> <code>http://127.0.0.1:6410/sessions/close?session_id=VFHXLB6O52QWH3UAZU089TIFDSUWL41L</code>
                                        <br/>

<pre>
{
   "Message":"The session 'VFHXLB6O52QWH3UAZU089TIFDSUWL41L' was not found",
   "Status":false,
   "ResponseCode":404
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