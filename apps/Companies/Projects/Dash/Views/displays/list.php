<?php // echo \Dsc\Debug::dump( $state, false ); ?>

<div class="col-lg-12">
          <h2 class="page-title pull-left">Displays <small> </small></h2>
          <?php if($state->get('filter.project_id')) : ?>
          <a class="btn btn-success pull-right" href="/dash/track/display/create?pid=<?=$state->get('filter.project_id')?>">Create Display</a>
          <?php endif; ?>
  </div>

<br clear="both">




<form id="list-form" action="" method="post">

<select name="filter[project_id]" class="pull-left">
<option value="">-- Select Project --</option>
<?php foreach ($projects as $project) : ?>
<option 
<?php if($state->get('filter.project_id') == $project->_id) : ?>
selected=selected
<?php endif; ?>
value="<?php echo $project->_id; ?>"><?php echo $project->name; ?></option>
<?php endforeach; ?>
</select>
    <div class="row datatable-header">
        <div class="col-sm-6 pull-right">
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
                <th data-sortable="name">Name</th>
                <th data-sortable="description">Description</th>
               
                <th>Start Date</th>
                <th>End Date</th>
                <th></th>
                <th></th>
            </tr>
            <tr class="filter-row">
                <th></th>
                <th>
                    <input placeholder="Project Name" name="filter[name-contains]" value="<?php echo $state->get('filter.name-contains'); ?>" type="text" class="form-control input-sm">
                </th>
                <th>
                    <input placeholder="Email" name="filter[email-contains]" value="<?php echo $state->get('filter.email-contains'); ?>" type="text" class="form-control input-sm">
                </th>
                <th></th>
                <th></th>
               <th></th>
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
                        <a href="./dash/track/display/read/<?php echo $item->id; ?>">
                            <?php echo $item->name; ?>
                        </a>
                        </h5>
                    </td>
                    <td class="">
                        <?php echo $item->description; ?>
                    </td>
                    <td class="">
                        <?php echo $item->start_date; ?>
                    </td>
                    <td class="">
                        <?php echo $item->end_date; ?>
                    </td>
                    <td class="">
                    
                        
                    </td>
                    <td class="text-center">
                      <a class="btn btn-small btn-success" href="./dash/track/display/edit/<?php echo $item->id; ?>">
                      <i class="btn-icon-only icon-edit"> </i></a> 
                      <a class="btn btn-danger btn-small" href="./dash/track/display/delete/<?php echo $item->id; ?>">
                      <i class="btn-icon-only icon-remove"> </i>
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
         <?php if (!empty($list['subset'])) { ?>
                <div class="col-sm-2">
                    <?php echo $pagination->getLimitBox( $state->get('list.limit') ); ?>
                </div>
                <style>    .pagination { margin: 0; }</style>
                <?php } ?>
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






<?php //echo \Dsc\Debug::dump( $state, false ); ?>
<?php //echo \Dsc\Debug::dump( $list ); ?>




    
            </div>
          </div>
        </div>