
<form id="detail-form" action="<?php echo $action; ?>" class="form-horizontal" method="post">
    <div class="row">
        <div class="col-md-9">
            <div class="form-group">

        <label class="col-md-3">Project Name</label>

        <div class="col-md-7">
            <input type="text" name="name"
                value="<?php echo $flash->old('name'); ?>"
                class="form-control" />
        </div>
        <!-- /.col -->

    </div>


    <!-- /.form-group -->

    <div class="form-group">

        <label class="col-md-3">Start Date</label>

        <div class="col-md-7">
            <input type="text" name="start_date"
                value="<?php echo $flash->old('start_date'); ?>"
                class="form-control" />
        </div>
        <!-- /.col -->

    </div>
    <!-- /.form-group -->

    <div class="form-group">

        <label class="col-md-3">End Date</label>

        <div class="col-md-7">
            <input type="text" name="end_date"
                value="<?php echo $flash->old('end_date'); ?>"
                class="form-control" />
        </div>
        <!-- /.col -->

    </div>
   
     <!-- /.form-group -->

    <div class="form-group">

        <label class="col-md-3">Description</label>

        <div class="col-md-7">
            <textarea  name="description" class="form-control" /><?php echo trim($flash->old('description')); ?></textarea>
        </div>
        <!-- /.col -->

    </div>
    <!-- /.form-group -->



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
            &nbsp; <a class="btn btn-default" href="./dash/track/projects">Cancel</a>
        </div>

    </div>
    <!-- /.form-group -->


        </div>
        
    </div>
</form>
