<?PHP
    use DynamicalWeb\HTML;
?>
<!doctype html>
<html lang="en">

    <head>
        <title>Netlenium - API Usage '/actions'</title>
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
                                        <h3 class="panel-title">Actions Endpoint</h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            The actions endpoint <code>/actions</code> allows a client to invoke
                                            actions to an existing session.
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
                                            Get Elements
                                            <span class="label label-success">GET</span>
                                            <span class="label label-danger">POST</span>
                                        </h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            <code>/actions/get_elements</code> Fetches the elements that are in the DOM
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
                                                    <td>by</td>
                                                    <td>True</td>
                                                    <td>
                                                        Specify how you want to search for elements, the possible options
                                                        are <code>class_name</code>, <code>css_selector</code>,
                                                        <code>id</code>, <code>name</code>, <code>tag_name</code>,
                                                        <code>xpath</code>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>value</td>
                                                    <td>True</td>
                                                    <td>
                                                        The value to search for corresponding to the <code>by</code>
                                                        paramerter
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <hr/>
                                        <h4>Example Success Response</h4>
                                        <span class="label label-success">GET</span> <code>http://localhost:6410/actions/get_elements?session_id=ExampleID&by=tag_name&value=a</code>
                                        <br/>

<pre>
{
   "Status":true,
   "ResponseCode":200,
   "ErrorCode":0,
   "Elements":[
      {
         "Enabled":true,
         "IsSelected":false,
         "ElementLocation":{
            "X":1615,
            "Y":19
         },
         "ElementSize":{
            "Width":34,
            "Height":24
         },
         "TagName":"a",
         "InnerText":"Gmail",
         "InnerHtml":"Gmail"
      },
      {
         "Enabled":true,
         "IsSelected":false,
         "ElementLocation":{
            "X":1664,
            "Y":19
         },
         "ElementSize":{
            "Width":57,
            "Height":24
         },
         "TagName":"a",
         "InnerText":"Images",
         "InnerHtml":"Images"
      }
   ]
}
</pre>
                                        <p>
                                            This response will return an array of <a href="/object_element">Web Elements</a>.
                                            if there are no results, then the array will be empty.
                                        </p>
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
                                            Close Window
                                            <span class="label label-success">GET</span>
                                            <span class="label label-danger">POST</span>
                                        </h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            <code>/actions/close</code> closes the current window/tab that the
                                            session is currently focused on and switches back to another active
                                            window/tab. To list active windows or switch to another see
                                            <a href="/api_window_handler">/window_handler</a>
                                        </p>
                                        <div class="right">
                                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4>Example Success Response</h4>
                                        <span class="label label-success">GET</span> <code>http://localhost:6410/actions/close?session_id=ExampleID</code>
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
                                            Execute Javascript
                                            <span class="label label-success">GET</span>
                                            <span class="label label-danger">POST</span>
                                        </h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            <code>/actions/execute_javascript</code> takes your javascript code and
                                            executes it in the current window, if your code has a return statement then
                                            the results will also be returned
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
                                                    <td>code</td>
                                                    <td>True</td>
                                                    <td>
                                                        The Javascript code you wish to execute, if it contains a return
                                                        statement then the results will be returned in the response
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <hr/>
                                        <h4>Example Success Response</h4>
                                        <span class="label label-success">GET</span> <code>http://localhost:6410/actions/execute_javascript?session_id=ExampleID&code=return%20%27test%27;</code>
                                        <br/>

<pre>
{
   "Status":true,
   "ResponseCode":200,
   "ErrorCode":0,
   "Output": "test"
}
</pre>

                                        <hr/>
                                        <h4>Example Error Response</h4>
                                        <span class="label label-success">GET</span> <code>http://localhost:6410/actions/execute_javascript?session_id=ExampleID&code=return%20%27%27%27</code>
                                        <br/>

<pre>
{
   "Status":false,
   "ResponseCode":500,
   "ErrorCode":112,
   "Error": "SyntaxError: Invalid or unexpected token"
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
