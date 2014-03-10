<?php 
use Jenssegers\Mongodb\Model as Eloquent;
class Hostname extends Eloquent   {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $collection  = 'hostnames';
	
    protected $fillable = array('hostname', 'block');

}