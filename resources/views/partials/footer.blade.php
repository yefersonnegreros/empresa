<footer class="bg-dark text-white py-4">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h5>Contacto</h5>
                <ul class="list-unstyled">
                    <li><i class="bi bi-envelope-fill"></i> topicossoluciones@empresa.com</li>
                    <li><i class="bi bi-telephone-fill"></i> +51 98747478</li>
                    <li><i class="bi bi-geo-alt-fill"></i> Calle Negreros 369, Lima, Perú</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Enlaces</h5>
                <ul class="list-unstyled">
                    <li><a class="text-white text-decoration-none" href="{{ route('inicio') }}">Home</a></li>
                    <li><a class="text-white text-decoration-none" href="{{route('servicios.index')}}">Servicios</a></li>
                    <li><a class="text-white text-decoration-none" href="{{route('proyectos.index')}}">Proyectos</a></li>
                    <li><a class="text-white text-decoration-none" href="{{route('clientes.index')}}">Clientes</a></li>
                    <li><a class="text-white text-decoration-none" href="{{route('blogs.index')}}">Blog</a></li>
                    <li><a class="text-white text-decoration-none" href="{{route('contacto.index')}}">Contacto</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Redes Sociales</h5>
                <ul class="list-inline">
                    <li class="list-inline-item"><a class="text-white" href="#"><i class="bi bi-facebook"></i></a></li>
                    <li class="list-inline-item"><a class="text-white" href="#"><i class="bi bi-twitter"></i></a></li>
                    <li class="list-inline-item"><a class="text-white" href="#"><i class="bi bi-instagram"></i></a></li>
                    <li class="list-inline-item"><a class="text-white" href="#"><i class="bi bi-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        

    </div>
    <div class="text-center p-3 bg-dark text-white">
        © 2024 Derechos Reservados:
        <a href="{{ route('inicio') }}" class="text-white">empresa.com</a>
    </div>
</footer>