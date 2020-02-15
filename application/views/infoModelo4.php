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
     <p color="000000" size="10" face="Arial">Entrada Analógica.</p>
      <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic4.png')?>"
      width="300"
      height="300"
      style="padding-bottom: 30px" >
      </center>
        <table>
            <tr>
              <td>                    
            <b>Descripción del ejercicio:</b><br></br>  

			Se trata de configurar un canal de entrada analógico pin 0 y enviar el valor leído al PC
			para visualizarlo.  </br>
            </br>
            El codigo que usaremos sera el siguiente:
    </br>
  </br>
 
             </td>

                <td>
                   <b>Materiales:</b>
                   <ol type=”A”>
                      <li>1 Arduino UNO</li>
                      <li>1 Potenciometro de 10KΩ</li>
                      
                      <li>1 Placa de pruebas (Protoboard)  </li>
                      <li>1 Alambre para conexiones </li>
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
/* Entrada Analógica */   </br>
int potPin = 0; // selecciona el pin de entrada para    </br>colocar el potenciómetro   </br>
int val = 0; // variable para almacenar el valor leído por    </br>la entrada analógica   </br>
void setup() {   </br>
 beginSerial(9600);   </br>
}   </br>
void loop() {   </br>
 val = analogRead(potPin); // lee el valor del canal de    </br>ENTRADA analógica   </br>
 printInteger(val); // Envía al PC el valor analógico leído    </br>y lo muestra en pantalla   </br>
 serialWrite(10);   </br>
 delay(100);   </br>
}                                  </br>
                </p>
           </div>                                              
</div>
 
</center>
       

    </body>

   

<p></p>

</html>