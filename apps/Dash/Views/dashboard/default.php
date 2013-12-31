<div class="row">
        <div class="col-lg-12">
          <h2 class="page-title">Dashboard <small>Statistics and more</small></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="/dashboard/assets" class="stats-container">
              <div class="stats-heading">Total Assets</div>
              <div class="stats-body-alt"> 
                <!--i class="fa fa-bar-chart-o"></i-->
                <div class="text-center"><span class="text-top"></span>1,500</div>
                <small>1,500 live</small> </div>
              <div class="stats-footer">view assets</div>
              </a> </div>
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="/dashboard/users" class="stats-container">
              <div class="stats-heading">Active Users</div>
              <div class="stats-body-alt"> 
                <!--i class="fa fa-bar-chart-o"></i-->
                <div class="text-center"><span class="text-top"></span>34</div>
                <small>34 users online</small> </div>
              <div class="stats-footer">view accounts</div>
              </a> </div>
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Alerts</div>
              <div class="stats-body-alt"> 
                <!--i class="fa fa-bar-chart-o"></i-->
                <div class="text-center"><span class="text-top"></span>5</div>
                <small>unresolved alerts</small> </div>
              <div class="stats-footer">view alert history</div>
              </a> </div>
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="dash/projects" class="stats-container">
              <div class="stats-heading">Total Projects</div>
              <div class="stats-body-alt"> 
                <!--i class="fa fa-bar-chart-o"></i-->
                <div class="text-center"><span class="text-top"></span>45</div>
                <small>15 open projects</small> </div>
              <div class="stats-footer">view projects</div>
              </a> </div>
          </div>
        </div>
      </div>
        <div class="row">
          <div class="col-lg-6">
        <div class="widget">
              <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>Current Activity | Map</h3>
            </div>
              <!-- /widget-header -->
              <div class="widget-content">
                <div id="world-map-gdp"></div>
              </div>
              <!-- /widget-content --> 
            </div>
          </div>
              <div class="col-lg-6">
          <div class="widget">
            <div class="widget-header"> <i class="icon-file"></i>
              <h3>Node Tree</h3>
            </div>
            <div class="widget-content" style="height:436px;">
             
         <?php echo View::instance()->render('nodetree.htm'); ?>
            </div>
          </div>
        </div>    
        </div>
      
  
      
<div class="row">   

          <div class="col-lg-6">
        <div class="widget">
              <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>Recent Activity</h3>
            </div>
              <!-- /widget-header -->
