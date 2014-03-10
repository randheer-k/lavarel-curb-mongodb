<?php 
use Jenssegers\Mongodb\Model as Eloquent;
class Network extends Eloquent   {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $collection  = 'networks';
	
    protected $fillable = array('n_name', 'n_ip', 'n_status', 'nid');

}