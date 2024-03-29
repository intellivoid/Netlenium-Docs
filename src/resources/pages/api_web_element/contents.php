<?PHP
    use DynamicalWeb\HTML;
?>
<!doctype html>
<html lang="en">

    <head>
        <title>Netlenium - API Usage '/web_element'</title>
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
                                        <h3 class="panel-title">Web Element Endpoint</h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            The web element endpoint <code>/web_element</code> invokes actions to a
                                            specific element that is in the DOM.
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
                                                <tr>
                                                    <td>index</td>
                                                    <td>True</td>
                                                    <td>The index of the element given from the results.</td>
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
                                        <hr/>
                                        <h4>Session Not Found Response</h4>
                                        <br/>

<pre>
{
   "Status":false,
   "ResponseCode":404,
   "ErrorCode":108,
   "Message":"The session 'ExampleID' was not found"
}
</pre>

                                        <hr/>
                                        <h4>Element Not Found Response</h4>
                                        <br/>

<pre>
{
   "Status":false,
   "ResponseCode":404,
   "ErrorCode":116,
   "Message":"The element was not found"
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
                                            Clear Element
                                            <span class="label label-success">GET</span>
                                            <span class="label label-danger">POST</span>
                                        </h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            <code>/web_element/clear</code> clears the content within the element
                                        </p>
                                        <div class="right">
                                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4>Example Success Response</h4>
                                        <span class="label label-success">GET</span> <code>http://localhost:6410/web_element/clear?session_id=ExampleID&by=name&value=input_element</code>
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
                                            Simulate Click
                                            <span class="label label-success">GET</span>
                                            <span class="label label-danger">POST</span>
                                        </h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            <code>/web_element/click</code> simulates a click event on the element
                                        </p>
                                        <div class="right">
                                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4>Example Success Response</h4>
                                        <span class="label label-success">GET</span> <code>http://localhost:6410/web_element/click?session_id=ExampleID&by=name&value=input_element</code>
                                        <br/>

<pre>
{
   "Status":true,
   "ResponseCode":200,
   "ErrorCode"0
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
                                            Send Keys
                                            <span class="label label-success">GET</span>
                                            <span class="label label-danger">POST</span>
                                        </h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            <code>/web_element/send_keys</code> simulates typing into the element
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
                                                    <td>input</td>
                                                    <td>True</td>
                                                    <td>The input to send</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <h4>Example Success Response</h4>
                                        <span class="label label-success">GET</span> <code>http://localhost:6410/web_element/send_keys?session_id=ExampleID&by=name&value=username&input=HelloWorld</code>
                                        <br/>

<pre>
{
   "Status":true,
   "ResponseCode":200,
   "ErrorCode"0
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
                                            Move To Element
                                            <span class="label label-success">GET</span>
                                            <span class="label label-danger">POST</span>
                                        </h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            <code>/web_element/move_to</code> scrolls to the element so that the element
                                            is within the current viewport
                                        </p>
                                        <div class="right">
                                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4>Example Success Response</h4>
                                        <span class="label label-success">GET</span> <code>http://localhost:6410/web_element/move_to?session_id=ExampleID&by=name&value=input_element</code>
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
                                            Submit
                                            <span class="label label-success">GET</span>
                                            <span class="label label-danger">POST</span>
                                        </h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            <code>/web_element/submit</code> submits the element to the remote server
                                        </p>
                                        <div class="right">
                                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4>Example Success Response</h4>
                                        <span class="label label-success">GET</span> <code>http://localhost:6410/web_element/submit?session_id=ExampleID&by=name&value=input_element</code>
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
                                            Get Attribute
                                            <span class="label label-success">GET</span>
                                            <span class="label label-danger">POST</span>
                                        </h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            <code>/web_element/get_attribute</code> gets the value of the element's
                                            attribute
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
                                                <td>attribute_name</td>
                                                <td>True</td>
                                                <td>The name of the attribute within this element.</td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <h4>Example Success Response</h4>
                                        <span class="label label-success">GET</span> <code>http://localhost:6410/web_element/get_attribute?session_id=ExampleID&by=tag_name&value=input&index=0&attribute_name=class</code>
                                        <br/>

<pre>
{
   "Status":true,
   "ResponseCode":200,
   "ErrorCode":0,
   "AttributeValue":"form-input"
}
</pre>
                                        <hr/>
                                        <h4>Attribute Not Found Response</h4>
                                        <span class="label label-success">GET</span> <code>http://localhost:6410/web_element/get_attribute?session_id=ExampleID&by=tag_name&value=input&index=0&attribute_name=dfg</code>
                                        <br/>

<pre>
{
   "Status":false,
   "ResponseCode":404,
   "ErrorCode":101,
   "Message":"The attribute 'dfg' was not found in the element"
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
                                            Set Attribute
                                            <span class="label label-success">GET</span>
                                            <span class="label label-danger">POST</span>
                                        </h3>
                                        <br/>
                                        <p class="panel-subtitle">
                                            <code>/web_element/set_attribute</code> gets the value of the element's
                                            attribute
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
                                                    <td>attribute_name</td>
                                                    <td>True</td>
                                                    <td>The name of the attribute within this element.</td>
                                                </tr>
                                                <tr>
                                                    <td>attribute_value</td>
                                                    <td>True</td>
                                                    <td>The value to set to the given attribute/td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <h4>Example Success Response</h4>
                                        <span class="label label-success">GET</span> <code>http://localhost:6410/web_element/get_attribute?session_id=ExampleID&by=tag_name&value=input&index=0&attribute_name=class</code>
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
            <!-- END MAIN -->
            <div class="clearfix"></div>
            <?PHP HTML::importSection('footer'); ?>
        </div>
        <?PHP HTML::importSection('js_scripts'); ?>
    </body>

</html>
