<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width. initial-scale=1.0">
    <title>Preguntas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
            </div>
            <div class="col-md-12">
                <h1>Test</h1>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="../juego/lol.php" method="POST">
                        <legend>Responde la pregunta</legend>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                    <h6>Escoga su categoria</h6>
                                    <select class="form-control" name="valorCategoria" id="">
                                        <option value="1.00">Accion</option>
                                        <option value="2.00">Aventura</option>
                                        <option value="3.00">Condunccion</option>
                                        <option value="4.00">Deportes</option>
                                        <option value="5.00">Estrategia</option>
                                        <option value="6.00">Rol</option>
                                        <option value="7.00">Puzzle</option>
                                        <option value="8.00">Shooter</option>
                                        <option value="9.00">Simulacion</option>
                                        <option value="10.00">Vuelo</option>
                                    </select>
                                    <div>
                                        <br>
                                    </div>
                                    <h6>Con que clase de jugar se identifica</h6>
                                        <select class="form-control" name="valorClase" id="">
                                            <option value="1.00">Socializador</option>
                                            <option value="2.00">Anarquista</option>
                                            <option value="3.00">Conquistador</option>
                                            <option value="4.00">Competidor</option>
                                            <option value="5.00">Explorador</option>
                                        </select>
                                        <li>Socializador: Defínase aquel jugador que tiende a generar comunidades dentro de un juego y que
                                        usualmente incursiona en alianzas y otras similares para poder lograr sus objetivos
                                        acompañado de otros jugadores.</li>
                                        <li>Anarquista: Jugador que no asume su rol y va por libre realizando acciones sólo por su afán personal sin
                                        que esta vaya de la mano de la línea argumental del juego.</li>
                                        <li>Conquistador: Jugador experimentado en armas y en combates cuerpo a cuerpo. se caracteriza por definir
                                        sus personajes como guerreros. líderes o similares.</li>
                                        <li>Competidor: Jugador que se desempeña bien en escuadras y que es un pilar fundamental para su
                                        equipo. ya que aporta desde esa transversalidad a alcanzar los desafíos del mismo.</li>
                                        <li>Explorador: Jugador que recorre grandes extensiones de juego explorando distintas alternativas de
                                        recursos o armas para él y su equipo. usualmente no realiza ataques puesto que su perfil se
                                        aleja de aquellos líderes o precursores de hazañas gloriosas.</li>
                                    <div>
                                        <br>
                                    </div>
                                    <h6>Escoga su preferencia al jugar</h6>
                                    <select class="form-control" name="valorPreferencia" id="">
                                        <option value="0.15">Juega Individual</option>
                                        <option value="0.30">Juega en duos</option>
                                        <option value="0.45">Juega en trios</option>
                                        <option value="0.60">Juega en escuadras</option>
                                        <option value="0.75">Juega Offline</option>
                                        <option value="0.90">Juega Teclado</option>
                                        <option value="1.05">Juega Joystick</option>
                                        <option value="1.20">Juega PC</option>
                                        <option value="1.35">Juega Consola</option>
                                        <option value="1.50">Juega Clasicos</option>
                                        <option value="1.65">Juega Modernos</option>
                                    </select>
                                    <div>
                                        <br>
                                    </div>
                                    <h6>Escoga si usted es</h6>
                                    <select class="form-control" name="valorPericia" id="">
                                        <option value="1.00">Neofito</option>
                                        <option value="2.00">Novato</option>
                                        <option value="3.00">Amateur</option>
                                        <option value="4.00">Training</option>
                                        <option value="5.00">Intermedio</option>
                                        <option value="6.00">Rooki</option>
                                        <option value="7.00">Senior</option>
                                        <option value="8.00">SemiPro</option>
                                        <option value="9.00">Experto</option>
                                        <option value="10.00">Profesional</option>
                                        <option value="11.00">Veterano</option>
                                    </select>
                                    <li>Neofito: Aquel que no tiene conocimiento alguno para los videojuegos.</li>
                                    <li>Novato: Aquel que tiene conocimiento relativamente bajos en videojuegos.</li>
                                    <li>Amateur: Aquel que tiene un poco mas de conocimiento sobre videojuegos.</li>
                                    <li>Training: Aquel que a jugado a videojuegos en su infancia.</li>
                                    <li>Intermedio: Aquel que ya ocupa los videosjuegos como pasatiempo.</li>
                                    <li>Rooki: Aquel que juega un par de horas al dia a los videojuegos.</li>
                                    <li>Senior: Aquel que ya juega mas que unas par de horas al dia a dos videojuegos.</li>
                                    <li>SemiPro: Aquel que ya se ve profesionalmente en los videojuegos.</li>
                                    <li>Experto: Aquel con conocimiento avanzados sobre videojuegos.</li>
                                    <li>Profesional: Aquel que esta en un equipo de videojuegos.</li>
                                    <li>Veterano: Aquel que ya su vida son los videojuegos.</li>
                                    <div>
                                        <br>
                                    </div>
                                    <h6>Indique cuantas horas le dedica a jugar</h6>
                                    <select class="form-control" name="valorHoras" id="">
                                        <option value="1.00">de 0 a 1 horas</option>
                                        <option value="2.00">de 1 a 3 horas</option>
                                        <option value="3.00">de 4 a 6 horas</option>
                                        <option value="4.00">de 7 a 8 horas</option>
                                        <option value="5.00">mas de 8 horas</option>
                                    </select>
                                    <div>
                                        <br>
                                    </div>
                                    <h6>Indique cuanto tiempo en meses le otorga a un juego</h6>
                                    <select class="form-control" name="valorMeses" id="">
                                        <option value="0.50">de 0 a 1 mes</option>
                                        <option value="0.60">de 1 a 3 meses</option>
                                        <option value="0.70">de 4 a 6 meses</option>
                                        <option value="0.80">de 6 a 9 meses</option>
                                        <option value="0.90">10 meses o mas</option>
                                    </select>
                                    <div>
                                        <br>
                                    </div>
                                    <h6>Indique si tiene conocimiento previos</h6>
                                    <select class="form-control" name="valorConocimiento" id="">
                                        <option value="0.25">No tiene experiencia previa</option>
                                        <option value="0.45">Tiene experiencia con playstation</option>
                                        <option value="0.65">Tiene experiencia con xbox</option>
                                        <option value="0.85">Tiene experiencia con pc gaming</option>
                                    </select>
                                    <div class="col-md-12 text-end">
                                        <hr>
                                        <button class="btn btn-success" type="submit" name="guardar">Datos</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>