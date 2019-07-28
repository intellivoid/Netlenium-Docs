<?PHP
    use DynamicalWeb\HTML;
?>
<!doctype html>
<html lang="en">

    <head>
        <title>Netlenium - API Usage '/sessions'</title>
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
                                        <br/>
                                        <p class="panel-subtitle">
                                            The sessions endpoint <code>/sessions</code> allows clients to create a
                                            new session or close an existing one.
                                        </p>
                                        <div class="right">
                                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        </div>
                                    </div>
                                    <div class="panel-body">
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
                                            </tbody>
                                        </table>

                                        <hr/>
                                        <h4>Authentication Required Response</h4>
                                        <br/>

<pre>
{
   "Status":false,
   "ResponseCode":401,
   "ErrorCode":109,
   "Message":"Unauthorized Request"
}
</pre>

                                    </div>
                                    <div class="panel-footer">
                                        <h5>
                                            <a href="https://github.com/intellivoid/Netlenium-Public/issues/new">Report mistake / suggest improvement</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            Create a new Session
                                            <span class="label label-success">GET</span>
                                            <span class="label label-danger">POST</span>
                                        </h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            <code>/sessions/create</code> allows you to create a new session, you can
                                            provide a optional proxy configuration or specify the target driver you
                                            want to use. When you create a new session you will be given a Session ID
                                            which is required for many other methods
                                        </p>
                                        <div class="right">
                                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4>Parameters</h4>
                                        <table class="table table-hover table-responsive" style="display: block;">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Required</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>target_driver</td>
                                                    <td>False</td>
                                                    <td>
                                                        Specify the target driver to use, the available options are
                                                        <code>chrome</code>, <code>firefox</code> and <code>opera</code>. If
                                                        no option is provided, the server will use the default driver which
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
                                        <span class="label label-success">GET</span> <code>http://localhost:6410/sessions/create?target_driver=chrome</code>
                                        <br/>

<pre>
{
   "Status":true,
   "ResponseCode":200,
   "ErrorCode":0,
   "SessionId":"ExampleID"
}
</pre>

                                    </div>
                                    <div class="panel-footer">
                                        <h5>
                                            <a href="https://github.com/intellivoid/Netlenium-Public/issues/new">Report mistake / suggest improvement</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            Close Session
                                            <span class="label label-success">GET</span>
                                            <span class="label label-danger">POST</span>
                                        </h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            <code>/sessions/close</code> allows you to close an existing session, this
                                            closes the web driver and web browser process.
                                        </p>
                                        <div class="right">
                                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        </div>
                                    </div>
                                    <div class="panel-body">
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
                                                    <td>session_id</td>
                                                    <td>True</td>
                                                    <td>The ID of the session to close</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <hr/>
                                        <h4>Example Success Response</h4>
                                        <span class="label label-success">GET</span> <code>http://localhost:6410/sessions/close?session_id=ExampleID</code>
                                        <br/>

<pre>
{
   "Status":true,
   "ResponseCode":200,
   "ErrorCode":0
}
</pre>

                                        <hr/>
                                        <h4>Response given if the session was not found</h4>
                                        <span class="label label-success">GET</span> <code>http://localhost:6410/sessions/close?session_id=ExampleID</code>
                                        <br/>

<pre>
{
   "Status":false,
   "ResponseCode":404,
   "ErrorCode":108,
   "Message":"The session 'ExampleID' was not found"
}
</pre>

                                    </div>
                                    <div class="panel-footer">
                                        <h5>
                                            <a href="https://github.com/intellivoid/Netlenium-Public/issues/new">Report mistake / suggest improvement</a>
                                        </h5>
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