<div class="widget-content">
              <div class="widget widget-tabs">
                <div>
                  <ul class="nav nav-tabs">
                    <li class="active"> <a data-toggle="tab" href="#care">Care Staff</a> </li>
                    <li class=""> <a data-toggle="tab" href="#sales">Sales</a> </li>
                    <li class=""> <a data-toggle="tab" href="#admin">Admin</a> </li>

                  </ul>
                </div>
                <div class="tab-content">

                  <div class="tab-pane clearfix active" id="care">
                    <ul class="users-list">
                      <li> <img class="pull-left img-circle" alt="" src="./dashboard/images/img1.jpg">
                        <div class="user-info">
                          <div class="name"><a href="#">John Doe</a></div>
                          <div class="position">Patient Visit: Aaron Schuest</div>
                          <div class="time">Log Time: Dec 13, 14:56 - 15:45</div>
                        </div>
                      </li>
                      <li> <img class="pull-left img-circle" alt="" src="./dashboard/images/img1.jpg">
                        <div class="user-info">
                          <div class="name"><a href="#">John Doe</a></div>
                          <div class="position">Patient Visit: Aaron Schuest</div>
                          <div class="time">Log Time: Dec 13, 14:56 - 15:45</div>
                        </div>
                      </li>
                      <li> <img class="pull-left img-circle" alt="" src="./dashboard/images/img1.jpg">
                        <div class="user-info">
                          <div class="name"><a href="#">John Doe</a></div>
                          <div class="position">Patient Visit: Aaron Schuest</div>
                          <div class="time">Log Time: Dec 13, 14:56 - 15:45</div>
                        </div>
                      </li>
                      <li> <img class="pull-left img-circle" alt="" src="./dashboard/images/img1.jpg">
                        <div class="user-info">
                          <div class="name"><a href="#">John Doe</a></div>
                          <div class="position">Patient Visit: Aaron Schuest</div>
                          <div class="time">Log Time: Dec 13, 14:56 - 15:45</div>
                        </div>
                      </li>
                    </ul>
                  </div>

                  <div class="tab-pane clearfix" id="sales">
                    <ul class="users-list">
                      <li> <img class="pull-left img-circle" alt="" src="./dashboard/images/img1.jpg">
                        <div class="user-info">
                          <div class="name"><a href="#">Dale Steyn</a></div>
                          <div class="position">Software Engineer</div>
                          <div class="time">Last logged-in: Mar 15, 9:07</div>
                        </div>
                      </li>
                      <li> <img class="pull-left img-circle" alt="" src="./dashboard/images/img1.jpg">
                        <div class="user-info">
                          <div class="name"><a href="#">Dale Steyn</a></div>
                          <div class="position">Software Engineer</div>
                          <div class="time">Last logged-in: Mar 15, 9:07</div>
                        </div>
                      </li>
                      <li> <img class="pull-left img-circle" alt="" src="./dashboard/images/img1.jpg">
                        <div class="user-info">
                          <div class="name"><a href="#">Dale Steyn</a></div>
                          <div class="position">Software Engineer</div>
                          <div class="time">Last logged-in: Mar 15, 9:07</div>
                        </div>
                      </li>
                      <li> <img class="pull-left img-circle" alt="" src="./dashboard/images/img1.jpg">
                        <div class="user-info">
                          <div class="name"><a href="#">Dale Steyn</a></div>
                          <div class="position">Software Engineer</div>
                          <div class="time">Last logged-in: Mar 15, 9:07</div>
                        </div>
                      </li>
                    </ul>
                  </div>

                  <div class="tab-pane clearfix" id="admin">
                    <ul class="users-list">
                      <li> <img class="pull-left img-circle" alt="" src="./dashboard/images/img1.jpg">
                        <div class="user-info">
                          <div class="name"><a href="#">John Doe</a></div>
                          <div class="position">Retailer</div>
                          <div class="time">Last logged-in: Feb 20, 14:56</div>
                        </div>
                      </li>
                      <li> <img class="pull-left img-circle" alt="" src="./dashboard/images/img1.jpg">
                        <div class="user-info">
                          <div class="name"><a href="#">Dale Steyn</a></div>
                          <div class="position">Software Engineer</div>
                          <div class="time">Last logged-in: Mar 15, 9:07</div>
                        </div>
                      </li>
                      <li> <img class="pull-left img-circle" alt="" src="./dashboard/images/img1.jpg">
                        <div class="user-info">
                          <div class="name"><a href="#">Dale Steyn</a></div>
                          <div class="position">Chief Officer</div>
                          <div class="time">Last logged-in: Jun 15, 15:24</div>
                        </div>
                      </li>
                      <li> <img class="pull-left img-circle" alt="" src="./dashboard/images/img1.jpg">
                        <div class="user-info">
                          <div class="name"><a href="#">John Doe</a></div>
                          <div class="position">Financial Assistant</div>
                          <div class="time">Last logged-in: Jun 10, 13:20</div>
                        </div>
                      </li>
                    </ul>
                  </div>

                </div>
              </div>
            </div>
              <!-- /widget-content --> 
            </div>
          </div>      

        <div class="col-lg-6">
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-group"></i>
              <h3>Logged-in users</h3>

            </div>
            <!-- /widget-header -->
            <div class="widget-content">
   <div class="tab-content">
                  <div class="tab-pane clearfix active" id="stats">
                  
                    <ul class="users-list">
                      <li> <img class="pull-left img-circle" alt="" src="./dashboard/images/img1.jpg">
                        <div class="user-info">
                          <div class="name"><a href="#">John Doe</a></div>
                          <div class="position">Product Designer</div>
                          <div class="time">Last logged-in: Feb 20, 14:56</div>
                        </div>
                      </li>
                      <li> <img class="pull-left img-circle" alt="" src="./dashboard/images/img1.jpg">
                        <div class="user-info">
                          <div class="name"><a href="#">Dale Steyn</a></div>
                          <div class="position">Software Engineer</div>
                          <div class="time">Last logged-in: Mar 15, 9:07</div>
                        </div>
                      </li>
                      <li> <img class="pull-left img-circle" alt="" src="./dashboard/images/img1.jpg">
                        <div class="user-info">
                          <div class="name"><a href="#">Dale Steyn</a></div>
                          <div class="position">Chief Officer</div>
                          <div class="time">Last logged-in: Jun 15, 15:24</div>
                        </div>
                      </li>
                      <li> <img class="pull-left img-circle" alt="" src="./dashboard/images/img1.jpg">
                        <div class="user-info">
                          <div class="name"><a href="#">John Doe</a></div>
                          <div class="position">Financial Assistant</div>
                          <div class="time">Last logged-in: Jun 10, 13:20</div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="tab-pane" id="report">
                    <h5 class="tab-header"><i class="icon-star"></i> Popular contacts</h5>
                    <ul class="users-list user-list-no-hover">
                      <li> <img class="pull-left img-circle" alt="" src="./dashboard/images/img1.jpg">
                        <div class="user-info">
                          <div class="name"><a href="#">Mitchell Johnsson</a></div>
                          <div class="options">
                            <button class="btn btn-xs btn-success"> <i class="icon-phone"></i> Call </button>
                            <button class="btn btn-xs btn-warning"> <i class="icon-envelope-alt"></i> Message </button>
                          </div>
                        </div>
                      </li>
                      <li> <img class="pull-left img-circle" alt="" src="./dashboard/images/img1.jpg">
                        <div class="user-info">
                          <div class="name"><a href="#">Frans Garey</a></div>
                          <div class="options">
                            <button class="btn btn-xs btn-success"> <i class="icon-phone"></i> Call </button>
                            <button class="btn btn-xs btn-warning"> <i class="icon-envelope-alt"></i> Message </button>
                          </div>
                        </div>
                      </li>
                      <li> <img class="pull-left img-circle" alt="" src="./dashboard/images/img1.jpg">
                        <div class="user-info">
                          <div class="name"><a href="#">John Doe</a></div>
                          <div class="options">
                            <button class="btn btn-xs btn-success"> <i class="icon-phone"></i> Call </button>
                            <button class="btn btn-xs btn-warning"> <i class="icon-envelope-alt"></i> Message </button>
                          </div>
                        </div>
                      </li>
                      <li> <img class="pull-left img-circle" alt="" src="./dashboard/images/img1.jpg">
                        <div class="user-info">
                          <div class="name"><a href="#">John Doe</a></div>
                          <div class="options">
                            <button class="btn btn-xs btn-success"> <i class="icon-phone"></i> Call </button>
                            <button class="btn btn-xs btn-warning"> <i class="icon-envelope-alt"></i> Message </button>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="tab-pane" id="dropdown1">
                    <h5 class="tab-header"><i class="icon-comments"></i> Top Commenters</h5>
                    <ul class="users-list">
                      <li> <img class="pull-left img-circle" alt="" src="./dashboard/images/img1.jpg">
                        <div class="user-info">
                          <div class="name"><a href="#">John Doe</a></div>
                          <div class="comment"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer faucibus consectetur malesuada. </div>
                        </div>
                      </li>
                      <li> <img class="pull-left img-circle" alt="" src="./dashboard/images/img1.jpg">
                        <div class="user-info">
                          <div class="name"><a href="#">John Doe</a></div>
                          <div class="comment"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer faucibus consectetur malesuada. </div>
                        </div>
                      </li>
                      <li> <img class="pull-left img-circle" alt="" src="./dashboard/images/img1.jpg">
                        <div class="user-info">
                          <div class="name"><a href="#">John Doe</a></div>
                          <div class="comment"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer faucibus consectetur malesuada. </div>
                        </div>
                      </li>
                      <li> <img class="pull-left img-circle" alt="" src="./dashboard/images/img1.jpg">
                        <div class="user-info">
                          <div class="name"><a href="#">John Doe</a></div>
                          <div class="comment"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer faucibus consectetur malesuada. </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
            </div>
            <!-- /widget-content --> 
          </div>
        </div>
      </div>


   
