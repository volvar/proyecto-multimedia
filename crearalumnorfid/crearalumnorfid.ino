#include <SPI.h>
#include <Ethernet.h>
#include <MFRC522.h>



//--------------------------------------------------------------------------------------------
//Declaración de variables

byte mac[] = {0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED}; //MAC
IPAddress ip(192, 168, 16, 117); //IP
EthernetServer servidor(80);
String pase="";
String rfid1 = "";
String rfid2;
const int RST_PIN = 9;            // Pin 9 para el reset del RC522
const int SS_PIN = 8;            // Pin 10 para el SS (SDA) del RC522
MFRC522 mfrc522(SS_PIN, RST_PIN);   // Crear instancia del MFRC522
//--------------------------------------------------------------------------------------------

//------------------------------------------------------ funciones----------------------------

String printArray(byte *buffer, byte bufferSize) {
  rfid1 = "";
  for (byte i = 0; i < bufferSize; i++) {
    String uid_a = String(mfrc522.uid.uidByte[i] < 0x10 ? "0" : "");
    String uid_b = String(mfrc522.uid.uidByte[i], HEX);
    rfid1 = rfid1 + uid_a + uid_b;
  }
  return rfid1;
}

void setup()
{
  //Inicializamos el servidor
  Serial.begin(9600);
  Ethernet.begin(mac, ip);
  servidor.begin();
  SPI.begin();
  mfrc522.PCD_Init();
}
void loop()
{ if (mfrc522.PICC_IsNewCardPresent())
   {
      if (mfrc522.PICC_ReadCardSerial())
      {
         Serial.print(F("Tarjeta ID: "));
         
         rfid2=printArray(mfrc522.uid.uidByte, mfrc522.uid.size);
         Serial.println(rfid2);
          rfid1="";
         // Finalizar lectura actual
         mfrc522.PICC_HaltA();
      }
   }
  EthernetClient cliente = servidor.available();
  if (cliente.available())
  {
    //------------------------------------------------WEB--------------------------------------------------------------------------------------

    if(pase==rfid2){
    cliente.println("<!DOCTYPE html>");
    cliente.println("<html lang='es'>");
    cliente.println("<meta http-equiv='refresh' content='1'>");
    cliente.println(rfid2);
    cliente.println("</html>");
    cliente.stop();//Cierro conexión con el cliente
    pase=rfid2;
    }
    else{
    pase="";
    cliente.println("<!DOCTYPE html>");
    cliente.println("<html lang='es'>");
    cliente.println("<head>");
    cliente.println("<title></title>");
    cliente.println("<meta charset='utf-8'>");
    cliente.println("</head>");

    cliente.println("<body>");

    cliente.println("<form action='http://192.168.16.102/proyecto-multimedia/creartarjeta/ingresar-tarjeta.html' method='POST'>");
    cliente.print("<input type='hidden' name='tarjeta' value='");
    cliente.println(" <input type='submit' value='Submit'>");
    cliente.println("</form>");

    cliente.println("</body>");

    cliente.println("</html>");
    cliente.flush();
    cliente.stop();//Cierro conexión con el cliente
      rfid2="";
      } 
  }
  
}
