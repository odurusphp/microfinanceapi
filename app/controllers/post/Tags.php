<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 10/29/2019
 * Time: 10:05 AM
 */

class Tags extends PostController
{
    public function add(){

        $rs = new RestApi();

        $requiredfieldnames = ['tagname'];
        $tagname= isset($_POST['tagname']) ? trim($_POST['tagname']) : '';

        $postfields = (array_keys($_POST));

        //Validating the fieldnames in the method
        $rs->validateFieldNames($requiredfieldnames, $postfields);
        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        $tagcount = Tagdata::getCountbyName($tagname);
        if($tagcount > 0){
            $rs->throwErrror('TG_01', TG_01, 'tag');
        }

        //Add Tag
        $tm = new Tagdata();
        $tm->recordObject->tagname = $tagname;
        if($tm->store()){
            $tagid = $tm->recordObject->tagid;
            $data = ['message'=> 'Team added successfully', 'tid'=>$tagid ];
            $rs->returnResponse($data);
        }

    }

    public function update($tagid=null){

        $rs = new RestApi();

        $requiredfieldnames = ['tagname'];
        $tagname = isset($_POST['tagname']) ? trim($_POST['tagname']) : '';

        $postfields = (array_keys($_POST));

        //Validating the fieldnames in the method
        $rs->validateFieldNames($requiredfieldnames, $postfields);
        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        $tagcount = Tagdata::getCountbyName($tagname);
        if($tagcount > 0){
            $rs->throwErrror('TG_01', TG_01, 'tag');
        }

        //Update Tag
        $tm = new TagData($tagid);
        $tm->recordObject->tagname = $tagname;
        if($tm->store()){
            $tagdata = $tm->recordObject;
            $data = ['message'=> 'Tag updated successfully', 'tagdata'=>$tagdata ];
            $rs->returnResponse($data);
        }

    }
}