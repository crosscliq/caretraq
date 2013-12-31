
        <div class="col-lg-12">
          <h2 class="page-title pull-left">Users <small> manage</small></h2>
          <a class="btn btn-success pull-right" href="/dash/user">Create User</a>
        </div>

<br clear="both">

<form id="list-form" action="./dash/users" method="post">

    <div class="row datatable-header">
        <div class="col-sm-6">
            <div class="row row-marginless">
                <?php if (!empty($list['subset'])) { ?>
                <div class="col-sm-4">
                    <?php echo $pagination->getLimitBox( $state->get('list.limit') ); ?>
                </div>
                <?php } ?>
                <?php if (!empty($list['count']) && $list['count'] > 1) { ?>                                
                <div class="col-sm-8">
                    <?php echo $pagination->serve(); ?>
                </div>
                <?php } ?>
            </div>
        </div>    
        <div class="col-sm-6">
            <div class="input-group">
                <input class="form-control" type="text" name="filter[keyword]" placeholder="Keyword" maxlength="200" value="<?php echo $state->get('filter.keyword'); ?>"> 
                <span class="input-group-btn">
                    <input class="btn btn-primary" type="submit" onclick="this.form.submit();" value="Search" />
                    <button class="btn btn-danger" type="button" onclick="Dsc.resetFormFilters(this.form);">Reset</button>
                </span>
            </div>
        </div>
    </div>
    
    <input type="hidden" name="list[order]" value="<?php echo $state->get('list.order'); ?>" />
    <input type="hidden" name="list[direction]" value="<?php echo $state->get('list.direction'); ?>" />

