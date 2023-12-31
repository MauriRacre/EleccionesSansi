<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear jurado</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/Form.css') }}">


</head>

<body>
    <nav>
        <div class="logo">
            <a href="#" class="logo2">
                <img src="/images/Logo_TE.png" alt="Lo" class="company-logo">
                
            </a>
            <div><a href="{{ url('/') }}">TRIBUNAL ELECTORAL</a></div>
            
            <div><a href="{{ url('/') }}">UNIVERSITARIO</a></div>
        </div>s
        <ul>
            <li></li><li></li>
            <li></li><li></li>
            <li></li><li></li>
            <li></li><li></li>

        <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="{{ url('/elecciones') }}">Elecciones</a></li>
            <li><a href="{{ url('/comunicados') }}">Comunicados</a></li>
            <li><a href="#">Documentación</a></li>
            {{-- <li><a href="#">Acerca de</a></li>
            <li><a href="#">Contactos</a></li> --}}
            <li><a href="#">Ingreso</a></li>
            <img src="/images/img.png"  class="company-logo">

        </ul>
        <div class="menu-icon"></div>
    </nav>
    <header>
    <div class="header">
        <label for=""></label><br><br>
    </div>

    <div class=" menu container">
        <form action="{{ isset($elecciones) ? url('/elecciones/' . $elecciones->id) : url('/elecciones') }}"
            method="post" enctype="multipart/form-data">
            @csrf
            @if (isset($elecciones))
                {{ method_field('PATCH') }}
            @endif
            <h2 class="form-title1">{{ $eleccion->nombre }}</h2>
            <br><br>
            <h2 class="form-title">Lista de Jurados</h2>


            
           
            <style>
              .elecciones-section {
            background-color: white; 
            padding: 20px;
        }
            .styled-button {
            width: 10%;
            height: 100%;
            background: rgba(4, 36, 60, 0.99);
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 5px;
            border: 1px solid rgba(198, 69, 196, 0.30);
            color: #fff; 
            padding: 1% 2%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #A70606;
            color: #FFFFFF;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .edit-button {
            background-color: #04243C;
            color: #FFF;
            padding: 5px 5px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div>
<div>
  <button id="crearJurados" class="styled-button">Crear</button>
</div>

</div>



   

  

<section class="elecciones-section">
        <div class="container">

            <table id="juradosTable" class="vistatabla">
                <thead>
                    <tr>
                        <th>Id de elección</th>
                        <th>N° Mesa</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Tipo Jurado</th>
                        <th>Cambiar Jurado</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($jurados as $jurado)
    <tr>
        <td>{{ $jurado->iddeeleccion }}</td>
        <td>{{ $jurado->idmesa }}</td>
        <td>{{ $jurado->nombres }}</td>
        <td>{{ $jurado->apellidoPaterno }}</td>
        <td>{{ $jurado->apellidoMaterno }}</td>
        <td>{{ $jurado->tipojurado }}</td>
        
        <td class="celda-botones">
    <a href="{{ route('jurados.edit', ['id' => $jurado->id]) }}" class="buttons" style="background-color: 04243C; color: #FFF; padding: 5px 10px; border: none; cursor: pointer;">Editar</a>
</td>

    </tr>
@endforeach
                </tbody>
            </table>
        </div>
    </section>

        <div class="footer">

            <div class="footer-izq">
                Av. Oquendo y calle Jordán asd
                <br>
                Mail: Tribunal_electoral@umss.edu
                <br>
                www.umss.edu.bo Cochabamba - Bolivia
                <br>
                Design: DevGenius

            </div>
            <div class="footer-medio">

                Copyright © 2023 Tribunal Electoral Universitario Todos los derechos Reservados

            </div>
            <div class="footer-der">
                <a href="{{ url('/') }}">Acerca de</a>
                <span>&nbsp;|&nbsp;</span> <!-- Para agregar un separador -->
                <a href="{{ url('/') }}">Contactos</a>

            </div>

        </div>
        </tr>
        </tbody>
                    
        </table>
    </div>
    </section>
</body>

</html>