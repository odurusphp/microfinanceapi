<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 11/2/2019
 * Time: 4:01 PM
 */

class Products extends PostController
{
    public function  add(){

        $rs = new RestApi();

        $requiredfieldnames = ['name','price', 'color', 'weight','size','sku', 'shopifyid', 'saleprice',
                               'categoryid', 'tagid', 'quantity', 'productaddons'];

        $name = isset($_POST['name']) ? trim($_POST['name']) : '';
        $categoryid = isset($_POST['categoryid']) ? trim($_POST['categoryid']) : '';
        $tags = isset($_POST['tagid']) ? trim($_POST['tagid']) : '';
        $quantity = isset($_POST['quantity']) ? trim($_POST['quantity']) : '';
        $price = isset($_POST['price']) ? trim($_POST['price']) : '';
        $saleprice = isset($_POST['saleprice']) ? trim($_POST['saleprice']) : '';
        $weight = isset($_POST['weight']) ? trim($_POST['weight']) : '';
        $color = isset($_POST['color']) ? trim($_POST['color']) : '';
        $size = isset($_POST['size']) ? trim($_POST['size']) : '';
        $sku = isset($_POST['sku']) ? trim($_POST['sku']) : '';
        $productaddons = isset($_POST['productaddons']) ? trim($_POST['productaddons']) : '';
        $shopifyid = isset($_POST['shopifyid']) ? trim($_POST['shopifyid']) : '';

        $postfields = (array_keys($_POST));

        //Validating the fieldnames in the method
        $rs->validateFieldNames($requiredfieldnames, $postfields);

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);


        //Verify Category ID
        $catcount = Categories::getCountById($categoryid);
        if($catcount == 0){
            $rs->throwErrror('CAT_02', CAT_02, 'category ID');
        }

        $pro = new ProductData();
        $prodata =& $pro->recordObject;
        $prodata->name = $name;
        $prodata->categoryid = $categoryid;
        $prodata->quantity = $quantity;
        $prodata->price = $price;
        $prodata->saleprice = $saleprice;
        $prodata->sku = $sku;
        $prodata->weight = $weight;
        $prodata->color = $color;
        $prodata->size = $size;
        $prodata->shopifyid = $shopifyid;
        $prodata->createdat = date('Y-m-d');
        $prodata->publishedat = date('Y-m-d');
        if($pro->store()){
            $productid = $pro->recordObject->productid;
            $this->producraddons($productaddons, $productid);
            $this->producttags($tags, $productid);
            $data = ['message'=>'Product seccessfully  added', 'productid'=>$productid ];
            $rs->returnResponse($data);

        }

    }

    private function producraddons($addonids, $productid){

        if($addonids != '') {
            $addondata = explode(',', $addonids);

            foreach ($addondata as $id) {
                $count = ProductData::getaddOnCountById($id);
                if ($count == 0) {
                    ProductData::insertProductsAddons($productid, $id);
                }
            }
        }

    }

    private function producttags($tagid, $productid){

        if($tagid != '') {
            $addondata = explode(',', $tagid);

            foreach ($addondata as $id) {
                $count = ProductData::getTagCountById($id, $productid);
                if ($count == 0) {
                    ProductData::insertProductstags($productid, $id);
                }
            }
        }

    }


    public function  update($productid = null){

        $rs = new RestApi();

        $requiredfieldnames = ['name','price', 'color', 'weight', 'color','size','sku', 'shopifyid', 'saleprice',
            'categoryid', 'tagid', 'quantity', 'productaddons'];

        $name = isset($_POST['name']) ? trim($_POST['name']) : '';
        $categoryid = isset($_POST['categoryid']) ? trim($_POST['categoryid']) : '';
        $tagid = isset($_POST['tagid']) ? trim($_POST['tagid']) : '';
        $quantity = isset($_POST['quantity']) ? trim($_POST['quantity']) : '';
        $price = isset($_POST['price']) ? trim($_POST['price']) : '';
        $saleprice = isset($_POST['saleprice']) ? trim($_POST['saleprice']) : '';
        $weight = isset($_POST['weight']) ? trim($_POST['weight']) : '';
        $color = isset($_POST['color']) ? trim($_POST['color']) : '';
        $size = isset($_POST['size']) ? trim($_POST['size']) : '';
        $sku = isset($_POST['sku']) ? trim($_POST['sku']) : '';
        $productaddons = isset($_POST['productaddons']) ? trim($_POST['productaddons']) : '';
        $shopifyid = isset($_POST['shopifyid']) ? trim($_POST['shopifyid']) : '';

        $postfields = (array_keys($_POST));

        //Validating the fieldnames in the method
        $rs->validateFieldNames($requiredfieldnames, $postfields);

        // Verify Apikey
        $rs->getApikey();

        //Getting Authorization token
        $token = $rs->getBearerToken();

        //Verifying Token
        $rs->verifyToken($token);

        //Checking if product ID is  null
        if($productid == null){
            $rs->throwErrror('PRO_02', PRO_02,  'Product ID');
        }

        //Verify Product ID
        $procount  =  ProductData::getCountById($productid);
        if($procount == 0){
            $rs->throwErrror('PRO_01', PRO_01, 'Product ID' );
        }



        //Verify Category ID
        $catcount = Categories::getCountById($categoryid);
        if($catcount == 0){
            $rs->throwErrror('CAT_03', CAT_03, 'category ID');
        }

        $pro = new ProductData($productid);
        $prodata =& $pro->recordObject;
        $prodata->name = $name;
        $prodata->categoryid = $categoryid;
        $prodata->quantity = $quantity;
        $prodata->price = $price;
        $prodata->saleprice = $saleprice;
        $prodata->sku = $sku;
        $prodata->weight = $weight;
        $prodata->color = $color;
        $prodata->size = $size;
        $prodata->shopifyid = $shopifyid;
        $prodata->createdat = date('Y-m-d');
        $prodata->publishedat = date('Y-m-d');
        if($pro->store()){
            $productid = $pro->recordObject->productid;
            $this->producraddons($productaddons, $productid);
            $this->producttags($tagid, $productid);
            $data = ['message'=>'Product seccessfully updated', 'productid'=>$productid ];
            $rs->returnResponse($data);

        }

    }

}