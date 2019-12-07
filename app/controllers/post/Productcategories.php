<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 10/29/2019
 * Time: 3:40 PM
 */

class Productcategories extends PostController
{
    public function add(){

        $rs = new RestApi();

        $requiredfieldnames = ['category'];
        $category = isset($_POST['category']) ? trim($_POST['category']) : '';

        $postfields = (array_keys($_POST));

        //Validating the fieldnames in the method
        $rs->validateFieldNames($requiredfieldnames, $postfields);
        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        $catcount = Categories::getCountbyName($category);
        if($catcount > 0){
            $rs->throwErrror('CAT_01', CAT_01, 'category');
        }

        //Add Category
        $tm = new Categories();
        $tm->recordObject->name = $category;
        if($tm->store()){
            $tid = $tm->recordObject->catid;
            $data = ['message'=> 'Category added successfully', 'category id'=>$tid ];
            $rs->returnResponse($data);
        }

    }

    public function update($categoryid  = null){

        $rs = new RestApi();

        $requiredfieldnames = ['category'];
        $category = isset($_POST['category']) ? trim($_POST['category']) : '';

        $postfields = (array_keys($_POST));

        //Validating the fieldnames in the method
        $rs->validateFieldNames($requiredfieldnames, $postfields);
        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        if($categoryid == null){
            $rs->throwErrror('CAT_02', CAT_02, 'category id');
        }

        $catcount = Categories::getCountbyName($category);
        if($catcount > 0){
            $rs->throwErrror('CAT_01', CAT_01, 'category');
        }

        //Update Category
        $tm = new Categories($categoryid);
        $tm->recordObject->name = $category;
        if($tm->store()){
            $catdata = $tm->recordObject;
            $data = ['message'=> 'Category updated successfully', 'categorydata'=>$catdata ];
            $rs->returnResponse($data);
        }

    }
}