<br clear="both">
    
    <div class="table-responsive datatable">
    
    <table class="table table-striped table-bordered table-hover table-highlight table-checkable">
        <thead>
            <tr>
                <th class="checkbox-column"><input type="checkbox" class="icheck-input"></th>
                <th data-sortable="username">Username</th>
                <th data-sortable="email">Email</th>
                <th>First Name</th>
                <th data-sortable="last_name">Last Name</th>
                <th>Groups</th>
                <th></th>
            </tr>
            <tr class="filter-row">
                <th></th>
                <th>
                    <input placeholder="Username" name="filter[username-contains]" value="<?php echo $state->get('filter.username-contains'); ?>" type="text" class="form-control input-sm">
                </th>
                <th>
                    <input placeholder="Email" name="filter[email-contains]" value="<?php echo $state->get('filter.email-contains'); ?>" type="text" class="form-control input-sm">
                </th>
                <th></th>
                <th></th>
                <th><select  id="group_filter" name="filter[group]" class="form-control" >
                <option value="">-Group Filter-</option>
                <?php foreach (@$groups as $group) : ?>
                <option <?php if($state->get('filter.group') == $group->id) { echo 'selected'; } ?> value="<?=$group->_id;?>"><?=$group->name;?></option>
                <?php endforeach; ?>
            </select></th>
                <th><button class="btn " type="sumbit">Filter</button></th>
            </tr>
        </thead>
        <tbody>    
        
        <?php if (!empty($list['subset'])) { ?>
    
            <?php foreach ($list['subset'] as $item) { ?>
                <tr>
                    <td class="checkbox-column">
                        <input type="checkbox" class="icheck-input" name="ids[]" value="<?php echo $item->id; ?>">
                    </td>                
                    <td class="">
                        <h5>
                        <a href="./admin/user/<?php echo $item->id; ?>">
                            <?php echo $item->username; ?>
                        </a>
                        </h5>
                    </td>
                    <td class="">
                        <?php echo $item->email; ?>
                    </td>
                    <td class="">
                        <?php echo $item->first_name; ?>
                    </td>
                    <td class="">
                        <?php echo $item->last_name; ?>
                    </td>
                    <td class="">
                    <ul>
                    <?php if(is_array($item->groups)) : ?> 
                    <?php foreach ($item->groups as $group) : ?>
                    <li id="<?=$group['id'];?>">
                    <?=$group['name'];?>
                    </li>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    </ul> 
                        
                    </td>
                    <td class="text-center">
                        <a class="btn btn-xs btn-secondary" href="./admin/user/<?php echo $item->id; ?>/edit">
                            <i class="fa fa-pencil"></i>
                        </a>
                        &nbsp;
                        <a class="btn btn-xs btn-danger" data-bootbox="confirm" href="./admin/user/<?php echo $item->id; ?>/delete">
                            <i class="fa fa-times"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        
        <?php } else { ?>
            <tr>
            <td colspan="100">
                <div class="">No items found.</div>
            </td>
            </tr>
        <?php } ?>

        </tbody>
    </table>
    
    </div>
    
    <div class="row datatable-footer">
        <?php if (!empty($list['count']) && $list['count'] > 1) { ?>
        <div class="col-sm-10">
            <?php echo (!empty($list['count']) && $list['count'] > 1) ? $pagination->serve() : null; ?>
        </div>
        <?php } ?>
        <div class="col-sm-2 pull-right">
            <div class="datatable-results-count pull-right">
            <?php echo $pagination ? $pagination->getResultsCounter() : null; ?>
            </div>
        </div>
    </div>    
    
</form>





<?php /*

    <div class="row">

<div class="col-lg-12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-table"></i>
              <h3>Users</h3> <a class="btn btn-success" href="javascript:;">Create User</a>
            </div>
            <div class="widget-content">
         
<div class="example_alt_pagination">
      <div id="container">
        <div class="full_width big"></div>
                      <div id="demo">
                                            <div id="example_wrapper" class="dataTables_wrapper" role="grid">

                                                <table cellpadding="0" cellspacing="0" border="0" class="display dataTable" id="example" aria-describedby="example_info">
      <thead>
        <tr role="row"><th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="" aria-sort="descending" aria-label="Rendering engine: activate to sort column ascending">First Name</th><th class="hidden-xs sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="" aria-label="Browser: activate to sort column ascending">Last Name</th><th class="hidden-xs sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="" aria-label="Platform(s): activate to sort column ascending">Phone</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="" aria-label="CSS grade: activate to sort column ascending">Email</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="" aria-label="CSS grade: activate to sort column ascending">Location</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="" aria-label="CSS grade: activate to sort column ascending">User Type</th><th class="" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 135px;" aria-label="CSS grade: activate to sort column ascending">Admin</th></tr>
        </thead>
      
      <tfoot>
        <tr><th rowspan="1" colspan="1"> </th><th rowspan="1" colspan="1"></th><th rowspan="1" colspan="1"></th><th rowspan="1" colspan="1"></th><th rowspan="1" colspan="1"></th></tr>
        </tfoot>
  <tbody role="alert" aria-live="polite" aria-relevant="all">
    <tr class="gradeA even">
          <td class=" sorting_1">John</td>
          <td class=" sorting_1">Doe</td>
          <td class="hidden-xs">( 555 ) 555-5555</td>
          <td class="hidden-xs">john@aol.com</td>
          <td class="center ">Salt Lake City, UT</td>
          <td class="center ">A</td>
          <td class="center "><a class="btn btn-small btn-success" href="profile"><i class="btn-icon-only icon-edit"> </i></a> <a class="btn btn-danger btn-small" href="javascript:;"><i class="btn-icon-only icon-remove"> </i></a></td>
          </tr>
    <tr class="gradeA odd">
          <td class=" sorting_1">John</td>
          <td class=" sorting_1">Doe</td>
          <td class="hidden-xs">( 555 ) 555-5555</td>
          <td class="hidden-xs">john@aol.com</td>
          <td class="center ">Salt Lake City, UT</td>
          <td class="center ">A</td>
          <td class="center "><a class="btn btn-small btn-success" href="profile"><i class="btn-icon-only icon-edit"> </i></a> <a class="btn btn-danger btn-small" href="javascript:;"><i class="btn-icon-only icon-remove"> </i></a></td>
          </tr>
    <tr class="gradeA even">
          <td class=" sorting_1">John</td>
          <td class=" sorting_1">Doe</td>
          <td class="hidden-xs">( 555 ) 555-5555</td>
          <td class="hidden-xs">john@aol.com</td>
          <td class="center ">Salt Lake City, UT</td>
          <td class="center ">A</td>
          <td class="center "><a class="btn btn-small btn-success" href="profile"><i class="btn-icon-only icon-edit"> </i></a> <a class="btn btn-danger btn-small" href="javascript:;"><i class="btn-icon-only icon-remove"> </i></a></td>
          </tr>
    <tr class="gradeA odd">
          <td class=" sorting_1">John</td>
          <td class=" sorting_1">Doe</td>
          <td class="hidden-xs">( 555 ) 555-5555</td>
          <td class="hidden-xs">john@aol.com</td>
          <td class="center ">Salt Lake City, UT</td>
          <td class="center ">A</td>
          <td class="center "><a class="btn btn-small btn-success" href="profile"><i class="btn-icon-only icon-edit"> </i></a> <a class="btn btn-danger btn-small" href="javascript:;"><i class="btn-icon-only icon-remove"> </i></a></td>
          </tr>
    <tr class="gradeA even">
          <td class=" sorting_1">John</td>
          <td class=" sorting_1">Doe</td>
          <td class="hidden-xs">( 555 ) 555-5555</td>
          <td class="hidden-xs">john@aol.com</td>
          <td class="center ">Salt Lake City, UT</td>
          <td class="center ">A</td>
          <td class="center "><a class="btn btn-small btn-success" href="profile"><i class="btn-icon-only icon-edit"> </i></a> <a class="btn btn-danger btn-small" href="javascript:;"><i class="btn-icon-only icon-remove"> </i></a></td>
          </tr>
    <tr class="gradeA odd">
          <td class=" sorting_1">John</td>
          <td class=" sorting_1">Doe</td>
          <td class="hidden-xs">( 555 ) 555-5555</td>
          <td class="hidden-xs">john@aol.com</td>
          <td class="center ">Salt Lake City, UT</td>
          <td class="center ">A</td>
          <td class="center "><a class="btn btn-small btn-success" href="profile"><i class="btn-icon-only icon-edit"> </i></a> <a class="btn btn-danger btn-small" href="javascript:;"><i class="btn-icon-only icon-remove"> </i></a></td>
          </tr>
    </tbody>
    </table>


                                                </div>
                            </div>
            </div>
        </div>
                </div>
              </div>
            </div>

          </div>



<?php */ ?>



<?php //echo \Dsc\Debug::dump( $state, false ); ?>
<?php //echo \Dsc\Debug::dump( $list ); ?>
