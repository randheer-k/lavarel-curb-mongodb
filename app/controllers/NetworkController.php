<?php

class NetworkController extends \BaseController { 
	
	/**
	 * Display a listing of the networs.
	 *
	 * @return Response
	 */
	public function index()
	{	 
		$networks =  $this->user->networks;
		
		$this->layout->content =  View::make('network.index')->with('networks', $networks);
	}

	/**
	 * Show the form for creating a new network.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('network.create');
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
			'n_name'       => 'required',
			'n_ip'      => 'required|ip',
			'n_status' => 'required|numeric'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('network/create')
				->withErrors($validator);
		} else {
			// store			
			 
			$nid = count($this->user->networks) - 1;
		    $nid = $nid > 0 ? $this->user->networks[$nid]['nid'] + 1 : 1;

			$network = new Network(array('nid' => $nid, 'n_name'=>Input::get('n_name'), 'n_ip'=>Input::get('n_ip'), 'n_status'=> Input::get('n_status')));
			$id = $this->user->network()->save($network); 
			// redirect
			Session::flash('message', 'Network added successfully !');
			return Redirect::to('network');
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
		$network = $this->user->networks[$id - 1];
		$this->layout->content = View::make('network.show')->with('network', $network);
	}

	/**
	 * Show the form for editing the specified network.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{	 
		$network = $this->user->networks[$id - 1];
		$this->layout->content =  View::make('network.edit')->with('network', $network);
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
			'n_name'       => 'required',
			'n_ip'      => 'required|ip',
			'n_status' => 'required|numeric'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if (false || $validator->fails()) {
			return Redirect::to('network/' . Input::get('nid') -1 . '/edit')
				->withErrors($validator);
		} else {
			// store 
			$this->user->network()->destroy($id);
			$network = new Network(array('nid' => Input::get('nid'), 'n_name'=>Input::get('n_name'), 'n_ip'=>Input::get('n_ip'), 'n_status'=> Input::get('n_status')));
			$this->user->network()->save($network); 

			// redirect
			Session::flash('message', 'Successfully updated network!');
			return Redirect::to('network');
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
		$this->user->network()->destroy($id);

		// redirect
		Session::flash('message', 'Successfully deleted the networks!');
		return Redirect::to('network');
	}

}