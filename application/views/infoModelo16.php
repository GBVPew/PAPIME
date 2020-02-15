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
     <p color="000000" size="10" face="Arial">Control de LLenado</p>
      <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic16.png')?>"
      width="300"
      height="300"
      style="padding-bottom: 30px" >
      </center>
        <table>
            <tr>
              <td>                    
            <b>Descripción del ejercicio:</b><br></br>  
                       
                  
          
            Utilizando un sensor de nivel de agua, una bomba, un relé, un par de botones y un par de LEDs realizamos un llenado controlado de un recipiente,pecera,algun sistema de agua.<br>
                <br>
            El codigo que usaremos sera el siguiente:
    </br>
  </br>
 
             </td>

                <td>
                   <b>Materiales:</b>
                   <ol type=”A”>
                      <li>1 Arduino UNO
                      </li>
                      <li>2 Resistencias de 220Ω
                      </li>
                      <li>2 Resistencias de 1KΩ
                      </li>
                      <li>1 Relay de 5v
                      </li>
                      <li>2 Interruptores
                      </li>
                      <li>1 Alambre para conexiones  
                      </li>
                      <li>1 Sensor de nivel de agua para arduino
                      </li>
                      <li>1 Bomba de agua para arduino
                      </li>
                      <li>1 Placa de pruebas (Protoboard) 
                      </li>
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
const int ledNivel = 10 ;
const int ledAuto = 11 ;
const int botonLlenadoManual = 6;
const int botonLlenadoAutomatico = 5;
const int bomba = 7;
const int sensor = 0;
const int limite = 380;

int encendido = 0;

void setup()
{   
	Serial.begin(9600);  
	pinMode( ledNivel, OUTPUT) ;
	pinMode( ledAuto, OUTPUT) ;
	pinMode( botonLlenadoManual  , INPUT) ;
	pinMode( botonLlenadoAutomatico  , INPUT) ;
	pinMode(bomba, OUTPUT);  
}

void loop()
{
	int valorSensor = analogRead(sensor); // obtenemos la medida del sensor
	Serial.println(valorSensor);
	if(valorSensor < limite){
		digitalWrite( ledNivel, HIGH);
	}else{
		digitalWrite( ledNivel, LOW) ;  
	}
	
	if(digitalRead(botonLlenadoManual) == HIGH){ // modo manual
		digitalWrite( bomba, HIGH) ;  
    }else{
		digitalWrite( bomba, LOW) ;  
		if(digitalRead(botonLlenadoAutomatico) == HIGH){
			encendido = !encendido;
		}
		digitalWrite( ledAuto, encendido) ;
		if(encendido == 1){
			if(valorSensor < limite){
				digitalWrite( bomba, HIGH) ;  
			}else{
				digitalWrite( bomba, LOW) ;  
			}
		}else{
			digitalWrite( bomba, LOW) ;  
		}
    }
	
    delay(500);
}                                                                                                                         
                </p>
           </div>                                              
</div>
 
</center>
       

    </body>

   

<p></p>

</html>