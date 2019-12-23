<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 12/12/2019
 * Time: 3:21 AM
 */

class Customer extends Controller
{
    public function details($basicid = null)
    {
        $rs = new RestApi();

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);


        //Getting the actual Api method
        $us = new Basicinformation($basicid);
        $basicdata = $us->recordObject;

        //Getting Image
        $im  = Documents::getDocumentbyID($basicid, 'Profile');
        $image  = isset($im->name) ? URLROOT.'/uploads/'.$im->name : '';

        $alluserdata = ['basicdata'=>$basicdata, 'image'=>$image];

        $rs->returnResponse($alluserdata);

    }


    public function all()
    {
        $rs = new RestApi();

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);


        //Getting the actual Api method
        $customerdata = Basicinformation::getLimitedCustomers();
        $alluserdata = ['customerdata'=>$customerdata];

        $rs->returnResponse($alluserdata);

    }

    public function identity($basicid)
    {
        $rs = new RestApi();

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        //Getting the actual Api method

        $iddata = Identification::getIdentificationByBid($basicid);
        $idnumber = isset($iddata->idnumber) ?  $iddata->idnumber : '';
        $idtype = isset($iddata->idnumber) ?  $iddata->idnumber : '';
        $dateofissue = isset($iddata->idnumber) ?  $iddata->idnumber : '';
        $dateofexpiry  = isset($iddata->idnumber) ?  $iddata->idnumber : '';

        //Getting Image
        $im  = Documents::getDocumentbyID($basicid, 'Identity');
        $image  = isset($im->name) ? URLROOT.'/uploads/'.$im->name : URLROOT.'/uploads/noimage.jpg';

        $imagecount = Documents::getDocumentbyIDCount($basicid, 'Identity');

        $alluserdata = ['idnumber'=>$idnumber, 'idtype'=>$idtype, 'dateofissue'=>$dateofissue,
                        'expirydate'=>$dateofexpiry,  'image'=>$image, 'imagecount'=>$imagecount];


        $rs->returnResponse($alluserdata);

    }




}