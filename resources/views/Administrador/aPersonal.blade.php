<html>
<head>
  <title>@yield ('title', 'Default') | Menu de administrador</title>
  <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
</head> 
<body>
  <div class="container-frg"><h1 class="frg-font">Fragata</h1><h1 class="frg-font-slogan">Rediseñando Caminos, Transformando Vidas</h1>
  </div>
  <div class="form-control-frg-pacientes">
                    <form id="pform" action="#" method="post">
                <fieldset id="datos">
                    <legend>Datos Personales</legend>
                    <label for="nombre">Introduce tu nombre:</label>
                    <input type="text" name="nombre" value="Tu nombre"/><br/>
                    <label for="contra">Contraseña:</label>
                    <input type="password" name="contra"/><br/>
                    </fieldset>
                    <br/>
                    
                    <label for="estado_civil">Estado Civil</label>
                    Casado:
                    <input type="radio" name="estado_civil" value="1"/>
                    Soltero:
                    <input type="radio" name="estado_civil" value="0"/>
                    <br/>
                    <label for="beca">Tienes beca?</label>
                    <input type="checkbox" name="beca" value="1"/>
                    <br/>
                    <label for="cv">Curriculum:</label>
                    <input type="file" name="cv"/>
                    <br/>
                    <label for="comentario">Comentarios:</label>
                    <textarea name="comentario" cols="80" rows="10">Texto</textarea>
                    <br/>
                    <label for="carrera">Carrera:</label>
                    <select name="carrera">
                        <option value="1">ISC</option>
                        <option value="2">ITICS</option>
                        <option value="3">INF</option>
                    </select>
                    <br/>
                    <input type="submit" value="Enviar"/>
                    <input type="reset" value="Borrar"/>
                    <input type="button" value="Presiona" onclick="javascript:alert('hola');"/>
                    <!--<input type="image" src="original.png" alt="Registrar" value="Archivo"/>-->
                </form>
  </div>
</body>
</html>