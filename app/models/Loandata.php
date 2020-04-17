<?php
/**
 * Created by PhpStorm.
 * User: oduru
 * Date: 1/14/2020
 * Time: 2:14 PM
 */

class Loandata extends  tableDataObject
{

    const TABLENAME  = 'loans';

    public static function getLoanByCustomerID($bid){
        global $connectedDb;
        $getdata = "SELECT *  from loans where bid = $bid  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->singleRecord();
    }

    public static function getAllActiveLoan(){
        global $connectedDb;
        $getdata = "SELECT *  from loans where amount > 0  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->resultSet();
    }

    public static function getLoanByAccoountNumber($accountnumber){
        global $connectedDb;
        $getdata = "SELECT *  from loans where accountnumber = '$accountnumber'  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->resultSet();
    }

    public static function getLoanSingleByAccoountNumber($accountnumber){
        global $connectedDb;
        $getdata = "SELECT *  from loans where accountnumber = '$accountnumber'  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->singleRecord();
    }

    public static function getLoanSingleByAccoountNumberWithStatus($accountnumber){
        global $connectedDb;
        $getdata = "SELECT *  from loans where accountnumber = '$accountnumber' and status = 1  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->singleRecord();
    }

    public static function getLoanCountByAccoountNumber($accountnumber){
        global $connectedDb;
        $getdata = "SELECT  *  from loans where accountnumber = '$accountnumber'  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->resultSet();
    }


    public static function getLoanPayments(){
        global $connectedDb;
        $getdata = "SELECT SUM(payments.amount) AS amt  FROM accounts INNER JOIN payments
                    ON accounts.accountnumber = payments.accountnumber
                    WHERE accounts.accounttype = 'Loan Account'  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->fetchColumn();
    }


    public static function gettotalLoans(){
        global $connectedDb;
        $getdata = "SELECT sum(amount) as amt  from loans   ";
        $connectedDb->prepare($getdata);
        return $connectedDb->fetchColumn();
    }

    public static function gettotalLoansByAccountNumber($accountnumber){
        global $connectedDb;
        $getdata = "SELECT sum(amount) as amt  from loans where accountnumber = '$accountnumber'   ";
        $connectedDb->prepare($getdata);
        return $connectedDb->fetchColumn();
    }

    public static function getmaxloan($accountnumber){
        global $connectedDb;
        $getdata = "SELECT max(loanid) as loanid  from loans where accountnumber = '$accountnumber'  and status = 1  ";
        $connectedDb->prepare($getdata);
        return $connectedDb->fetchColumn();
    }




}