<div class="row">
  <div class="col-lg-4"> 
    <!--new earning start-->
    <div class="panel terques-chart">
      <div class="panel-body chart-texture">
        <div class="chart">
          <div class="heading"> <span>Friday</span> <strong> Dec 2013</strong> </div>
          <div class="sparkline" data-type="line" data-resize="true" data-height="90" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
        </div>
      </div>
      <div class="chart-tittle"> <span class="title">Sales Activity</span> <span class="value-pie"> <a href="#" class="active">Online</a> | <a href="#">Last 24 hours</a> | <a href="#">Last Week</a> </span> </div>
    </div>
    <!--new earning end--> 
  </div>
  <div class="col-lg-4"> 
    <!--total earning start-->
    <div class="panel green-chart">
      <div class="panel-body">
        <div class="chart">
          <div class="heading"> <span>June</span> <strong>18 Days | 55%</strong> </div>
          <div id="barchart"></div>
        </div>
      </div>
      <div class="chart-tittle"> <span class="title">Total Log-ins</span> <span class="value-pie">34,577</span> </div>
    </div>
    <!--total earning end--> 
  </div>
  <div class="col-lg-4"> 
    <!--pie chart start-->
    <div class="panel">
      <div class="panel-body text-center">
        <div class="chart" style="height: 110px;">
          <div id="pie-chart" ></div>
        </div>
      </div>
      <div class="chart-tittle"> Active Days </div>
    </div>
    <!--pie chart start--> 
  </div>
</div>

