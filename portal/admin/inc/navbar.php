
<nav class="page-sidebar" id="sidebar" style="background-color:darkblue;">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div class="admin-info">
                       <!-- <img  src="images/logo.png" class="text-center" alt="image here" width="100" /><br> -->
                       <b>School <?php echo $view_user['role']; ?> of</b><br>
                        <strong><?php echo $view_user['school']; ?></strong>
                      </div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active" href="index"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="heading">FEATURES</li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-plus"></i>
                            <span class="nav-label">Add New</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                        <li>
                        <a href="" data-toggle="modal" data-target="#addstu"><i class="sidebar-item-icon fa fa-user"></i><span class="nav-label">Add New Student</span></a>
                         </li>
                            <li>
                            <a href="" data-toggle="modal" data-target="#addteacher"><i class="sidebar-item-icon fa fa-user"></i><span class="nav-label">Add New Teacher</span></a>
                            </li>
                            <li>
                            <a href="" data-toggle="modal" data-target="#myHead"><i class="sidebar-item-icon fa fa-user"></i><span class="nav-label">Add New Subject</span></a>
                            </li>
                            <li>
                            <a href="" data-toggle="modal" data-target="#myHead"><i class="sidebar-item-icon fa fa-user"></i><span class="nav-label">Add New Term</span></a>
                            </li>
                            <li>
                            <a href="" data-toggle="modal" data-target="#myHead"><i class="sidebar-item-icon fa fa-user"></i><span class="nav-label">Add New Class</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-eye"></i>
                            <span class="nav-label">View All</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                        <li>
                        <a href="" data-toggle="modal" data-target="#myHead"><i class="sidebar-item-icon fa fa-table"></i><span class="nav-label">Student's Table</span></a>
                         </li>
                            <li>
                            <a href="" data-toggle="modal" data-target="#myHead"><i class="sidebar-item-icon fa fa-table"></i><span class="nav-label">Teacher's Table</span></a>
                            </li>
                            <li>
                            <a href="" data-toggle="modal" data-target="#myHead"><i class="sidebar-item-icon fa fa-table"></i><span class="nav-label">Subject's Table</span></a>
                            </li>
                            <li>
                            <a href="" data-toggle="modal" data-target="#myHead"><i class="sidebar-item-icon fa fa-table"></i><span class="nav-label">Term's Table</span></a>
                            </li>
                            <li>
                            <a href="" data-toggle="modal" data-target="#myHead"><i class="sidebar-item-icon fa fa-table"></i><span class="nav-label">Class's Table</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- The Modal questions add for students-->
        <div class="modal fade" id="addstu">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Students </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body text-center" >
                      <p>
          <form class="form-group" action="index" method="post">
          <input class="form-control" type="text" name="stuId" placeholder="Student Id"  autofocus required/><br>
          <input class="form-control" type="text" name="stuName" placeholder="Student Fullname"  required/><br>
          <input class="form-control" type="email" name="stuEmail" placeholder="Student Email"  required/><br>
          <select name="gender" class="form-control">
              <option value="">Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
          </select><br>
          <label for="">Date of birth</label>
          <input class="form-control" type="date" name="dob" placeholder="Date of birth"  required/><br>
          <select name="classId" class="form-control">
              <option value="">Select Class</option>
              <option value="Class One">Class One</option>
          </select><br>
            <hr>
          <input class="btn btn-info" name="addstu" type="submit" value="Add"/>
          <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
          </form>
                      </p>
                    </div>

                    <!-- Modal footer -->
                    <!-- <div class="modal-footer">

                            </div> -->

                </div>
            </div>
        </div>
        <!-- The Modal end -->

        <!-- The Modal questions add for teacher-->
        <div class="modal fade" id="addteacher">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Teacher </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body text-center" >
                      <p>
          <form class="form-group" action="index" method="post">
          <input class="form-control" type="text" name="teacherId" placeholder="Teacher Id"  autofocus required/><br>
          <input class="form-control" type="text" name="teacherName" placeholder="Teacher Fullname"  required/><br>
          <input class="form-control" type="email" name="email" placeholder="Teacher's Email"  required/><br>
          <select name="gender" class="form-control">
              <option value="">Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
          </select><br>
            <hr>
          <input class="btn btn-info" name="addteacher" type="submit" value="Add"/>
          <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
          </form>
                      </p>
                    </div>

                    <!-- Modal footer -->
                    <!-- <div class="modal-footer">

                            </div> -->

                </div>
            </div>
        </div>
        <!-- The Modal end -->
