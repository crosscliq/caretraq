
<form id="detail-form" action="./dash/user" class="form-horizontal" method="post">
    <div class="row">
        <div class="col-md-9">
            <div class="form-group">

        <label class="col-md-3">Username</label>

        <div class="col-md-7">
            <input type="text" name="username"
                value="<?php echo $flash->old('username'); ?>"
                class="form-control" />
        </div>
        <!-- /.col -->

    </div>
    <!-- /.form-group -->

    <div class="form-group">

        <label class="col-md-3">First Name</label>

        <div class="col-md-7">
            <input type="text" name="first_name"
                value="<?php echo $flash->old('first_name'); ?>"
                class="form-control" />
        </div>
        <!-- /.col -->

    </div>
    <!-- /.form-group -->

    <div class="form-group">

        <label class="col-md-3">Last Name</label>

        <div class="col-md-7">
            <input type="text" name="last_name"
                value="<?php echo $flash->old('last_name'); ?>"
                class="form-control" />
        </div>
        <!-- /.col -->

    </div>
    <!-- /.form-group -->

    <div class="form-group">

        <label class="col-md-3">Email Address</label>

        <div class="col-md-7">
            <input type="text" name="email"
                value="<?php echo $flash->old('email'); ?>"
                class="form-control" />
        </div>
        <!-- /.col -->

    </div>
    <!-- /.form-group -->

<hr />

    <div class="form-actions">

        <div>
            <div class="btn-group">
                <button type="submit" class="btn btn-primary">Save</button>
                <input id="primarySubmit" type="hidden"
                    value="save_edit" name="submitType" />
                <button type="button"
                    class="btn btn-primary dropdown-toggle"
                    data-toggle="dropdown">
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a
                        onclick="document.getElementById('primarySubmit').value='save_new'; document.getElementById('detail-form').submit();"
                        href="javascript:void(0);">Save & Create Another</a>
                    </li>
                    <li><a
                        onclick="document.getElementById('primarySubmit').value='save_close'; document.getElementById('detail-form').submit();"
                        href="javascript:void(0);">Save & Close</a></li>
                </ul>
            </div>
            &nbsp; <a class="btn btn-default" href="./dash/users">Cancel</a>
        </div>

    </div>
    <!-- /.form-group -->


        </div>
        <div class="col-md-3">

            
            
            <div class="portlet">

                <div class="portlet-header">

                    <h3>Groups</h3>

                </div>
                <!-- /.portlet-header -->

                <div class="">
                    <div id="groups" class="list-group">
                        <div id="groups-checkboxes">
                        <?php echo $this->renderLayout('groups/checkboxes.php'); ?>
                        </div>
            
                    </div>
                </div>
                <!-- /.portlet-content -->

            </div>
            
 
        </div>
    </div>
</form>
