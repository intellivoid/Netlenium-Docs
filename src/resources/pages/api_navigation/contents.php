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
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Navigation Endpoint</h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            The navigation endpoint <code>/navigation</code> allows clients to manipulate
                                            the current session's navigation.
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
   "Status":false,
   "ResponseCode":401,
   "ErrorCode":109,
   "Message":"Unauthorized Request"
}
</pre>
                                        <hr/>
                                        <h4>Session Not Found Response</h4>
                                        <br/>

<pre>
{
   "Status":false,
   "ResponseCode":404,
   "ErrorCode":108,
   "Message":"The session 'SESSION_ID' was not found"
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
                                            Load URL
                                            <span class="label label-success">GET</span>
                                            <span class="label label-danger">POST</span>
                                        </h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            <code>/navigation/load_url</code> invokes the browser to navigate to the given
                                            URL, once completed a request would be returned back
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
                                                    <td>url</td>
                                                    <td>True</td>
                                                    <td>The URL to navigate to</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <hr/>
                                        <h4>Example Success Response</h4>
                                        <span class="label label-success">GET</span> <code>http://localhost:6410/navigation/load_url?session_id=ExampleID&url=https%3A%2F%2Fgoogle.com%2F</code>
                                        <br/>

<pre>
{
   "Status":true,
   "ResponseCode":200,
   "ErrorCode":0
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
                                            Go Back
                                            <span class="label label-success">GET</span>
                                            <span class="label label-danger">POST</span>
                                        </h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            <code>/navigation/go_back</code> Goes back one page in the history.
                                        </p>
                                        <div class="right">
                                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4>Example Success Response</h4>
                                        <span class="label label-success">GET</span> <code>http://localhost:6410/navigation/go_back?session_id=ExampleID</code>
                                        <br/>

<pre>
{
   "Status":true,
   "ResponseCode":200,
   "ErrorCode":0
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
                                            Go Forward
                                            <span class="label label-success">GET</span>
                                            <span class="label label-danger">POST</span>
                                        </h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            <code>/navigation/go_forward</code> Goes forward one page in the history.
                                        </p>
                                        <div class="right">
                                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4>Example Success Response</h4>
                                        <span class="label label-success">GET</span> <code>http://localhost:6410/navigation/go_forward?session_id=ExampleID</code>
                                        <br/>

<pre>
{
   "Status":true,
   "ResponseCode":200,
   "ErrorCode":0
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
                                            Reload
                                            <span class="label label-success">GET</span>
                                            <span class="label label-danger">POST</span>
                                        </h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            <code>/navigation/reload</code> Reloads the current page.
                                        </p>
                                        <div class="right">
                                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4>Example Success Response</h4>
                                        <span class="label label-success">GET</span> <code>http://localhost:6410/navigation/reload?session_id=ExampleID</code>
                                        <br/>

<pre>
{
   "Status":true,
   "ResponseCode":200,
   "ErrorCode":0
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
            <div class="clearfix"></div>
            <?PHP HTML::importSection('footer'); ?>
        </div>
        <?PHP HTML::importSection('js_scripts'); ?>
    </body>

</html>
