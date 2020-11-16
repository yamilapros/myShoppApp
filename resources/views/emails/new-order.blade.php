<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Pedido</title>
</head>
<body>
    <h1>Se ha realizado un nuevo pedido!.</h1>
    <h3>Estos son los datos del cliente que realizó el pedido:</h3>
    <ul>
        <li>
            <strong>Nombre:</strong>
            {{ $user->name }}
        </li>
        <li>
            <strong>Email:</strong>
            {{ $user->email }}
        </li>
        <li>
            <strong>Fecha del pedido:</strong>
            {{ $cart->order_date }}
        </li>
    </ul>
    <hr>
    <h4>Detalles del pedido</h4>
    <ul>
        @foreach($cart->details as $detail)
        <li>
            {{ $detail->product->name }} x {{ $detail->quantity }}
            (${{ $detail->quantity * $detail->product->price }})
        </li>
        @endforeach
    </ul>
    <p><strong>Total a pagar: {{ $cart->total }}</strong></p>
    <hr>
    <a href="" target="_blank">Haz click aquí</a>
    para ver más información de este pedido.
</body>
</html>