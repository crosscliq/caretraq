<?php 
namespace Companies\Users\Dash\Controllers;

class User extends \Admin\Controllers\BaseAuth 
{
	use \Dsc\Traits\Controllers\CrudItem;
	
	protected $list_route = '/dash/users';
	protected $create_item_route = '/dash/user';
	protected $get_item_route = '/dash/user/{id}';
	protected $edit_item_route = '/dash/user/{id}/edit';
	
	protected function getModel()
	{
		$model = new \Companies\Users\Dash\Models\Users;
		return $model;
	}
	
	protected function getItem()
	{
		$f3 = \Base::instance();
		$id = $this->inputfilter->clean( $f3->get('PARAMS.id'), 'alnum' );
		$model = $this->getModel()
		->setState('filter.id', $id);
		
		try {
			$item = $model->getItem();
		} catch ( \Exception $e ) {
			\Dsc\System::instance()->addMessage( "Invalid Item: " . $e->getMessage(), 'error');
			$f3->reroute( $this->list_route );
			return;
		}
	
		return $item;
	}
	
	protected function displayCreate()
	{
		$f3 = \Base::instance();
		$f3->set('pagetitle', 'Create User');

		$model = new \Companies\Users\Dash\Models\Groups;
        $groups = $model->getList();
        \Base::instance()->set('groups', $groups );	


		$view = new \Dsc\Template;
		echo $view->render('Companies/Users/Dash/Views::users/create.php');
	}
	
	protected function displayEdit()
	{
		$f3 = \Base::instance();
		$f3->set('pagetitle', 'Edit User');
		
		$model = new \Companies\Users\Dash\Models\Groups;
        $groups = $model->getList();
        \Base::instance()->set('groups', $groups );		

		$view = new \Dsc\Template;
		echo $view->render('Companies/Users/Dash/Views::users/edit.php');
	}
	
	/**
	 * This controller doesn't allow reading, only editing, so redirect to the edit method
	 */
	protected function doRead(array $data, $key=null)
	{
		$f3 = \Base::instance();
		$id = $this->getItem()->get( $this->getItemKey() );
		$route = str_replace('{id}', $id, $this->edit_item_route );
		$f3->reroute( $route );
	}
	
	protected function displayRead() {}
}