@extends('frontend.layout')
@section('content')

    <div class="col-md-6" style="padding: 0; margin-bottom: 20px;">

        <div class="container">
            <h3 style="color: #1b6d85;">View Your Notice Here</h3>
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Open Notice</button>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Faculty 1 Notice</h4>
                        </div>
                        <div class="modal-body">
                            <p>Notice Board System deals with publishing
                                of the notice and forwarding of the notice
                                to the students. It is the web based system
                                which is easy to access to all the users.
                                Regardless of the location and type of
                                machine of system, user can access system. </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary " data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6" style="padding: 0; margin-bottom: 20px;">
        <div class="panel panel-primary" style="margin-top: 60px;">
            <div class="panel-heading">
                <h3 class="panel-title">Notice Board System Log In Panel </h3>
            </div>
            <div class="panel-body">
                <form method="post" action="">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
							<i class="glyphicon glyphicon-user"></i>
						</span>
                        <input name="username" type="text" class="form-control" placeholder="Username">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
						<span class="input-group-addon">
							<i class="glyphicon glyphicon-lock"></i>
						</span>
                        <input name="password" type="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="checkbox" data-group-cls="btn-group-lg">
                        <span>Remember me</span>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block">Login</button>
                    <span><a href="#" style="margin-left: 210px; text-decoration: none;">Forget Password?</a></span>
                        <p style="text-align: center; font-weight: bold; margin-top: 10px;">Or</p>
                    <span class="btn btn-primary btn-block loginPageButton regtext"><a style="text-decoration: none; color: white;" href="register">Register New User</a></span>
                </div>
                </form>
            </div>
        </div>
    </div>
   <div class="footer">
       <p style="float:left; margin-left: 10px; margin-right: 20px; margin-top: 200px; color: #1b6d85;">Copyright © Notice Board System</p>
       <p style="float:left; margin-top: 200px; color: #1b6d85;">This Web application is design and developed by Students of National College of Computer Studies B.Sc.CSIT 8th Semsester</p>
   </div>

    @endsection