@extends('layouts.main')
@section('main-content')
<div class="container pt-4">
    <h1>Coffe Time</h1>

    <h1>Hola, {{ $user->name }}</h1>
    <a class="btn btn-primary" href="{{ route('logout') }}">Cerrar Sesión</a>
    <a class="btn btn-primary" href="{{ route('Menu') }}">Lista de  Productos</a>
</div>
<div class="container pt-4">
    <p>¡Bienvenidos a Cofee TIme! En este rincón aromático y acogedor, te invitamos a sumergirte en una experiencia única de sabor y calidez. Desde el primer sorbo de nuestro café recién hecho hasta el último bocado de nuestros deliciosos postres, cada visita a nuestra cafetería es un viaje sensorial que despertará tus sentidos y te transportará a un mundo de sabores y momentos especiales. Ya sea que estés buscando un lugar tranquilo para relajarte con un buen libro, una reunión amistosa con colegas o simplemente una pausa en tu día ocupado, nuestra cafetería es el lugar perfecto para disfrutar de momentos memorables. Descubre todo lo que tenemos para ofrecer mientras exploras nuestro menú y nuestra atmósfera única. ¡Te garantizamos que encontrarás algo que te encante!</p>
</div>
<div class="container pt-4">
    <h2>
        Mision
    </h2>
    <p>
    Continuar ofreciendo a nuestros clientes momentos de alegría y satisfacción a través de una experiencia gastronómica excepcional y auténtica. Estamos dedicados a la búsqueda constante de la más alta calidad en nuestros productos y servicios, manteniendo nuestro compromiso de hospitalidad y servicio excepcionales. Además, seguimos siendo un activo positivo en nuestra comunidad, apoyando a nuestros proveedores locales y promoviendo la sostenibilidad en todas nuestras operaciones. Queremos ser un lugar donde la pasión por el café y el compromiso con la comunidad se unan para crear recuerdos inolvidables y un impacto positivo duradero.
    </p>

    <h2>Vision</h2>
    <p>Convertirnos en un referente de excelencia en la industria de la cafetería, no solo por la calidad excepcional de nuestros productos, sino también por ser un faro de inspiración en cuanto a la sostenibilidad y la conexión con la comunidad. Buscamos ser reconocidos como el lugar donde la pasión por el café se une a la calidez de la hospitalidad, y donde cada cliente se siente parte de una experiencia única que nutre cuerpo y alma, mientras contribuimos de manera significativa al bienestar de nuestro entorno y el planeta.</p>
</div>
@endsection
