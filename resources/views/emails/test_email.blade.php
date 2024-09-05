<!DOCTYPE html>
<html>
<head>
    <title>You Just Received a New Booking!</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <style>
        h1{
            background:#202020;
            color:#fff;
            text-align:center;
            padding: 10px;
            margin-bottom:30px;

        }
        h5{
            font-size:17px;
        }
        h4{
            font-size:17px;
            margin-bottom:20px;

        }
        a{
            width: fit-content;
            float: left;
            font-size: 16px;
            color: #e63534;
            text-align: center;
            padding: 5px 12px;
            border-radius: 20px;
            border: 1px solid #E1C17E;
            font-weight: 600;
            margin-bottom:15px;
        }
        a:hover{
            color: #000!important;
            background-color: #E1C17E;
        }
        a button{
            background:none;
            border:none;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="py-5 col-lg-8 col-md-12">
                <h1>Booking Confirmation</h1>
                <p>Dear {{ $data['name'] }},</p>
                <p>Your booking for {{ $data['service_name'] }} on {{ $data['booking_date'] }} at {{ $data['time'] }} has been confirmed.</p>
                <p>Payment Terms: {{ $data['payment_terms'] }}</p>
                <p>Amount Paid: {{ ($data['amount'] * 100) / 2 }} {{ $data['currency'] }}</p>
                <p>Your order reference number is: {{ $data['payment_id'] }}</p>
                <p>Thank you for choosing our service!</p>

                </br>

                <h5>Regards,</h5>
                <h5><strong>Allure Essence Team</strong></h5>
  

            </div>

        </div>
    </div>


</body>
</html>