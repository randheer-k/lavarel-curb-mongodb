<?php

class HostnameController extends \BaseController {

	/**
	 * Display a listing of the networs.
	 *
	 * @return Response
	 */
	public function index()
	{			
		$hostnames =  $this->user->hostnames;
		$this->layout->content = View::make('hostname.index')->with('hostnames', $hostnames);
	}

	/**
	 * Show the form for creating a new network.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('hostname.create');
	}

	/**
	 * Store a newly created network in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// validate 
		$rules = array(
			'hostname'       => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('hostname/create')
				->withErrors($validator);
		} else {
			// store			 
			$hostname = new Hostname(array( 'hostname'=>Input::get('hostname'), 'block'=>Input::get('block')));
			$this->user->hostname()->save($hostname); 
			// redirect
			Session::flash('message', 'Network added successfully !');
			return Redirect::to('hostname');
		}

	}

	/**
	 * Display the specified network.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$hostname =  $this->user->hostnames[$id - 1];
		$this->layout->content = View::make('hostname.show')->with('hostname', $hostname);
	}

	/**
	 * Show the form for editing the specified network.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{	
		$hostname =  $this->user->hostnames[$id - 1];
		$this->layout->content =  View::make('hostname.edit')->with('hostname', $hostname);
	}

	/**
	 * Update the specified resource in network.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
		// validate
		$rules = array(
			'hostname'       => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if (false || $validator->fails()) {
			return Redirect::to('hostname/' . Input::get('nid') -1 . '/edit')
				->withErrors($validator);
		} else {
			// store
			$this->user->hostname()->destroy($id);
			$hostname = new Hostname(array('hostname' => Input::get('hostname'), 'block'=>Input::get('block')));
			$this->user->hostname()->save($hostname); 

			// redirect
			Session::flash('message', 'Successfully updated network!');
			return Redirect::to('hostname');
		}
	}

	/**
	 * Remove the specified network from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
		$this->user->hostname()->destroy($id);

		// redirect
		Session::flash('message', 'Successfully deleted the networks!');
		return Redirect::to('hostname');
	}

}