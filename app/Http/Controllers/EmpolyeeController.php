<?php

namespace App\Http\Controllers;
use App\Models\empolyee;

use Illuminate\Http\Request;

class EmpolyeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = empolyee::all();
        $html = "";
       
        foreach($datas as $key=>$data){
            $html .='   <tr>
                    <td>'.$data->name.'</td>
                    <td>'.$data->phone.'</td>                        
                    <td>'.$data->email.'</td>
                    <td>'.$data->password.'</td>
                    <td>'.$data->address.'</td> 
                    <td>
                    <button id="edit" data-bs-toggle="modal" onclick="editemployee('.$data->id.')" data-bs-target="#editModal" class="btn btn-warning mb-3">Edit</button>
                    <button class="btn btn-danger mb-3" onclick="deleteEmployee('.$data->id.')">Delete</button>
                    </td>  
            </tr>';
        }
        return $html;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new empolyee(); 
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->address = $request->address;
        $data->save();
        return response()->json(["massage"=>"insert success"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = empolyee::find($id);

        $html = ' <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" id="" value = "'.$data->name.'">
        <input class="form-control" type="hidden" name="id" id="" value = "'.$data->id.'">
    </div>
    <div class="form-group">
        <label for="contact">Phone</label>
        <input class="form-control" type="text" name="phone" id="" value = "'.$data->phone.'">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
    <input class="form-control" type="text" name="address" id="" value = "'.$data->address.'">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="email" name="email" id="" value = "'.$data->email.'">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password" id="" value = "'.$data->password.'">
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <input class="btn btn-primary" name="submit" type="submit" id="edit_submit" value="submit">
</div>
</form>
    ';

    return $html;
        
          
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        print_r($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
