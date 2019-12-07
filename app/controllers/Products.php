<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 10/15/2019
 * Time: 8:26 AM
 */

class Products extends Controller
{
    public function listall(){


        $rs = new RestApi();

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        //Calling pagination class
        $pag = Pagination::paginate();
        $page = $pag['page'];
        $limit = $pag['limit'];

        //Getting the actual Api method
        $productdata = ProductData::getAllData($page, $limit);


        //Get Product Count
        $productcount = ProductData::getTotalCount();


        $prodata = [];

        foreach($productdata as $pro){

            $productname = $pro->name;
            $quantity = @$pro->quantity;
            $catid  = $pro->categoryid;
            $createdat = $pro->createdat;
            $saleprice = $pro->saleprice;
            $price = $pro->price;
            $publishedat  = $pro->publishedat;
            $color  = $pro->createdat;
            $weight  = $pro->weight;
            $size  = $pro->size;
            $sku = $pro->sku;
            $shopifyid = $pro->shopifyid;
            $productid = $pro->productid;

            // Get Category Data
            $cat = new Categories($catid);
            $categoryname = $cat->recordObject->category;

            $addons = ProductData::getProductAddonsbyProductId($productid);
            $addonsdata = [];
            if(count($addons) > 0 ) {
                foreach ($addons as $get) {
                    $addonid = $get->adid;
                    $ad = new Productaddons($addonid);
                    $addonname = $ad->recordObject->addon;
                    $addonsdata[] = ['addon' => $addonname, 'addid' => $addonid];
                }
            }

            $tagdata = $this->getProductTage($productid);

            $prodata[] = ['productname'=>$productname, 'quantity'=>$quantity, 'createdAt'=>$createdat,
                'publishedat'=>$publishedat, 'category'=>$categoryname,
                'productid'=>$productid, 'categoryid'=>$catid, 'saleprice'=>$saleprice,
                'price'=>$price, 'weight'=>$weight , 'size'=>$size,'color'=>$color,'sku'=>$sku,
                'shopifyid'=>$shopifyid, 'productaddons'=>$addonsdata , 'tagname'=>$tagdata];
        }

        $data = ['products'=>$prodata, 'totalcount'=>$productcount];

        $rs->returnResponse($data);

    }

    public function details($productid = null)
    {
        $rs = new RestApi();

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);


        //Check if product ID is null
        if($productid == null){
            $rs->throwErrror('PRO_02', PRO_02, 'Product ID' );
        }

        //Check if product ID is valid
        $procount = ProductData::getCountById($productid);
        if($procount == 0){
            $rs->throwErrror('PRO_01', PRO_01, 'Product ID' );
        }

        //Getting the actual Api method
        $pro = new ProductData($productid);
        $productname = $pro->recordObject->name;
        $quantity = $pro->recordObject->quantity;
        $catid  = $pro->recordObject->categoryid;
        $createdat = $pro->recordObject->createdat;
        $saleprice = $pro->recordObject->saleprice;
        $price = $pro->recordObject->price;
        $publishedat  = $pro->recordObject->publishedat;
        $color  = $pro->recordObject->createdat;
        $weight  = $pro->recordObject->weight;
        $size  = $pro->recordObject->size;
        $sku = $pro->recordObject->sku;
        $shopifyid = $pro->recordObject->shopifyid;




        // Get Category Data
        $cat = new Categories($catid);
        $categoryname = $cat->recordObject->category;

        $addons = ProductData::getProductAddonsbyProductId($productid);
        $addonsdata = [];
        if(count($addons) > 0 ) {
            foreach ($addons as $get) {
                $addonid = $get->adid;
                $ad = new Productaddons($addonid);
                $addonname = $ad->recordObject->addon;
                $addonsdata[] = ['addon' => $addonname, 'addid' => $addonid];
            }
        }

        $tagdata = $this->getProductTage($productid);


