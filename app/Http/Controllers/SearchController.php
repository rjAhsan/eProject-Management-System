<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        {
            if($request->ajax())

            {

                $output="";
 if ($projectss = true) {
     $projectss = DB:: table('project_ideas')->where('Ideas_Title', 'LIKE', '%' . $request->search . "%")->get()
         ->orwhere('ideas_Description', 'LIKE', '%' . $request->search . "%")->get()
         ->orwhere('ideas_Domain', 'LIKE', '%' . $request->search . "%")->get();
 return true;}


                if($projectss)

                {

                    foreach ($projectss as $key => $project) {

                        $output.='<tr>'.



                            '<td>'.$project->Ideas_Title.'</td>'.

                            '<td>'.$project->ideas_Description.'</td>'.

                            '<td>'.$project->ideas_Domain.'</td>'.

                            '</tr>';

                    }







                }



            }



        }

        return Response($output);

    }


}




