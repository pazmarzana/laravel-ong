@component('mail::message')
Hola {{$first_name}}, gracias por suscribirte a nuestro newsletter.

¿Desea anular la suscripcion?En nuestro sitio encontrará más informacion.
@component('mail::button', ['url' => $url])
Ir al sitio.
@endcomponent

@endcomponent
