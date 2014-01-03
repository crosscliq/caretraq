
<form id="detail-form" action="<?php echo $action; ?>" class="form-horizontal" method="post">
    <div class="row">
        <div class="col-md-9">
            <div class="form-group">

        <label class="col-md-3">Display Name</label>

        <div class="col-md-7">
            <input type="text" name="name"
                value="<?php echo $flash->old('name'); ?>"
                class="form-control" />
        </div>
        <!-- /.col -->

    </div>
    <!-- /.form-group -->
    <div class="form-group">

        <label class="col-md-3">option1</label>

        <div class="col-md-7">
            <input type="text" name="option1"
                value="<?php echo $flash->old('option1'); ?>"
                class="form-control" />
        </div>
        <!-- /.col -->

    </div>
    <!-- /.form-group -->

    <div class="form-group">
        <label class="col-md-3">option2</label>
        <div class="col-md-7">
            <input type="text" name="option2"
                value="<?php echo $flash->old('option2'); ?>"
                class="form-control" />
        </div>
        <!-- /.col -->
    </div>

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
            &nbsp; <a class="btn btn-default" href="./dash/track/displays">Cancel</a>
        </div>

    </div>
    <!-- /.form-group -->


        </div>
      
    </div>
</form>
