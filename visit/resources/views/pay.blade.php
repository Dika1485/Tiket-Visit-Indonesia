<html>


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ $ckey }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    <script src="https://code.jquery.com/jquery-3.6.2.min.js"
        integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
</head>

<body>
    <form id="submit_form" action="" method="POST">
        @csrf
        <input type="hidden" name="json" id="json_callback">
    </form>
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need

        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{ $snapToken }}'), {
            onSuccess: function(result) {
                /* You may add your own implementation here */
                alert("payment success!");
                console.log(result);
                send_response_to_form(result);
            },
            onPending: function(result) {
                /* You may add your own implementation here */
                alert("wating your payment!");
                console.log(result);
                send_response_to_form(result);
            },
            onError: function(result) {
                /* You may add your own implementation here */
                alert("payment failed!");
                console.log(result);
                send_response_to_form(result);
            },
            onClose: function() {
                /* You may add your own implementation here */
                alert('you closed the popup without finishing the payment');
            }
        };
        // customer will be redirected after completing payment pop-up
        function send_response_to_form(result) {
            document.getElementById('json_callback').value = JSON.stringify(result);
            $('#submit_form').submit();
        }

        function payment_post(Request $request) {
            $json = json_decode($request - > get('json'));
            $order = new Transaksi();
            $order - > kode = $this - > faker(regexify);
            $order - > status = $json - > transaction_status;
            $order - > uname = $request - > get('uname');
            $order - > email = $request - > get('email');
            $order - > jumlah = $request - > get('number');
            $order - > transaction_id = $json - > transaction_id;
            $order - > order_id = $json - > order_id;
            $order - > gross_amount = $json - > gross_amount;
            $order - > metode = $json - > payment_type;
            $order - > payment_code = $json - > payment_code;
            $order - > pdf_url = $json - > pdf_url;
            return $order - > save() ? redirect(url('/'));
        }
    </script>

</body>

</html>
