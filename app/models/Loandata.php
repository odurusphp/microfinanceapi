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
        global $fdadb;
        $getdata = "SELECT *  from loans where bid = $bid  ";
        $fdadb->prepare($getdata);
        return $fdadb->singleRecord();
    }

    public static function getAllActiveLoan(){
        global $fdadb;
        $getdata = "SELECT *  from loans where amount > 0  ";
        $fdadb->prepare($getdata);
        return $fdadb->resultSet();
    }

    public static function getLoanByAccoountNumber($accountnumber){
        global $fdadb;
        $getdata = "SELECT *  from loans where accountnumber = '$accountnumber'  ";
        $fdadb->prepare($getdata);
        return $fdadb->resultSet();
    }

    public static function getLoanSingleByAccoountNumber($accountnumber){
        global $fdadb;
        $getdata = "SELECT *  from loans where accountnumber = '$accountnumber'  ";
        $fdadb->prepare($getdata);
        return $fdadb->singleRecord();
    }

    public static function getLoanSingleByAccoountNumberWithStatus($accountnumber){
        global $fdadb;
        $getdata = "SELECT *  from loans where accountnumber = '$accountnumber' and status = 1  ";
        $fdadb->prepare($getdata);
        return $fdadb->singleRecord();
    }

    public static function getLoanCountByAccoountNumber($accountnumber){
        global $fdadb;
        $getdata = "SELECT *  from loans where accountnumber = '$accountnumber'  ";
        $fdadb->prepare($getdata);
        return $fdadb->resultSet();
    }


    public static function getLoanPayments(){
        global $fdadb;
        $getdata = "SELECT SUM(payments.amount) AS amt  FROM accounts INNER JOIN payments
                    ON accounts.accountnumber = payments.accountnumber
                    WHERE accounts.accounttype = 'Loan Account'  ";
        $fdadb->prepare($getdata);
        return $fdadb->fetchColumn();
    }


    public static function gettotalLoans(){
        global $fdadb;
        $getdata = "SELECT sum(amount) as amt  from loans   ";
        $fdadb->prepare($getdata);
        return $fdadb->fetchColumn();
    }

    public static function gettotalLoansByAccountNumber($accountnumber){
        global $fdadb;
        $getdata = "SELECT sum(amount) as amt  from loans where accountnumber = '$accountnumber'   ";
        $fdadb->prepare($getdata);
        return $fdadb->fetchColumn();
    }

    public static function getmaxloan($accountnumber){
        global $fdadb;
        $getdata = "SELECT max(loanid) as loanid  from loans where accountnumber = '$accountnumber'  and status = 1  ";
        $fdadb->prepare($getdata);
        return $fdadb->fetchColumn();
    }




}