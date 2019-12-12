<?php 

namespace App\Http\Controllers;

use Auth;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $user = User::find($id);
    // $user = $user->findOrFail($id);
    // $user = $user->getData($id);

    // Meta title
    $metaTitle = $user->name;

    // User data
    $createdDate = new Carbon($user->created_at);
    $updatedDate = new Carbon($user->created_at);
    $user->creationDate = $createdDate->isoFormat('DD MMMM, YYYY');
    $user->updatedDate = $updatedDate->isoFormat('DD MMMM, YYYY');
    $user->sheetsCount = count($user->characters);

    return view('user.show', compact('metaTitle', 'user'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $user = Auth::user()->find($id);

    // Meta title
    $metaTitle = $user->name;

    return view('user.edit', compact('metaTitle', 'user'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>