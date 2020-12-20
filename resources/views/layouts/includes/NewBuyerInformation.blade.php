<!DOCTYPE html>
<html lang="en">

<head>
    <title>চিত্রকলা গ্যালারী</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Buyer info" />
    <meta name="description" content="Chitrokola gallery is the best place for buying art" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <style type="text/css">
        body {
            font-family: 'Open Sans', sans-serif;
        }

        .ecommerce-billing-fields {
            list-style: none;
        }

        .ecommerce-billing-fields ul>li {
            list-style: none;
        }

        .orderer {
            float: left;
        }

        .panel-heading {
            color: green;
        }

    </style>
</head>

<body class="common-home res layout-4">
    <div class="main-container container">
        <div class="row">
            <div id="content" class="col-md-12">
                <div class="so-onepagecheckout row">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-left col-md-12">
                                <div class="ecommerce-billing-fields">
                                    <ul class="deliver">
                                        <li>
                                            <h3 style="color:green">Hi Chitrokola Admin</h3>
                                        </li>
                                        <li>
                                            <h4><strong style="color:blue">You have an new buyer information</strong>
                                            </h4>
                                        </li>
                                        <li>
                                            <h4><strong>Art Code : </strong> {{ $buyer->code }}</h4>
                                        </li>
                                        <li>
                                            <h4><strong>Art Title : </strong> {{ $buyer->art_name }}</h4>
                                        </li>
                                        <li>
                                            <h4><strong>Buyer Name : </strong>{{ $buyer->name }}</h4>
                                        </li>
                                        <li>
                                            <h4><strong>Buyer Phone : </strong>{{ $buyer->phone }}</h4>
                                        </li>
                                        <li>
                                            <h4><strong>Buyer Email : </strong>{{ $buyer->email }}</h4>
                                        </li>
                                        <li>
                                            <h4><strong>Buyer Address : </strong>{{ $buyer->address }}</h4>
                                        </li>
                                        <li>
                                            <a href="{{ url('/admin/view/buyers') }}">
                                                <button style="cursor:pointer;">Click To Check
                                                </button>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
