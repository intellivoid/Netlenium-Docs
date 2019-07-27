<?PHP
    use DynamicalWeb\HTML;
?>
<!doctype html>
<html lang="en">

    <head>
        <title>Netlenium - Proxy Object</title>
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
                                        <h3 class="panel-title">Session Object</h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            This object represents the session details
                                        </p>
                                        <div class="right">
                                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4>Example Structure</h4>
<pre>
{
    "ID":"VLLQWS18JWLPS7PYCV824DK6RSN7C9YG",
    "Created":"7/27/2019 1:33:55 PM",
    "LastActivity":"7/27/2019 1:33:55 PM",
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
        "ID":"CDwindow-B17969EE6400BA383DF8AD3E9203945A",
        "Url":"data:,",
        "Title":""
    }
}
</pre>
                                        <br/>
                                        <h4>Variables</h4>
                                        <table class="table table-hover table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Type</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>ID</td>
                                                    <td>String</td>
                                                    <td>The session ID</td>
                                                </tr>
                                                <tr>
                                                    <td>Created</td>
                                                    <td>String</td>
                                                    <td>
                                                        Date of when this session was created
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>LastActivity</td>
                                                    <td>String</td>
                                                    <td>The date of when this session was last used</td>
                                                </tr>
                                                <tr>
                                                    <td>Driver</td>
                                                    <td>String</td>
                                                    <td>
                                                        The driver that this session is using, the possible values are
                                                        <code>chrome</code>, <code>firefox</code> and <code>opera</code>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Headless</td>
                                                    <td>Boolean</td>
                                                    <td>Indicates if the session is running in headless mode</td>
                                                </tr>
                                                <tr>
                                                    <td>ProxyConfiguration</td>
                                                    <td><a href="/object_proxy">Proxy</a></td>
                                                    <td>The proxy configuration that this session is using</td>
                                                </tr>
                                                <tr>
                                                    <td>CurrentWindow</td>
                                                    <td><a href="/object_window">Window</a></td>
                                                    <td>The current window the session is focused on</td>
                                                </tr>
                                            </tbody>
                                        </table>
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
