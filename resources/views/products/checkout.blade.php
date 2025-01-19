
<script> const preference = {!! json_encode($preference->id) !!};  </script>; 

<script src="https://sdk.mercadopago.com/js/v2"></script>
<script>
    const mp = new MercadoPago('APP_USR-7df17ab1-d6f6-4912-a3ab-a7c1d6c19689');
    const bricksBuilder = mp.bricks();
    mp.bricks().create("wallet", "wallet_container", {
   initialization: {
       preferenceId: preference,
   },
customization: {
 texts: {
  valueProp: 'smart_option',
 },
 },
});
</script>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <h1>Checkout</h1> 
       <div id="wallet_container"></div>
    </div>
</div>

@endsection
