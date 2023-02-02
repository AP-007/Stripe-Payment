<form action="{{ route('stripe.payment') }}" method="POST">
    @csrf
    <div>
        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="pk_test_51MX2SOAKJkg9gs1PN9OVZchVTgzaAtSmwgyzOheU3I0R44cf4ZOb0qMZwkdwyrrwJYNUwd47PkRmPYyKzRCSxezU00YjyP2uz2"
        data-name="Buy me a very large coffee" data-label="Buy me a coffee" data-description="Pay per play" data-amount="100000" data-image="https://adarshapoudel.com.np/images/logos/fav.JPG" data-currency="usd"></script>
    </div>
</form>