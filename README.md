# PhonePe Payment Gateway PHP SDK (PHP/CODEIGNITER/LARAVEL)
This is PhonePe Payment Gateway SDK for the [PhonePe API](https://developer.phonepe.com/v1/reference/pay-api-1).


## About PhonePe
PhonePe is India’s most trusted digital payment partner. To help you with your business, we have launched PhonePe Payment Gateway. This helps you seamlessly process 100% online payments from your customers and is absolutely secure. We are also equipped to handle large-scale transactions with best-in-class success rates.

### What PhonePe offer?
**Flexible integration:** Our pre-built checkout integration fits easily into any business requirement.
**User-friendly SDKs & Plugins:**  Integrate easily across any web platform and mobile applications
**Wide range of Payment methods:**  Accept payments through debit/credit cards, UPI, and net banking.
**User-friendly dashboard:**  Efficiently manage and track your transactions, settlements, refunds, and customer issues.
## Contributing
Pull requests are more than welcome. I have created with clean code and developer and begginer user friendly for easy to use and implement also i have tested our code many time its better for use.

If you are using any other payment methods, please create a pull request with your solution, and I will merge it.

## Installation
```bash
composer require Sinhcoms-LLP/phonepe-payment-gateway main
```

## Usage

### PhonePe PAY API

- Creating a index.php
```php
<?php
use sinhcoms\PhonePePaymentGateway\PhonePe;

require __DIR__ . '/vendor/autoload.php';

$config = new PhonePe('PHONEPE_MERCHANTID','PHONEPE_SALTKEY',PHONEPE_SALTINDEX);//merchantId,SaltKey,SaltIndex after onboarding PhonePe Payment gateway you will got this.
$merchantTransactionId='MUID' . substr(uniqid(), -6);// Uqique Randoe transcation Id
$merchantOrderId='Order'.mt_rand(1000,99999);// orderId
$amount=100;// Amount in Paisa or amount*100
$redirectUrl="/success.php";// Redirect Url after Payment success or fail
$mode="PRODUCTION"; // MODE or PAYMENT UAT(test) or PRODUCTION(production)
$callbackUrl="/success.php";//Callback Url after Payment success or fail get response
$mobileNumber=9876543210;//Mobile No
$data=$config->PaymentCall("$merchantTransactionId","$merchantOrderId","$amount","$redirectUrl","$callbackUrl","$mobileNumber","$mode");// call function to get response form phonepe like url,msg,status
//header('Location:'. $data['url']);//use when you directly want to redirect to phonepe gateway
echo $data['url']; // here you get url after initiated PhonePe gateway
```
