<?php //echo \Dsc\Debug::dump( $state, false ); ?>
<?php //echo \Dsc\Debug::dump( $item, false ); ?>

<div class="row">

    <div class="col-md-9 col-sm-6">

        <h2 class="pull-left"><?php echo !(empty($item->name)) ? $item->name : null; ?></h2>
        <a class="btn btn-success pull-right" href="./dash/track/project/edit/<?php echo $item->_id; ?>" class="btn btn-secondary">Edit</a>
        <br clear="both">
        <hr  />
        <p>
            <?php echo !(empty($item->description)) ? $item->description : null; ?>
        </p>

        <hr />


        <div class="widget">
              <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>Displays</h3>
            </div>
              <!-- /widget-header -->
          <div class="widget-content">
              <div class="widget widget-tabs">
                <div>
                  <ul class="nav nav-tabs">
                    <li class="active"> <a data-toggle="tab" href="#care">Displays</a> </li>
                    <li class=""> <a data-toggle="tab" href="#sales">Create Display</a> </li>
                    <li class=""> <a data-toggle="tab" href="#admin">CVS Upload Displays</a> </li>

                  </ul>
                </div>
                <div class="tab-content">

                  <div class="tab-pane clearfix active" id="care">
                 
                    <ul class="users-list">
                    <?php foreach ($displays as $display) : ?>
                       <li> <img class="pull-left img-circle" alt="" src="./dashboard/images/img1.jpg">
                        <div class="user-info">
                          <div class="name"><a href="./dash/track/display/read/<?php echo $display->id ?>"><?php echo $display->name ?></a></div>
                          <div class="position">asdf</div>
                          <div class="time">Display id: <?php echo $display->id ?></div>
                        </div>
                      </li>
                    <?php endforeach; ?>
                   
                      
                    </ul>
                  </div>

                  <div class="tab-pane clearfix" id="sales">
                   <form action="">
                     <?php echo $this->renderLayout('Companies/Projects/Dash/Views::displays/quickcreate.php'); ?>
                    </form>
                  </div>

                  <div class="tab-pane clearfix" id="admin">
                    <form >CSV fupload displays</form>
                  </div>

                </div>
              </div>
            </div>
              <!-- /widget-content --> 
            </div>
          

        <ul class="icons-list">
            <li>
                <i class="icon-li fa fa-envelope"></i>
                <?php echo $item->email; ?>
            </li>
            <?php if (!empty($item->website)) { ?>
            <li>
                <i class="icon-li fa fa-globe"></i>
                <?php echo $item->website; ?>
            </li>
            <?php } ?>
            <?php if (!empty($item->address)) { ?>
            <li>
                <i class="icon-li fa fa-map-marker"></i>
                City, ST
            </li>
            <?php } ?>
        </ul>

    </div>


    <div class="col-md-3 col-sm-6 col-sidebar-right">

        <h4>Quick Statistics</h4>


        <div class="list-group">

            <a href="javascript:;" class="list-group-item">
                <h3 class="pull-right">
                    <i class="fa fa-eye"></i>
                </h3>
                <h4 class="list-group-item-heading">38,847</h4>
                <p class="list-group-item-text">Profile Views</p>

            </a>

            <a href="javascript:;" class="list-group-item">
                <h3 class="pull-right">
                    <i class="fa fa-facebook-square"></i>
                </h3>
                <h4 class="list-group-item-heading">3,482</h4>
                <p class="list-group-item-text">Facebook Likes</p>

            </a>

            <a href="javascript:;" class="list-group-item">
                <h3 class="pull-right">
                    <i class="fa fa-twitter-square"></i>
                </h3>
                <h4 class="list-group-item-heading">5,845</h4>
                <p class="list-group-item-text">Twitter Followers</p>

            </a>
        </div>
        <!-- /.list-group -->

        <br />



        <div class="well">
            <h4>Recent Activity</h4>


            <ul class="icons-list text-md">

                <li>
                    <i class="icon-li fa fa-location-arrow"></i>

                    <strong>Last login</strong> <br /> <small>about 4 hours ago</small>
                </li>

            </ul>

        </div>
    </div>


</div>
<!-- /.row -->
