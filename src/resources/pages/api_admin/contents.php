<?PHP
    use DynamicalWeb\HTML;
?>
<!doctype html>
<html lang="en">

    <head>
        <title>Netlenium - API Usage '/admin'</title>
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
                                        <h3 class="panel-title">Admin Endpoint</h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            The admin endpoint <code>/admin</code> allows you to administrate
                                            the Netlenium Server.
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
                                                    <td>
                                                        Admin Authentication Password used if authentication is required
                                                        (Normal authentication will not work)
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

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
                                            Get Active Sessions
                                            <span class="label label-success">GET</span>
                                            <span class="label label-danger">POST</span>
                                        </h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            <code>/admin/active_sessions</code> returns an array of
                                            <a href="/object_session">Session</a> objects which represents the current
                                            sessions that are currently active
                                        </p>
                                        <div class="right">
                                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4>Example Success Response</h4>
                                        <span class="label label-success">GET</span> <code>http://localhost:6410/admin/active_sessions</code>
                                        <br/>

<pre>
{
   "Status":true,
   "ResponseCode":200,
   "ErrorCode":0,
   "Sessions":[
      {
         "ID":"5VMA3GOM2J2S8M71Z7ZCENQLT1WICSW1",
         "Created":"7/27/2019 12:28:21 AM",
         "LastActivity":"7/27/2019 12:28:21 AM",
         "Driver":"chrome",
         "Headless":true,
         "ProxyConfiguration":{
            "Enabled":false,
            "Scheme":"http",
            "Host":"0.0.0.0",
            "Port":8080,
            "AuthenticationRequired":false,
            "Username":"",
            "Password":""
         },
         "CurrentWindow":{
            "ID":"CDwindow-AF323AA5F7ABF4096E139C1CCC42EA39",
            "Url":"data:,",
            "Title":""
         }
      }
   ]
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
