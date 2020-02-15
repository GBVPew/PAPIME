<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
  <style>


    td{
      font-size: 15px;
      line-height: 20px;
      padding: 30px 100px 30px 100px;
      text-align: justify;
      vertical-align: top;
      width: 50%;
  }
  

 

 </style>
</head>

    <body>

      <center style="font-size: 30px ">
     <p color="000000" size="10" face="Arial"> Sistema de Alarma con sensor PIR.</p>
      <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic20.png')?>"
      width="300"
      height="300"
      style="padding-bottom: 30px" >
      </center>
        <table>
            <tr>
              <td>                    
            <b>Descripción del ejercicio:</b><br></br>  

            En esta practica  vamos a trabajar con un sensor PIR (passive IR), que nos va a dar mucho juego a la hora de realizar proyectos donde necesitemos detectar movimiento de personas o animales. Los sensores PIR o sensores de infrarrojo pasivo, miden la luz infrarroja emitida por los objetos situados en el campo de visión del sensor.<br>

Estos sensores son muy utilizados en alarmas para la detección de intrusión en viviendas, pero también se están aplicando en instalaciones domóticas para por ejemplo encender la luz de las escaleras cuando alguien entra a un edificio o en los aseos de muchos restaurantes.
<br><br>

            El codigo que usaremos sera el siguiente:
    </br>
  </br>
 
             </td>

                <td>
                   <b>Materiales:</b>
                   <ol type=”A”>
                      <li>1 Arduino UNO</li>
                      <li>1 Sensor PIR</li>
                      <li>1 Bocina 5V  </li>
                      <li>1 Reley de 5V </li>
                      <li>1 Placa de pruebas (Protoboard)</li>
                      <li>1  Alambre para conexiones  </li>
                   </ol>                                   
                </td>
                
            </tr>
        </table>
<center>


<html lang="es">
<head>
    <meta charset="utf-8">
    <style>
    #scroll{
       padding-top: 20px ;
        height:200px;
        width:600px;
        overflow-y:scroll;
        overflow-x:hidden;
    }
    </style>
</head>
 
<body>
   <p></p>
  <div class="center">
      <a href="<?php echo base_url();?>modelos/bobina" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>  
      <p></p>                 
  </div> 
 <div id="scroll">
  <div align="left">
                <p color="000000" size="4" face="Arial" LINE-HEIGHT S=5px>
#define PIR 2 //Establece el pin 2 para el sensor PIR  </br>
#define rele 3 //Establece el pin 3 para el relé  </br>
 
int tiempo = 5000; //Tiempo que suena la alarma  </br>
boolean sensor; //Variable que almacena el estado del sensor (activado/desactivado)  </br>
 
void setup()  </br>
{  </br>
  pinMode(PIR,INPUT); //Establece el pin del sensor como entrada  </br>
  pinMode(rele,OUTPUT); //Establece el pin del relé como salida  </br>
}  </br>
   </br>
void loop()  </br>  </br>
{  </br>
  sensor=digitalRead(PIR); //Guarda el estado del sensor en la variable  </br>
  if(sensor==HIGH) //Si el sensor es activado entra en el bucle  </br>
  {  </br>
    digitalWrite(rele,HIGH); //Activa la alarma  </br>
    delay(tiempo); //Espera el tiempo definido en la variable "tiempo"  </br>
    digitalWrite(rele,LOW); //Desconecta la alarma  </br>
  }  </br>
}    </br>
                </p>
           </div>                                              
</div>
 
</center>
       

    </body>

   

<p></p>

</html>