        $prodata = ['productname'=>$productname, 'quantity'=>$quantity, 'createdAt'=>$createdat,
                     'publishedat'=>$publishedat,'tagname'=>$tagdata, 'category'=>$categoryname,
                     'productid'=>$productid, 'categoryid'=>$catid, 'saleprice'=>$saleprice,
                     'price'=>$price, 'weight'=>$weight , 'size'=>$size,'color'=>$color,
                     'sku'=>$sku,  'shopifyid'=>$shopifyid, 'productaddons'=>$addonsdata ];

        $rs->returnResponse($prodata);

    }


    public function  delete($productid = null){

        $rs = new RestApi();

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        $method = $_SERVER['REQUEST_METHOD'];

        if($method !== 'DELETE') {
            $rs->throwErrror('REQUEST_METHOD_NOT_VALID', 'Request method not allowed', 'Request Method');
        }


        //Check if product ID is null
        if($productid == null){
            $rs->throwErrror('PRO_02', PRO_02, 'Product ID' );
        }

        //Check if product ID is valid
        $procount = ProductData::getCountById($productid);
        if($procount == 0){
            $rs->throwErrror('PRO_01', PRO_01, 'Product ID' );
        }

        //Getting the actual Api method

        $us = new ProductData($productid);
        $us->deleteFromDB();

        $data= ['message'=>'Product successfully deleted', 'ProductID'=>$productid];
        $rs->returnResponse($data);
    }

    public function search($parameter = null)
    {
        $rs = new RestApi();

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        //Calling pagination class
        $pag = Pagination::paginate();
        $page = $pag['page'];
        $limit = $pag['limit'];



        //Getting the actual Api method
        $productdata = ProductData::searhProduct($parameter, $page, $limit);
        $productcount = ProductData::searhProductCount($parameter);

        $prodata = [];

        foreach($productdata as $pro){

            $productname = $pro->name;
            $quantity = @$pro->quantity;
            $catid  = $pro->categoryid;
            $createdat = $pro->createdat;
            $saleprice = $pro->saleprice;
            $price = $pro->price;
            $publishedat  = $pro->publishedat;
            $color  = $pro->createdat;
            $weight  = $pro->weight;
            $size  = $pro->size;
            $sku = $pro->sku;
            $shopifyid = $pro->shopifyid;
            $productid = $pro->productid;



            // Get Category Data
            $cat = new Categories($catid);
            $categoryname = $cat->recordObject->category;

            $addons = ProductData::getProductAddonsbyProductId($productid);
            $addonsdata = [];
            if(count($addons) > 0 ) {
                foreach ($addons as $get) {
                    $addonid = $get->adid;
                    $ad = new Productaddons($addonid);
                    $addonname = $ad->recordObject->addon;
                    $addonsdata[] = ['addon' => $addonname, 'addid' => $addonid];
                }
            }

            $tagdata = $this->getProductTage($productid);

            $prodata[] = ['productname'=>$productname, 'quantity'=>$quantity, 'createdAt'=>$createdat,
                'publishedat'=>$publishedat,'tagname'=>$tagdata, 'category'=>$categoryname,
                'productid'=>$productid, 'categoryid'=>$catid, 'saleprice'=>$saleprice,
                'price'=>$price, 'weight'=>$weight , 'size'=>$size,'color'=>$color,
                'sku'=>$sku,  'shopifyid'=>$shopifyid, 'productaddons'=>$addonsdata ];
        }

        $data = ['products'=>$prodata, 'totalcount'=>$productcount];

        $rs->returnResponse($data);

    }

    private function getProductTage($productid){
       $tags = ProductData::getTagsbyProductId($productid);
       $tagdata = [];

       foreach($tags as $get){
           $tagid = $get->tagid;
           $tg  = new Tagdata($tagid);
           $tagname = $tg->recordObject->tagname;
           $tagdata[] = ['tagname'=>$tagname, 'tagid'=>$tagid];
       }

       return $tagdata;
    }





}