<html>
    <head>
        <title>{{ $data['subject'] }}</title>
    </head>
    <body>
        <div>
            <h2>{{ $data['subject'] }}</h2>
            <br>    
            <h3>A user sent quote.</h3>
            <br>
            <p> Name: {{ $data['quote']->fname }} {{ $data['quote']->lname }} </p>
            <p> Email: {{ $data['quote']->email }} </p>
            <p> Phone: {{ $data['quote']->phone }} </p>
            <p> Origin: {{ $data['quote']->fromAddress->address }}, {{ $data['quote']->fromAddress->city }}, {{ $data['quote']->fromAddress->country }}, {{ $data['quote']->fromAddress->postcode }} </p>
            <p> Destination: {{ $data['quote']->toAddress->address }}, {{ $data['quote']->toAddress->city }}, {{ $data['quote']->toAddress->country }}, {{ $data['quote']->toAddress->postcode }} </p>
            <div style="display: flex; flex-wrap: wrap; margin-right: 0px; margin-left: 0px; width: 600px; border-top: solid 1px #000;">
                <div style="width: 50%; margin-top: 20px;">
                    <p> Length: {{ $data['quote']->length }} </p>    
                    <p> Width: {{ $data['quote']->width }} </p>    
                    <p> Height: {{ $data['quote']->height }} </p>    
                </div>
                <div style="width: 50%; margin-top: 20px;">
                    <p> Weight: {{ $data['quote']->weight }} </p>    
                    <p> Shipping Date: {{ $data['quote']->date }} </p>    
                </div>
            </div>
        </div>
    </body>
</html>