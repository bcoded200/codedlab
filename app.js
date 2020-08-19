function payWithPaystack1() {

    var handler = PaystackPop.setup({
        key: 'pk_test_3d64d7cc4d9cb7c4b5ab6a8b718ce0217fd19e42', //put your public key here
        email: 'dakingeorge58@gmail.com', //put your customer's email here
        amount: 50000, //amount the customer is supposed to pay
        metadata: {
            custom_fields: [
                {
                    display_name: "Mobile Number",
                    variable_name: "mobile_number",
                    value: "+2348162791926" //customer's mobile number
                }
            ]
        },
        callback: function (response) {
            window.location.href = "page1.php";
            //after the transaction have been completed
            //make post call  to the server with to verify payment 
            //using transaction reference as post data
            $.post("page1.php", { reference: response.reference }, function (status) {

                if (status == "success")

                    //successful transaction
                    alert('Transaction was successful');


                else
                    //transaction failed
                    alert(response);
            });
        },
        onClose: function () {
            //when the user close the payment modal
            alert('Transaction cancelled');
        }
    });
    handler.openIframe(); //open the paystack's payment modal
}

//second payment starts here

function payWithPaystack2() {

    var handler = PaystackPop.setup({
        key: 'pk_test_3d64d7cc4d9cb7c4b5ab6a8b718ce0217fd19e42', //put your public key here
        email: 'dakingeorge58@gmail.com', //put your customer's email here
        amount: 100000, //amount the customer is supposed to pay
        metadata: {
            custom_fields: [
                {
                    display_name: "Mobile Number",
                    variable_name: "mobile_number",
                    value: "+2348162791926" //customer's mobile number
                }
            ]
        },
        callback: function (response) {
            //after the transaction have been completed
            //make post call  to the server with to verify payment 
            //using transaction reference as post data
            $.post("verify.php", { reference: response.reference }, function (status) {

                if (status == "success")
                    //successful transaction

                    alert('Transaction was successful');
                else
                    //transaction failed
                    alert(response);
            });
        },
        onClose: function () {
            //when the user close the payment modal
            alert('Transaction cancelled');
        }
    });
    handler.openIframe(); //open the paystack's payment modal
}
//third payment starts here
function payWithPaystack3() {

    var handler = PaystackPop.setup({
        key: 'pk_test_3d64d7cc4d9cb7c4b5ab6a8b718ce0217fd19e42', //put your public key here
        email: 'dakingeorge58@gmail.com', //put your customer's email here
        amount: 200000, //amount the customer is supposed to pay
        metadata: {
            custom_fields: [
                {
                    display_name: "Mobile Number",
                    variable_name: "mobile_number",
                    value: "+2348162791926" //customer's mobile number
                }
            ]
        },
        callback: function (response) {
            window.location.href = "page3.php";
            //after the transaction have been completed
            //make post call  to the server with to verify payment 
            //using transaction reference as post data
            $.post("verify.php", { reference: response.reference }, function (status) {
                if (status == "success")
                    //successful transaction
                    alert('Transaction was successful');
                else
                    //transaction failed
                    alert(response);
            });
        },
        onClose: function () {
            //when the user close the payment modal
            alert('Transaction cancelled');
        }
    });
    handler.openIframe(); //open the paystack's payment modal
}


